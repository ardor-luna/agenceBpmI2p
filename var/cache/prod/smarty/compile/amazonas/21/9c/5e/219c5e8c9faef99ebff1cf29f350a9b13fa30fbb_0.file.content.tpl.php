<?php
/* Smarty version 3.1.43, created on 2022-10-31 14:26:31
  from 'C:\laragon\agence-bpm-i2p\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635fcd07c15dd9_84516647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219c5e8c9faef99ebff1cf29f350a9b13fa30fbb' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1666881617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_635fcd07c15dd9_84516647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
