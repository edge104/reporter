<?php
session_start();
if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();
}

require_once '_header.php';
$page_title = '免費成為會員';

require_once '_footer.php';
