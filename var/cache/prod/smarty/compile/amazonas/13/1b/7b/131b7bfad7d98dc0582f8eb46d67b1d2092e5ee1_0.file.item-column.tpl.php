<?php
/* Smarty version 3.1.43, created on 2022-10-27 22:30:18
  from 'C:\laragon\agence-bpm-i2p\modules\ets_megamenu\views\templates\hook\item-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635aea5a5f8738_72690157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131b7bfad7d98dc0582f8eb46d67b1d2092e5ee1' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_megamenu\\views\\templates\\hook\\item-column.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635aea5a5f8738_72690157 (Smarty_Internal_Template $_smarty_tpl) {
?><li data-id-column="<?php echo intval($_smarty_tpl->tpl_vars['column']->value['id_column']);?>
" class="mm_columns_li item<?php echo intval($_smarty_tpl->tpl_vars['column']->value['id_column']);?>
 column_size_<?php echo intval($_smarty_tpl->tpl_vars['column']->value['column_size']);?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?>" data-obj="column">
    <div class="mm_buttons">
        <span class="mm_column_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
        <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
        <span class="mm_column_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
        <div class="mm_add_block btn btn-default" data-id-column="<?php echo intval($_smarty_tpl->tpl_vars['column']->value['id_column']);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>    
    </div>
    <ul class="mm_blocks_ul">
        <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['blocks'])) && $_smarty_tpl->tpl_vars['column']->value['blocks']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['blocks'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMMItemBlock','block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl ) );?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                                    
        <?php }?>
    </ul>
</li><?php }
}
