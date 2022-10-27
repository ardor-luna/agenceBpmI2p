<?php
/* Smarty version 3.1.43, created on 2022-10-27 22:30:18
  from 'C:\laragon\agence-bpm-i2p\modules\ets_megamenu\views\templates\hook\item-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635aea5a73ee35_87088095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9de2af919381d6fc77e9099a1a3ab711538443a' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_megamenu\\views\\templates\\hook\\item-block.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635aea5a73ee35_87088095 (Smarty_Internal_Template $_smarty_tpl) {
?><li data-id-block="<?php echo intval($_smarty_tpl->tpl_vars['block']->value['id_block']);?>
" class="mm_blocks_li <?php if (!$_smarty_tpl->tpl_vars['block']->value['enabled']) {?>mm_disabled<?php }?> item<?php echo intval($_smarty_tpl->tpl_vars['block']->value['id_block']);?>
" data-obj="block">
    <div class="mm_buttons">
        <span class="mm_block_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
        <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
        <span class="mm_block_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>
    </div>
    <div class="mm_block_wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlock','block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl ) );?>

    </div>
</li><?php }
}
