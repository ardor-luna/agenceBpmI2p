<?php
/* Smarty version 3.1.43, created on 2022-11-17 22:55:38
  from 'C:\laragon\agence-bpm-i2p\modules\ps_faviconnotificationbo\views\templates\hook\displayBackOfficeHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6376adda9b7628_82837804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511ca413fb5b9bb9d87621c62dc6703fd863bdf2' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ps_faviconnotificationbo\\views\\templates\\hook\\displayBackOfficeHeader.tpl',
      1 => 1666881618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376adda9b7628_82837804 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconBgColor']->value,'javascript' ));?>
',
      textColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconTxtColor']->value,'javascript' ));?>
',
      notificationGetUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconUrl']->value,'javascript' ));?>
',
      CHECKBOX_ORDER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconOrder']->value);?>
,
      CHECKBOX_CUSTOMER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconCustomer']->value);?>
,
      CHECKBOX_MESSAGE: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconMsg']->value);?>
,
      timer: 120000, // Refresh every 2 minutes
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
