<?php
/* Smarty version 3.1.43, created on 2022-11-17 22:11:21
  from 'C:\laragon\agence-bpm-i2p\modules\ybc_widget\views\templates\hook\mainform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6376a379a0acc0_97034281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b977805d94f19ea822cbf73e7df689f31f645cf' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ybc_widget\\views\\templates\\hook\\mainform.tpl',
      1 => 1666882749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376a379a0acc0_97034281 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var ybc_widget_sort_url ='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
';
<?php echo '</script'; ?>
>
<div class="panel">
    <div class="panel-heading">
        <span class="widget_title"> <i class="icon-AdminAdmin"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Widgets','mod'=>'ybc_widget'),$_smarty_tpl ) );?>
</span>
        <span class="add_new_widget"><a class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new widget','mod'=>'ybc_widget'),$_smarty_tpl ) );?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
" title=""><i class="process-icon-new "></i></a></span>
    </div>
    <div class="form-wrapper">
        <?php $_smarty_tpl->_assignInScope('i', 0);?>
        <?php if ($_smarty_tpl->tpl_vars['hooks']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
                    <div class="widget_row">
                <?php }?>
                <div class="widget_hook" rel="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value['hook'],'html','UTF-8' ));?>
">
                    <div class="widget_heading widget_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value['hook'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value['name'],'html','UTF-8' ));?>
<a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a widget to this hook','mod'=>'ybc_widget'),$_smarty_tpl ) );?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
&control=widget&hook=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value['hook'],'html','UTF-8' ));?>
"><i class="process-icon-new"></i></a></div>
                    <ul id="widget_sortable_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" class="widget_sortable">
                        <?php if ($_smarty_tpl->tpl_vars['hook']->value['widgets']) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hook']->value['widgets'], 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                                <li class="widget_item" rel="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['id_widget'],'html','UTF-8' ));?>
">
                                    <span class="widget_edit_link">
                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
&control=widget&id_widget=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['id_widget'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['title'],'html','UTF-8' ));?>
</a>
                                     </span>
                                     <span class="widget_tool_buttons">
                                         <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this?','mod'=>'ybc_widget'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
&control=widget&id_widget=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['id_widget'],'html','UTF-8' ));?>
&del=true" class="delete"><i class="icon-trash"></i></a>
                                         <a class="enable_disnable" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAdminPath']->value,'html','UTF-8' ));?>
&control=widget&id_widget=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value['id_widget'],'html','UTF-8' ));?>
&change_enabled=<?php if ($_smarty_tpl->tpl_vars['widget']->value['enabled']) {?>0<?php } else { ?>1<?php }?>"><i title="<?php if ($_smarty_tpl->tpl_vars['widget']->value['enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable this item','mod'=>'ybc_widget'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this item','mod'=>'ybc_widget'),$_smarty_tpl ) );
}?>" class="<?php if ($_smarty_tpl->tpl_vars['widget']->value['enabled']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i></a>
                                     </span>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </ul>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 3 || $_smarty_tpl->tpl_vars['i']->value == 6 || $_smarty_tpl->tpl_vars['i']->value == 9 || $_smarty_tpl->tpl_vars['i']->value == 11) {?>
                    <div class="ybc_clear"></div></div><div class="widget_row">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 18) {?>
                    <div class="ybc_clear"></div></div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<?php }
}
