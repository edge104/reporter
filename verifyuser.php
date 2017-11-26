<!DOCTYPE html>
<html>
  <head>
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="assets/css/themes/theme-mint.css" />
    <link id="theme" rel="stylesheet" href="assets/css/diy.css" />
    <meta charset="UTF-8">
    <title>驗證使用者</title>
  </head>
  <body>
<?php
require 'includes/functions.php';
include 'config.php';

//Pulls variables from url. Can pass 1 (verified) or 0 (unverified/blocked) into url
@$uid    = $_GET['uid'];
@$verify = $_GET['v'];

$e       = new SelectEmail;
$eresult = $e->emailPull($uid);

$email    = $eresult['email'];
$username = $eresult['username'];

$v = new Verify;

if (isset($uid) && !empty(str_replace(' ', '', $uid)) && isset($verify) && !empty(str_replace(' ', '', $verify))) {

    //Updates the verify column on user
    $vresponse = $v->verifyUser($uid, $verify);

    //Success
    if ($vresponse == 'true') {
        echo $activemsg;

        //Send verification email
        $m = new MailSender;
        $m->sendMail($email, $username, $uid, 'Active');
    } else {
        //Echoes error from MySQL
        echo $vresponse;
    }
} else {
    //Validation error from empty form variables
    echo '<div style="text-align:center;margin-top:3rem;font-size:1.3rem;">發生了點錯誤... 請點擊 <a href="index.php">這裡</a> 返回網站首頁</div>';
}
;

?>
</body>
</html>
