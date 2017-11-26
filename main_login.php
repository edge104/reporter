<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");

}
require_once '_header.php';
$page_title = '會員登入';

require_once '_footer.php';
