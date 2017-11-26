<?php
//SYSTEM SETTINGS
$base_url   = 'http://' . $_SERVER['SERVER_NAME'];
$signin_url = substr($base_url . $_SERVER['PHP_SELF'], 0, -(strlen(basename($_SERVER['PHP_SELF']))));
//6 + 的用意是會自動把 網站網址後面的 /login 六個字元刪掉，通知郵件中就只留下網站本身的網址
//$signin_url = substr($base_url . $_SERVER['PHP_SELF'], 0, -(6 + strlen(basename($_SERVER['PHP_SELF']))));

//DO NOT CHANGE
$ip_address = $_SERVER['REMOTE_ADDR'];
