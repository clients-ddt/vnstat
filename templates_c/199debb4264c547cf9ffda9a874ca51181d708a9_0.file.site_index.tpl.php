<?php
/* Smarty version 3.1.39, created on 2021-07-06 16:26:46
  from '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/site_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e476364932b9_22653588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '199debb4264c547cf9ffda9a874ca51181d708a9' => 
    array (
      0 => '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/site_index.tpl',
      1 => 1625585203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:module_header.tpl' => 1,
    'file:module_graph.tpl' => 1,
    'file:module_footer.tpl' => 1,
  ),
),false)) {
function content_60e476364932b9_22653588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:module_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:module_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:module_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
