<?php
/* Smarty version 3.1.43, created on 2022-11-17 17:40:10
  from 'C:\laragon\agence-bpm-i2p\modules\ets_multilayerslider\views\templates\hook\admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637663ea411553_66774726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea66ffe0aa58e06cb16b172cedfaacb224d717f4' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_multilayerslider\\views\\templates\\hook\\admin-js.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637663ea411553_66774726 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
mls_slider.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
multilayerslider-admin.js"><?php echo '</script'; ?>
><?php }
}
