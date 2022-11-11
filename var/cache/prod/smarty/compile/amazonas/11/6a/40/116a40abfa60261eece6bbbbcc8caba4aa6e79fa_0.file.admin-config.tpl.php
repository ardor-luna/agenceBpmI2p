<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:24:38
  from 'C:\laragon\agence-bpm-i2p\modules\ybc_productimagehover\views\templates\hook\admin-config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e8556a731a7_58406477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116a40abfa60261eece6bbbbcc8caba4aa6e79fa' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ybc_productimagehover\\views\\templates\\hook\\admin-config.tpl',
      1 => 1666882747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e8556a731a7_58406477 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['setting_updated']->value) {?>
    <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting updated','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</div>
<?php }?>
<form class="defaultForm form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['postUrl']->value,'html','UTF-8' ));?>
">
    <div class="panel">
        <div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</div>
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3" for="transition-effect"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transition effect','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-9">
                    <select id="transition-effect" class="fixed-width-xl" name="YBC_PI_TRANSITION_EFFECT">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['effects']->value, 'effect');
$_smarty_tpl->tpl_vars['effect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['effect']->value) {
$_smarty_tpl->tpl_vars['effect']->do_else = false;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['effect']->value['id'] == $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value) {?>selected="selected"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['effect']->value['id'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['effect']->value['name'],'html','UTF-8' ));?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" for="those-pages"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply transition effect on those pages','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-9">
                    <select id="those-pages" class="fixed-width-xl" name="YBC_PI_THOSE_PAGES[]" multiple size="6">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['those_pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                            <option <?php if (in_array('allpage',$_smarty_tpl->tpl_vars['YBC_PI_THOSE_PAGES']->value) || in_array($_smarty_tpl->tpl_vars['page']->value['id'],$_smarty_tpl->tpl_vars['YBC_PI_THOSE_PAGES']->value)) {?>selected="selected"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['name'],'html','UTF-8' ));?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-default pull-right" name="submitUpdate" id="module_form_submit_btn" value="1" type="submit">
    		  <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>

    	    </button>																								
        </div>
    </div>
</form><?php }
}
