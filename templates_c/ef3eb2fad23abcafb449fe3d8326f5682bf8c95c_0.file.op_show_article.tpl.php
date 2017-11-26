<?php
/* Smarty version 3.1.30, created on 2017-11-23 15:38:22
  from "E:\UniServerZ\www\tad1062\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a167aee8fe147_46936051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3eb2fad23abcafb449fe3d8326f5682bf8c95c' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\op_show_article.tpl',
      1 => 1511422695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a167aee8fe147_46936051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Post / Single -->
<article class="post single">

    <!-- Post Image -->
    <div class="post-image bg-image-container">
        <img src="assets/img/posts/post01_lg.jpg" alt="">
    </div>

    <div class="post-content section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 push-lg-1">
                    <!-- <nav class="post-nav">
                        <a href="#"><i class="ti-angle-left"></i></a>
                        <a href="blog-horizontal.html"><i class="ti-menu"></i></a>
                        <a href="#"><i class="ti-angle-right"></i></a>
                    </nav> -->
                    <div class="post-header">
                        <span class="date text-muted"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['display_time'];?>
</span>
                        <h1 class="post-title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                        <ul class="post-meta">
                            <li><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;<a href="#">Sport</a>, <a href="#">Motivation</a></li>
                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;作者：<?php echo $_smarty_tpl->tpl_vars['article']->value['username'];?>
</li>
                            <!-- <li><i class="li-feedback"></i>5 Comments</li> -->
                        </ul>
                    </div>
                    <div class="post-content">
                         <?php echo $_smarty_tpl->tpl_vars['article']->value['pure_content'];?>

                    </div>
                    <!-- <div class="post-comments post-module">
                        <h4 class="text-center mb-5">Comments</h4>
                        <div class="content">
                            <ul class="comments">
                                <li>
                                    <div class="avatar"><img src="assets/img/avatars/avatar01.jpg" alt=""></div>
                                    <div class="content">
                                        <span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
                                        <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="assets/img/avatars/avatar02.jpg" alt=""></div>
                                            <div class="content">
                                                <span class="details">Jessica Biel on September 20</span>
                                                <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus,
                                                    nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique
                                                    orci. Donec velit nisi, auctor ac pharetra in, maximus eu justo.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="avatar"><img src="assets/img/avatars/avatar03.jpg" alt=""></div>
                                    <div class="content">
                                        <span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
                                        <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-add-comment post-module">
                        <h4 class="text-center mb-5">Write a comment</h4>
                        <div class="content">
                            <form action="#" id="add-comment" class="validate-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="comment" cols="30" rows="4" class="form-control" placeholder="Comment" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 push-md-3">
                                        <button class="btn btn-lg btn-primary btn-block">Send a comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

</article><?php }
}
