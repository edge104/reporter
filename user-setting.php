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

    default:
        $op = "";
        break;
}

require_once '_footer.php';

/***************** ↓ 函式區 ↓ ********************/
