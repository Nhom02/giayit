<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 18:37:48
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11009919925437c50cd88a75-12002103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c02698347fc10641fcc7c6d2f1add4ae119b670' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1412348612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11009919925437c50cd88a75-12002103',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437c50ce8f2c7_90384428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437c50ce8f2c7_90384428')) {function content_5437c50ce8f2c7_90384428($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
