<?php
/* Smarty version 3.1.43, created on 2022-10-27 17:03:15
  from 'C:\laragon\agence-bpm-i2p\modules\ybc_newsletter\views\templates\hook\css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a9db3d92990_58788956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3ca37294ee4c6a7c7eb945fd84632eda380cf3' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ybc_newsletter\\views\\templates\\hook\\css.tpl',
      1 => 1666882747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a9db3d92990_58788956 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #ynp-submit, .ybc-newsletter-popup:not(.ynpt6) #ynp-close{background:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .ynpt6 .ynp-email-input{border-bottom-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .alert-success span{color:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #uniform-ynp-input-dont-show > span.checked::before{color:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #ynp-submit:hover, .ybc-newsletter-popup:not(.ynpt6) #ynp-close:hover{background:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    <?php if ($_smarty_tpl->tpl_vars['template']->value == 'ynpt1' && $_smarty_tpl->tpl_vars['image']->value) {?>
        .ynp-div-l3{background: url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
') top left no-repeat;}      
    <?php }?>
</style><?php }
}
