<?php
/* Smarty version 3.1.30, created on 2017-11-23 13:53:36
  from "E:\UniServerZ\www\tad1062\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a166260894fb8_27845564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0713c5194565d6638babb0c036dea48d3ea6871c' => 
    array (
      0 => 'E:\\UniServerZ\\www\\tad1062\\reporter\\templates\\index.tpl',
      1 => 1511416190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
    'file:_nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a166260894fb8_27845564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


    <?php $_smarty_tpl->_subTemplateRender("file:_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Content -->
    <div id="content">

    <!-- 自動載入 $op 對應的樣板檔 -->
    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    </div>
    <!-- Content / End -->

    <?php $_smarty_tpl->_subTemplateRender("file:_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
