<?php
/* Smarty version 3.1.43, created on 2022-11-17 18:56:12
  from 'C:\laragon\agence-bpm-i2p\modules\ets_multilayerslider\views\templates\hook\admin-alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637675bcd63705_31833599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71dd20c655837c7d558edae1727f475ee0543063' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_multilayerslider\\views\\templates\\hook\\admin-alerts.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637675bcd63705_31833599 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['errors'])) && $_smarty_tpl->tpl_vars['alerts']->value['errors']) {?>
    <div class="alert alert-danger mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['errors']);?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['success'])) && $_smarty_tpl->tpl_vars['alerts']->value['success']) {?>
    <div class="alert alert-success mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['success']);?>
</div>
<?php }
}
}
