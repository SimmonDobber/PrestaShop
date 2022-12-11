<?php
/* Smarty version 4.2.1, created on 2022-12-11 21:07:02
  from '/var/www/html/admin-dev/themes/default/template/controllers/search/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63963866f33729_80334074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ead6797da603951c4859b6052ce6c48d5d314ac' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/search/helpers/view/view.tpl',
      1 => 1669929133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63963866f33729_80334074 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$(function() {
    $('#content .panel').highlight('<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
    <h2>
    <?php if ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 0) {?>
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no results matching your query "%s".','sprintf'=>array($_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</h2>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 result matches your query "%s".','sprintf'=>array($_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

    <?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value))) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results match your query "%s".','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nb_results']->value),$_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

    <?php }?>
    </h2>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['query']->value && (isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value) {?>

    <?php if ((isset($_smarty_tpl->tpl_vars['features']->value))) {?>
    <div class="panel" data-role="features">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['features']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 feature','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d features','sprintf'=>array(count($_smarty_tpl->tpl_vars['features']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value, 'val', false, 'k', 'feature_list', array (
));
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <tr>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</strong></a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['modules']->value)) && $_smarty_tpl->tpl_vars['modules']->value) {?>
    <div class="panel" data-role="modules">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['modules']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 module','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d modules','sprintf'=>array(count($_smarty_tpl->tpl_vars['modules']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                <tr>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->linkto,'html','UTF-8' ));?>
"><strong><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</strong></a></td>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->linkto,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>
</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
    <div class="panel" data-role="categories">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['categories']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 category','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d categories','sprintf'=>array(count($_smarty_tpl->tpl_vars['categories']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table" style="border-spacing : 0; border-collapse : collapse;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value && (isset($_smarty_tpl->tpl_vars['productsCount']->value)) && $_smarty_tpl->tpl_vars['productsCount']->value) {?>
    <div class="panel" data-role="products">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['productsCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 product','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d products','sprintf'=>array($_smarty_tpl->tpl_vars['productsCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['products']->value;?>

    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['customers']->value)) && $_smarty_tpl->tpl_vars['customers']->value && (isset($_smarty_tpl->tpl_vars['customerCount']->value)) && $_smarty_tpl->tpl_vars['customerCount']->value) {?>
    <div class="panel" data-role="customers">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['customerCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 customer','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d customers','sprintf'=>array($_smarty_tpl->tpl_vars['customerCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['customers']->value;?>

    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['orders']->value)) && $_smarty_tpl->tpl_vars['orders']->value && (isset($_smarty_tpl->tpl_vars['orderCount']->value)) && $_smarty_tpl->tpl_vars['orderCount']->value) {?>
    <div class="panel" data-role="orders">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['orderCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 order','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d orders','sprintf'=>array($_smarty_tpl->tpl_vars['orderCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['orders']->value;?>

    </div>
    <?php }?>

<?php }?>
<div class="row" data-role="search-panels">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchPanels']->value, 'searchPanel', false, 'key');
$_smarty_tpl->tpl_vars['searchPanel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['searchPanel']->value) {
$_smarty_tpl->tpl_vars['searchPanel']->do_else = false;
?>
        <div class="col-lg-<?php if (count($_smarty_tpl->tpl_vars['searchPanels']->value) <= 2) {?>6<?php } else { ?>4<?php }?>">
            <div class="panel">
                <h3><?php echo $_smarty_tpl->tpl_vars['searchPanel']->value['title'];?>
</h3>
                <a href="<?php echo $_smarty_tpl->tpl_vars['searchPanel']->value['link'];?>
" class="btn btn-default _blank"><?php echo $_smarty_tpl->tpl_vars['searchPanel']->value['button_label'];?>
</a>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
