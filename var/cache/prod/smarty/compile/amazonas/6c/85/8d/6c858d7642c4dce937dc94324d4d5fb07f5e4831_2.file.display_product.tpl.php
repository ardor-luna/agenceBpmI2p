<?php
/* Smarty version 3.1.43, created on 2022-10-28 00:21:36
  from 'C:\laragon\agence-bpm-i2p\modules\ybc_specificprices\views\templates\hook\display_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635b047055b587_77415120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c858d7642c4dce937dc94324d4d5fb07f5e4831' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ybc_specificprices\\views\\templates\\hook\\display_product.tpl',
      1 => 1666882747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ybc_specificprices/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_635b047055b587_77415120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="ybc_countdown col-sm-12 col-md-6 col-lg-6">
    <div id="ybc_specificprices">
        <h3 class="h1 products-section-title text-uppercase">
            <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </h3>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1088797424635b04705591b1_24056568', 'product_miniature');
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
/* {block 'product_miniature'} */
class Block_1088797424635b04705591b1_24056568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_1088797424635b04705591b1_24056568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:modules/ybc_specificprices/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
