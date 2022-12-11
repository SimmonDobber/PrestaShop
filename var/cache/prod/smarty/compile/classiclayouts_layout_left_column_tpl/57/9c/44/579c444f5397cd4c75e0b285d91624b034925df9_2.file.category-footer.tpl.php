<?php
/* Smarty version 4.2.1, created on 2022-12-10 23:36:28
  from '/var/www/html/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639509ec7264a4_60403954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579c444f5397cd4c75e0b285d91624b034925df9' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639509ec7264a4_60403954 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
