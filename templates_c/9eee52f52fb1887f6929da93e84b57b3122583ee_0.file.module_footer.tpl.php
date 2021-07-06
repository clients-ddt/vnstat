<?php
/* Smarty version 3.1.39, created on 2021-07-06 16:23:53
  from '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e47589f38aa9_87062527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eee52f52fb1887f6929da93e84b57b3122583ee' => 
    array (
      0 => '/var/www/us-ny-07.omnivpn.org/vnstat2/templates/module_footer.tpl',
      1 => 1625585014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:module_graph_js.tpl' => 1,
  ),
),false)) {
function content_60e47589f38aa9_87062527 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:module_graph_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
