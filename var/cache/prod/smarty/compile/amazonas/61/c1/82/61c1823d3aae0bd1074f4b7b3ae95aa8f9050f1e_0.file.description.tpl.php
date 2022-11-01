<?php
/* Smarty version 3.1.43, created on 2022-10-31 14:26:32
  from 'C:\laragon\agence-bpm-i2p\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635fcd08b665a3_24035784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61c1823d3aae0bd1074f4b7b3ae95aa8f9050f1e' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\description.tpl',
      1 => 1666881617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635fcd08b665a3_24035784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
     data-type="description" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description (optional)','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <textarea
                        name="description-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
"
                        max="100"
                        class="form-control"
                        value="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblockByShop']->value[$_prefixVariable2][$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['description'];
}?>"
                ><?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblockByShop']->value[$_prefixVariable3][$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['description'];
}?></textarea>
            </div>
        </div>
        <div class="col-xs-12 help-block">
            <span class="limit_description">0</span>/100 characters
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
