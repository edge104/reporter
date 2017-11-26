<?php
require "loginheader.php"; //請求檢查登入狀態
require_once '_header.php';
$page_title = '控制台';

/***************** ↓ 函式區 ↓ ********************/

//新增資料
if (isset($_POST['op']) and $_POST['op'] == "insert") {

    //利用 $db->real_escape_string() 過濾資料，目的是順利讓所有資料存入資料庫，並避免隱碼攻擊
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "INSERT INTO `article` (`title`, `content`, `username`, `create_time`, `update_time`) VALUES ('{$title}', '{$content}', '{$username}', NOW(), NOW())";
    $db->query($sql) or die($db->error);

    //寫入後取回索引值
    $sn = $db->insert_id;
    header("location: index.php?sn={$sn}");
    exit;
}

require_once '_footer.php';
