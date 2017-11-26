<?php
/* Smarty version 3.1.30, created on 2017-11-23 15:15:30
  from "E:\UniServerZ\www\tad1062\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a167592c39ca7_38520704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e724548e0173d9433cfdd6a4a63fc39a571dcf8e' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\op_list_article.tpl',
      1 => 1511420334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a167592c39ca7_38520704 (Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Section - Start -->
        <section id="section-start" data-anchor="start" class="section section-home-parallax fullheight light bg-light mouse-parallax"
            data-scheme="light" data-local-scroll>

            <!-- BG Image -->
            <div class="bg-container">
                <div class="bg-image-container mouse-parallax-item h-only" data-parallax-speed="250"><img src="assets/img/photos/recruiter/home01.jpg" alt=""></div>
                <div class="bg-image-container mouse-parallax-item h-only" data-parallax-speed="75" data-parallax-reverse="true"><img src="images/slider01.jpg" alt=""></div>
            </div>

            <!-- Section Content -->
            <div class="section-content pos-v-center">
                <div class="container">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-8 col-10">
                            <h1 class="display-2 mb-1 text-right">台南市公民<br>傳播媒體的草根平台</h1>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section - Blog -->
        <section id="blog" class="section bg-light light" data-scheme="light">

            <!-- Section Content -->
            <div class="section-content">
                <div class="container">
                    <h3 class="mb-5 text-center">最新新聞</h3>
                    <div class="row masonry">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <div class="masonry-sizer col-xl-4 col-sm-6 col-12"></div>
                        <div class="masonry-item col-xl-4 col-sm-6 col-12">
                            <!-- Post - Item -->
                            <article class="post item">
                                <div class="post-image">
                                    <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['data']->value['sn'];?>
"><img src="assets/img/posts/post03.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title"><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['data']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></h4>
                                    <ul class="post-meta">
                                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['display_time'];?>
</a></li>
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">by:<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
</a></li>
                                    </ul>
                                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['summary'];?>
</p>
                                </div>
                            </article>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                    <div class="text-center mt-3">
                        <a href="blog-panel.html" class="btn btn-lg btn-outline-primary">檢視全部新聞</a>
                    </div>
                </div>
            </div>

        </section><?php }
}
