<?php
/* Smarty version 3.1.43, created on 2022-11-17 20:03:31
  from 'C:\laragon\agence-bpm-i2p\themes\amazonas\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63768583cfe3e5_80977299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea3ff32141c748addc61e16542da8a75f02f059' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\themes\\amazonas\\templates\\contact.tpl',
      1 => 1666882732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63768583cfe3e5_80977299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189738690063768583cdf348_49129503', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173615033963768583ce1a61_92227797', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_189738690063768583cdf348_49129503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_189738690063768583cdf348_49129503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_173615033963768583ce1a61_92227797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_173615033963768583ce1a61_92227797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout1') {?>
      <div class="page_contact_layout1 col-xs-12 col-sm-12">
          <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
            <div class="embe_map_contact">
                <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

            </div>
          <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

      </div>
    <?php }?>
    
    
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout2') {?>
        <div class="page_contact_layout2 col-xs-12 col-sm-12">
            <div class="row">
              <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
                
                    <div class="embe_map_contact col-xs-12 col-sm-6">
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

                    </div>
                    <div class="embe_map_contact col-xs-12 col-sm-6">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                    </div>
                
              <?php } else { ?>
                <div class="embe_map_contact col-xs-12 col-sm-12">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
              <?php }?>
              <div class="col-xs-12 col-sm-12">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

              </div>
            </div>
        </div> 
    <?php }?>
    
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_CONTACT_FORM_LAYOUT'] == 'contact_layout3') {?>
        <div class="page_contact_layout3">  
          <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'] != '') {?>
                <div class="col-sm-6 col-md-4">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="embe_map_contact">
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_GOOGLE_MAP_EMBED_CODE'];?>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
          <?php } else { ?>
                <div class="col-sm-6 col-md-6">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                </div>
                <div class="col-sm-6 col-md-6">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
          <?php }?>
        </div>
    <?php }
}
}
/* {/block 'page_content'} */
}
