<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:19:01
  from 'C:\laragon\agence-bpm-i2p\themes\amazonas\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e840545ec67_35517567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca8fcbb7ec7c12edd3362484244f996104c4167b' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\themes\\amazonas\\templates\\page.tpl',
      1 => 1666882732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e840545ec67_35517567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_962508145636e840544d857_67179911', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1319304409636e840544e986_76880066 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1677644628636e840544df95_85681697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1319304409636e840544e986_76880066', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_676041780636e8405457619_00213859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2018491550636e84054598d6_12891404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_177271297636e8405455bb5_09715266 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_676041780636e8405457619_00213859', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2018491550636e84054598d6_12891404', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_416896953636e840545cec4_52287998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1298520913636e840545c2f0_29729448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_416896953636e840545cec4_52287998', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_962508145636e840544d857_67179911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_962508145636e840544d857_67179911',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1677644628636e840544df95_85681697',
  ),
  'page_title' => 
  array (
    0 => 'Block_1319304409636e840544e986_76880066',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_177271297636e8405455bb5_09715266',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_676041780636e8405457619_00213859',
  ),
  'page_content' => 
  array (
    0 => 'Block_2018491550636e84054598d6_12891404',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1298520913636e840545c2f0_29729448',
  ),
  'page_footer' => 
  array (
    0 => 'Block_416896953636e840545cec4_52287998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1677644628636e840544df95_85681697', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177271297636e8405455bb5_09715266', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298520913636e840545c2f0_29729448', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
