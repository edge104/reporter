<?php
/* Smarty version 3.1.30, created on 2017-11-21 15:13:04
  from "E:\UniServerZ\www\tad1062\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a13d2004a5352_88871743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0713c5194565d6638babb0c036dea48d3ea6871c' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\index.tpl',
      1 => 1511248381,
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
function content_5a13d2004a5352_88871743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


<?php $_smarty_tpl->_subTemplateRender("file:_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Content -->
    <div id="content">

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
                    <div class="masonry-sizer col-xl-4 col-sm-6 col-12"></div>
                    <div class="masonry-item col-xl-4 col-sm-6 col-12">
                        <!-- Post - Item -->
                        <article class="post item">
                            <div class="post-image">
                                <a href="blog-post-panel.html"><img src="assets/img/posts/post03.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h4 class="post-title"><a href="blog-post-panel.html">How to work more effective?</a></h4>
                                <ul class="post-meta">
                                    <li><a href="#">24 July 2017</a></li>
                                    <li><a href="#">Work</a></li>
                                </ul>
                                <p>Proin pulvinar massa neque, vel sodales augue aliquet placerat. Sed consequat commodo magna
                                    ac luctus.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="blog-panel.html" class="btn btn-lg btn-outline-primary">檢視全部新聞</a>
                </div>
            </div>
        </div>

    </section>

    </div>
    <!-- Content / End -->

<?php $_smarty_tpl->_subTemplateRender("file:_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}