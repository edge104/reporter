<?php
//Pull '$base_url' and '$signin_url' from this file
include 'globalcon.php';
//Pull database configuration from this file
include 'dbconf.php';

//Set this for global site use
$site_name = '巷談集-街道新聞';

//Maximum Login Attempts
$max_attempts = 5;
//Timeout (in seconds) after max attempts are reached
$login_timeout = 600;

//ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
$admin_email = '';

//EMAIL SETTINGS
//SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
$from_email = 'edgelovephp@gmail.com'; //Webmaster email
$from_name  = '巷談集-街道新聞'; //"From name" displayed on email

//Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
$mailServerType = 'smtp';
//IF $mailServerType = 'smtp'
$smtp_server   = 'smtp.gmail.com';
$smtp_user     = 'edgelovephp@gmail.com';
$smtp_pw       = '0960088809';
$smtp_port     = 587; //465 for ssl, 587 for tls, 25 for other
$smtp_security = 'tls'; //ssl, tls or ''
//使用google信箱，記得要去啟用帳號的安全性較低的應用程式存取權

//HTML Messages shown before URL in emails (the more
$verifymsg    = '點選此連結以完成帳號驗證'; //Verify email message
$active_email = '您的帳號已成功啟用，點選此連結來登入'; //Active email message
//LOGIN FORM RESPONSE MESSAGES/ERRORS
$signupthanks = '感謝您注冊帳戶，您將會收到一封認證郵件，請查閱您的信箱，並且點選信中的驗證連結';
$activemsg    = '<div style="text-align:center;margin-top:3rem;font-size:1.3rem;">您的帳號已成功啟用，點選此連結來登入：<a href="' . $signin_url . '">' . $signin_url . '</a></div>';

//DO NOT TOUCH BELOW THIS LINE
//Unsets $admin_email based on various conditions (left blank, not valid email, etc)
if (trim($admin_email, ' ') == '') {
    unset($admin_email);
} elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
    unset($admin_email);
    echo $invalid_mod;
}
;
$invalid_mod = '$adminemail is not a valid email address';

//Makes readable version of timeout (in minutes). Do not change.
$timeout_minutes = round(($login_timeout / 60), 1);
