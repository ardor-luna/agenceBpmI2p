<?php
/* Smarty version 3.1.43, created on 2022-10-27 17:03:01
  from 'C:\laragon\agence-bpm-i2p\modules\ets_purchasetogether\views\templates\hook\_renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a9da5c0d6f6_47907992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cebf54212c786c2db51dbd9557a608de5c9ec6' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_purchasetogether\\views\\templates\\hook\\_renderJs.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a9da5c0d6f6_47907992 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var PC_ETS_VER_17 = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_VER_17']->value), ENT_QUOTES, 'UTF-8');?>
;
var PC_ETS_VER_16 = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_VER_16']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value)) && $_smarty_tpl->tpl_vars['configs']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configs']->value, 'config', false, 'id');
$_smarty_tpl->tpl_vars['config']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->do_else = false;
?>
var <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
var PC_ETS_REDIRECT_URL = '<?php echo $_smarty_tpl->tpl_vars['redirectURL']->value;?>
';
var PC_ETS_STATIC_TOKEN = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
