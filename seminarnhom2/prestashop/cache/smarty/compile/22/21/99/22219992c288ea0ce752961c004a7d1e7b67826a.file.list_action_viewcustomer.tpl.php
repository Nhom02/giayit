<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 20:26:48
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454289243543bd318931d17-55155199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22219992c288ea0ce752961c004a7d1e7b67826a' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1412348644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454289243543bd318931d17-55155199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543bd318d3a2f5_69469874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bd318d3a2f5_69469874')) {function content_543bd318d3a2f5_69469874($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
