<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:19:04
  from 'C:\laragon\agence-bpm-i2p\themes\amazonas\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e84083ef6d0_20571972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424f707f9a442b9bcb514c55f2d96e6d96948597' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\themes\\amazonas\\templates\\_partials\\footer.tpl',
      1 => 1666882732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e84083ef6d0_20571972 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">
  <div class="container">
        <div class="footer_top">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div> 
  </div>
  <div class="footer_after">
      <div class="container">
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO']) {?>
                <div class="payment_footer">
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" />
                </div>
            <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      </div>
  </div>
  <div class="footer_before">
      <div class="container">
          <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM']) {?>
                <div class="footer_link_bottom">
                    <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'];?>

                </div>
             <?php }?>
          </div>
      </div>
  </div>
  
  <div class="footer_bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-12 coppyright">
                  <div class="ybc_coppyright">
                     <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'];?>

                     <?php }?>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="scroll_top"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TOP','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>
</div>
<?php }
}
