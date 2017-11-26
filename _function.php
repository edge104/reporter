<?php
//連線到資料庫
function link_db()
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter');
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    return $db;
}

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
