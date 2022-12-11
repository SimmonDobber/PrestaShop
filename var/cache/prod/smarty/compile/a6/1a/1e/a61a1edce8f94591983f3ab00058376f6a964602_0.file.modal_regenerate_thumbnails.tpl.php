<?php
/* Smarty version 4.2.1, created on 2022-12-11 00:30:41
  from '/var/www/html/admin-dev/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639516a13dc325_27850933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a61a1edce8f94591983f3ab00058376f6a964602' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1669929133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639516a13dc325_27850933 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the erase option enabled, the previous thumbnails that you selected will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
