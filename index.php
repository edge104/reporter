<?php
require_once '_header.php';
$page_title = '首頁';

/***************** ↓ 流程控制 ↓ ********************/

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
switch ($op) {

    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

require_once '_footer.php';

/***************** ↓ 函式區 ↓ ********************/

//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;

    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql    = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();

    $data['pure_content'] = $purifier->purify($data['content']);
    //把資料裡的update_time調整成合適的時間式式，打包成display_time給$data[]
    $data['display_time'] = date("d M Y", strtotime($data['update_time']));
    $smarty->assign('article', $data);

    //die(var_export($display_time));

}

//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0; //給$all[]設一個初始值，讓all[]在迴圈裡的索引值可穩定+1

    while ($data = $result->fetch_assoc()) {
        $all[$i] = $data;
        //裁剪過的content打包成summary給$data[]，用於文章列表
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        //把資料裡的update_time調整成合適的時間式式，打包成display_time給$data[]
        $all[$i]['display_time'] = date("d M Y", strtotime($data['update_time']));
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}
