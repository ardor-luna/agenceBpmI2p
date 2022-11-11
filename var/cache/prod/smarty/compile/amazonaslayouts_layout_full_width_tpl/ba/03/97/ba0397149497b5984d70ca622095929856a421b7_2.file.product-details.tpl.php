<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:18:51
  from 'C:\laragon\agence-bpm-i2p\themes\amazonas\templates\catalog\_partials\product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e83fb710475_30340510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0397149497b5984d70ca622095929856a421b7' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\themes\\amazonas\\templates\\catalog\\_partials\\product-details.tpl',
      1 => 1666882731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e83fb710475_30340510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>"
     id="product-details"
     data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
"
  >
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_470699904636e83fb6d0d64_46655494', 'product_reference');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302563662636e83fb6de714_30507340', 'product_quantities');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_354475788636e83fb6e3e40_28969341', 'product_availability_date');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712964031636e83fb6f4e72_58062126', 'product_out_of_stock');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1000607412636e83fb6fa044_22184029', 'product_features');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218901662636e83fb706229_71918659', 'product_specific_references');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104322571636e83fb70c2a1_73489691', 'product_condition');
?>

</div>
<?php }
/* {block 'product_reference'} */
class Block_470699904636e83fb6d0d64_46655494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_470699904636e83fb6d0d64_46655494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
      <div class="product-manufacturer">
        <?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_brand_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer_image_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img img-thumbnail manufacturer-logo" alt="" />
          </a>
        <?php } else { ?>
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
          <span>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_brand_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_manufacturer']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
        <?php }?>
      </div>
    <?php }?>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_REF'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_REF'] == 1) {?>
          <div class="product-reference">
            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
            <span itemprop="sku"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['reference_to_display'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
    <?php }?>
    
    
    <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_1302563662636e83fb6de714_30507340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_1302563662636e83fb6de714_30507340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_QTY'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_QTY'] == 1) {?>
        <div class="product-quantities">
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
          <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['quantity'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['quantity_label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <?php }?>
      <?php }?>
    <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
class Block_354475788636e83fb6e3e40_28969341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_354475788636e83fb6e3e40_28969341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
        <div class="product-availability-date">
          <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
          <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['availability_date'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_712964031636e83fb6f4e72_58062126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
    0 => 'Block_712964031636e83fb6f4e72_58062126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-out-of-stock">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
class Block_1000607412636e83fb6fa044_22184029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_features' => 
  array (
    0 => 'Block_1000607412636e83fb6fa044_22184029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
        <section class="product-features">
          <h3 class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
          <dl class="data-sheet">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
              <dt class="name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</dt>
              <dd class="value"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</dd>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </dl>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
class Block_1218901662636e83fb706229_71918659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
    0 => 'Block_1218901662636e83fb706229_71918659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_references']))) {?>
        <section class="product-features">
          <h3 class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <dl class="data-sheet">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
$_smarty_tpl->tpl_vars['reference']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->do_else = false;
?>
                <dt class="name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</dt>
                <dd class="value"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reference']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</dd>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </dl>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
class Block_104322571636e83fb70c2a1_73489691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_104322571636e83fb70c2a1_73489691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
        <div class="product-condition">
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
          <link itemprop="itemCondition" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
          <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['condition']['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_condition'} */
}
