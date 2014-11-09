<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 11:18:16
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/front/newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11382808095455b088bd13b3-53153011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f94d4fdc397ee28f4b3e70e3b835d1320ebce11' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/front/newsletter.tpl',
      1 => 1414896334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11382808095455b088bd13b3-53153011',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5455b088c7ca68_36500572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455b088c7ca68_36500572')) {function content_5455b088c7ca68_36500572($_smarty_tpl) {?>

<!-- sendinblue Newsletter module display on registration page-->
<h3 style="margin-bottom:0!important;"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'sendinblue'),$_smarty_tpl);?>
</h3>
<fieldset class="account_creation" style="padding:15px 0 8px 40px; margin-top:0!important;">
<p class="checkbox">
<input id="newsletter" type="checkbox" value="1" checked="checked" name="newsletter">
<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Subscribe to our newsletter','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
</p>
</fieldset>

<!-- /sendinblue Newsletter module-->
<?php }} ?>
