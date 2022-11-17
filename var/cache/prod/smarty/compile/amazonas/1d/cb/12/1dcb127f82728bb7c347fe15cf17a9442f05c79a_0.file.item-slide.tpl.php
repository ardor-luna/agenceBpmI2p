<?php
/* Smarty version 3.1.43, created on 2022-11-17 17:40:35
  from 'C:\laragon\agence-bpm-i2p\modules\ets_multilayerslider\views\templates\hook\item-slide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637664032fe207_24167592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dcb127f82728bb7c347fe15cf17a9442f05c79a' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ets_multilayerslider\\views\\templates\\hook\\item-slide.tpl',
      1 => 1666882743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637664032fe207_24167592 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['slide']->value)) && $_smarty_tpl->tpl_vars['slide']->value) {?>
    <li class="mls_slides_li item<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
 <?php if (!$_smarty_tpl->tpl_vars['slide']->value['enabled']) {?>mls_disabled<?php }?>" data-id-slide="<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
" data-obj="slide">
         <span class="title-silde" ><span><?php if ($_smarty_tpl->tpl_vars['slide']->value['title']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8' ));
} else {
echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);
}?></span></span>
         <div class="slide-content">
             <div class="left-block col-lg-9" >
                <div class="left-content">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSSlideInner','slide'=>$_smarty_tpl->tpl_vars['slide']->value,'layout'=>$_smarty_tpl->tpl_vars['mls_layout']->value),$_smarty_tpl ) );?>
               
                </div>
             </div>
             <div class="right-block col-lg-3">
                <h2 data-title="&#xE3C4;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</h2>
                <div data-title="&#xE145;" class="mls_add_layer btn btn-default" data-id-slide="<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                <ul id="layers_slide<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
" class="mls_layers_ul">
                    <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['layers'])) && $_smarty_tpl->tpl_vars['slide']->value['layers']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide']->value['layers'], 'layer');
$_smarty_tpl->tpl_vars['layer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->do_else = false;
?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSLayerSort','layer'=>$_smarty_tpl->tpl_vars['layer']->value),$_smarty_tpl ) );?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </ul>
             </div>
         </div>
    </li>
<?php }
}
}
