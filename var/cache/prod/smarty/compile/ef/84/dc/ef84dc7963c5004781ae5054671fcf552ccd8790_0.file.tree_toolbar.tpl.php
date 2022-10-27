<?php
/* Smarty version 3.1.43, created on 2022-10-27 22:25:20
  from 'C:\laragon\agence-bpm-i2p\admin8632ufbmn\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635ae93097a6e4_64997262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef84dc7963c5004781ae5054671fcf552ccd8790' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\admin8632ufbmn\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1666881605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ae93097a6e4_64997262 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
