<?php /* Smarty version Smarty-3.1.19, created on 2014-10-20 13:13:53
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/admin8270/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16242439515444a8218bf4e5-52001400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e67a41ec80cdb68e7cb77500f04534853f53312' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/admin8270/themes/default/template/controllers/localization/content.tpl',
      1 => 1412349033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16242439515444a8218bf4e5-52001400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5444a8219f3d57_41139881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444a8219f3d57_41139881')) {function content_5444a8219f3d57_41139881($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>