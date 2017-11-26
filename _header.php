<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '_function.php';
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$db     = link_db(); //執行_function.php中的連線函式

$site_title = '巷集談-街道新聞';

//捉取php檔自身的檔名，將.php改成.tpl後，再將檔名塞給常數 _PAGE_TPL
//在_footer.php 加入 $smarty->display(_PAGE_TPL); 即會自動載入與.php檔名相同的.tpl
define('_PAGE_TPL', str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
