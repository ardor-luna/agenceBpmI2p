<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:19:01
  from 'C:\laragon\agence-bpm-i2p\themes\amazonas\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e840560b854_51375737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1825eac4176baad6ae9d884ad074646f048f91' => 
    array (
      0 => 'C:\\laragon\\agence-bpm-i2p\\themes\\amazonas\\templates\\layouts\\layout-full-width.tpl',
      1 => 1666882732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e840560b854_51375737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1980076404636e8405605c93_59520982', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377783281636e8405607692_77706566', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1543680724636e84056091a9_05187649', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1980076404636e8405605c93_59520982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1980076404636e8405605c93_59520982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_377783281636e8405607692_77706566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_377783281636e8405607692_77706566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_1139592654636e8405609cb9_94566422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1543680724636e84056091a9_05187649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1543680724636e84056091a9_05187649',
  ),
  'content' => 
  array (
    0 => 'Block_1139592654636e8405609cb9_94566422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1139592654636e8405609cb9_94566422', 'content', $this->tplIndex);
?>

        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
