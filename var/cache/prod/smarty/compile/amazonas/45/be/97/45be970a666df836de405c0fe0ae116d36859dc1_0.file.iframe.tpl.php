<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:25:30
  from 'C:\laragon\agence-bpm-i2p\modules\ybc_themeconfig\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e858a9bf483_81779215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45be970a666df836de405c0fe0ae116d36859dc1' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\modules\\ybc_themeconfig\\views\\templates\\hook\\iframe.tpl',
      1 => 1666882749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e858a9bf483_81779215 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
   function phProductFeedResizeIframe(obj) {
       $('iframe').css('height','auto');
       setTimeout(function() {
           $('iframe').css('opacity',1);
           var pHeight = $(obj).parent().height();
           $(obj).css('height','540px');
       }, 300);
    }
<?php echo '</script'; ?>
> 
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
