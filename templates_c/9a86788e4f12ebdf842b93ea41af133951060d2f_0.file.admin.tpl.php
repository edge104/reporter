<?php
/* Smarty version 3.1.30, created on 2017-11-22 22:21:02
  from "E:\UniServerZ\www\tad1062\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1587ceeb5de3_81597096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a86788e4f12ebdf842b93ea41af133951060d2f' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\admin.tpl',
      1 => 1511360457,
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
function content_5a1587ceeb5de3_81597096 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="col-lg-12">                        
                        <div class="post-add-comment">
                            <h3 class="text-center mb-5">發佈新聞</h3>
                            <div class="content">
                                <form action="admin.php" method="post" id="add-comment" class="validate-form">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="標題" required>
                                    </div>
                                    <div class="form-group">
                                        <?php echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
                                        <textarea name="content" id="article_content" class="form-control"></textarea>
                                        <?php echo '<script'; ?>
>
                                            CKEDITOR.replace('article_content');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 push-md-3">
                                            <input type="hidden" name="op" value="insert">
                                            <button class="btn btn-lg btn-primary btn-block">確 認 發 佈</button>
                                        </div>
                                    </div>
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


</body>

</html><?php }
}
