<?php
require_once '_function.php';
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$db     = link_db();

$site_title = '巷集談-街道新聞';

//自動抓樣板檔，把值塞給常數 _PAGE_TPL
//在_footer.php 加入 $smarty->display(_PAGE_TPL); 即會自動載入與.php檔名相同的.tpl
define('_PAGE_TPL', str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
