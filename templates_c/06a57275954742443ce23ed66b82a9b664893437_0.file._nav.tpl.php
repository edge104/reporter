<?php
/* Smarty version 3.1.30, created on 2017-11-22 11:27:23
  from "E:\UniServerZ\www\tad1062\reporter\templates\_nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a14ee9b785260_54395348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a57275954742443ce23ed66b82a9b664893437' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\_nav.tpl',
      1 => 1511321239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a14ee9b785260_54395348 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Loader -->
<div id="page-loader">
    <svg class="loader" viewBox="0 0 28 28">
        <circle cx="14" cy="14" r="12" stroke-width="2"></circle>
    </svg>
</div>

<!-- Navigation -->
<nav id="navigation" class="navigation-horizontal dark">

    <!-- Name -->
    <a href="index.php">
        <img src="images/logo.png" alt="" class="ml-3">
    </a>

    <!-- Navigation Primary -->
    <div class="navbar-nav mr-auto">
        <ul class="nav nav-primary-horizontal">
            <li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">編輯精選</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">街巷故事</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">市井觀點</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">私房知識塾</a></li>
        </ul>
    </div>
    <div class="navbar-nav">
        <ul class="nav nav-primary-horizontal">
             <?php if (isset($_SESSION['username'])) {?>
                <li class="nav-item"><a class="nav-item" href="admin.php">發佈</a></li>
                <li class="nav-item"><a class="nav-item" href="logout.php">登出</a></li>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-item" href="signup.php">註冊</a></li>
                <li class="nav-item"><a class="nav-item" href="main_login.php">登入</a></li>
            <?php }?>
        </ul>
    </div>


    <!-- Navigation Toggle -->
    <a id="navigation-toggle" class="nav-toggle mr-5"><span></span><span></span><span></span><span></span></a>

</nav>
<!-- Navigation / End --><?php }
}
