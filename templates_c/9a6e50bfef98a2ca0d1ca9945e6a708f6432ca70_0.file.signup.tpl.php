<?php
/* Smarty version 3.1.30, created on 2017-11-22 10:51:08
  from "E:\UniServerZ\www\tad1062\reporter\templates\signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a14e61c1dc274_45631965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6e50bfef98a2ca0d1ca9945e6a708f6432ca70' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\signup.tpl',
      1 => 1511319064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
    'file:_nav.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a14e61c1dc274_45631965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


    <?php $_smarty_tpl->_subTemplateRender("file:_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content -->
    <div id="content">

        <!-- Post / Single -->
        <article class="post single">

            <!-- Post Image -->
            <div class="post-image bg-image-container">
                <img src="assets/img/posts/post01_lg.jpg" alt="">
            </div>

            <div class="post-content section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 push-lg-4">
                            <div class="post-add-comment">
                                <h3 class="text-center mb-5"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h3>
                                <div class="content">

        <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
            <input name="newuser" id="newuser" type="text" class="form-control" placeholder="登入帳號" autofocus>
            <input name="email" id="email" type="text" class="form-control" placeholder="Email信箱">
            <br>
            <input name="password1" id="password1" type="password" class="form-control" placeholder="設定登入密碼">
            <input name="password2" id="password2" type="password" class="form-control" placeholder="確認密碼">

            <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">送出註冊申請</button>
            <small id="passwordHelpBlock" class="form-text text-muted" style="font-size:1rem">
                表單送出後，系統將寄出郵件驗證信函
            </small>
            <div id="message"></div>
        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>

    </div>
    <!-- Content / End -->




<?php $_smarty_tpl->_subTemplateRender("file:_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="js/signup.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
                                
</body>
</html>


<?php }
}
