<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 09:49:30
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/mails/vn/order_conf_product_list.txt" */ ?>
<?php /*%%SmartyHeaderCode:19052054005445b30b0800f1-84498555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d241b2d68cf314bf8446569cf6d04610b408db' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/mails/vn/order_conf_product_list.txt',
      1 => 1414857262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19052054005445b30b0800f1-84498555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5445b30bb9f108_35753312',
  'variables' => 
  array (
    'list' => 0,
    'product' => 0,
    'customization' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5445b30bb9f108_35753312')) {function content_5445b30bb9f108_35753312($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


	<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customization']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['customization']->value['customization_text'];?>


							<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


							<?php echo $_smarty_tpl->tpl_vars['product']->value['customization_quantity'];?>


							<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>

	<?php } ?>
<?php } ?><?php }} ?>
