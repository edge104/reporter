<?php
require "loginheader.php"; //請求檢查登入狀態
require_once '_header.php';
$page_title = '控制台';

/***************** ↓ 流程控制 ↓ ********************/

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;

    case 'delete_article':
        $sn = delete_article($sn);
        header("location: index.php");
        exit;

    case 'modify_article':
        show_article($sn);
        break;

    case 'update':
        update_article($sn);
        header("location: index.php?sn={$sn}");
        exit;

    default:
        $op = "article_form";
        break;
}

require_once '_footer.php';

/***************** ↓ 函式區 ↓ ********************/

//新增資料
function insert_article()
{

    global $db;
    //利用 $db->real_escape_string() 過濾資料，目的是順利讓所有資料存入資料庫，並避免隱碼攻擊
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "INSERT INTO `article` (`title`, `content`, `username`, `create_time`, `update_time`) VALUES ('{$title}', '{$content}', '{$username}', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    //寫入後取回索引值
    $sn = $db->insert_id;

    upload_pic($sn);

    // $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
    // if (!is_dir('uploads')) {
    //     mkdir('uploads');
    // }
    // move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");

    return $sn;
}

//刪除文章
function delete_article($sn)
{
    global $db;

    $sql = "DELETE FROM `article` WHERE sn='{$sn}' and username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);

    //連同封面圖片一併刪除
    if (file_exists("uploads/cover_{$sn}.png")) {
        unlink("uploads/cover_{$sn}.png");
        unlink("uploads/thumb_{$sn}.png");
    }

}

//修改文章
function update_article($sn)
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "UPDATE `article` SET `title`='{$title}', `content`='{$content}',`update_time`=NOW() WHERE sn='$sn' AND username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);
    upload_pic($sn);
    return $sn;
}

//上傳封面照片
function upload_pic($sn)
{

    //有上傳檔案時才執行
    if (isset($_FILES)) {

        //如果已有封面，先刪掉再執行上傳﹙修改時派上用場
        if (file_exists("uploads/cover_{$sn}.png")) {
            unlink("uploads/cover_{$sn}.png");
            unlink("uploads/thumb_{$sn}.png");
        }

        require_once 'class/class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }

        //上傳檔案與移動檔案+更變檔名
        // $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
        // if (!is_dir('uploads')) {
        //     mkdir('uploads');
        // }
        // move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");
    }
}
