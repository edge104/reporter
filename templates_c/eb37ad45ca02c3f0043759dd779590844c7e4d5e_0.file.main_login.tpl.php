<?php
/* Smarty version 3.1.30, created on 2017-11-22 11:05:58
  from "E:\UniServerZ\www\tad1062\reporter\templates\main_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a14e9965a6906_58645084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb37ad45ca02c3f0043759dd779590844c7e4d5e' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\main_login.tpl',
      1 => 1511318689,
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
function content_5a14e9965a6906_58645084 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <form class="form-signin" name="form1" method="post" action="checklogin.php">
                                    <input name="myusername" id="myusername" type="text" class="form-control" placeholder="登入帳號" autofocus>
                                    <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="密碼">
                                    <!-- The checkbox remember me is not implemented yet...
                                <label class="checkbox">
                                <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                -->
                                    <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">登 入</button>

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

<!-- The AJAX login script -->
<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
