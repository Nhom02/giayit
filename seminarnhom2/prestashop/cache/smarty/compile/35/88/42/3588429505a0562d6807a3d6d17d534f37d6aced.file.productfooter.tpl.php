<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 20:23:21
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/productfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487078465543bd249c31be0-66205869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3588429505a0562d6807a3d6d17d534f37d6aced' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/productfooter.tpl',
      1 => 1413206140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487078465543bd249c31be0-66205869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'fcbc_width' => 0,
    'fcbc_nbp' => 0,
    'fcbc_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543bd249c65f47_53244159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bd249c65f47_53244159')) {function content_543bd249c65f47_53244159($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['fcbc_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_width'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_nbp'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_nbp'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_scheme'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_scheme'], null, 0);?>
<div id="fcbcfooter"><div id="fcbc"><div data-href="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
" class="fb-comments" data-width="<?php echo $_smarty_tpl->tpl_vars['fcbc_width']->value;?>
" data-num-posts="<?php echo $_smarty_tpl->tpl_vars['fcbc_nbp']->value;?>
"  data-colorscheme="<?php echo $_smarty_tpl->tpl_vars['fcbc_scheme']->value;?>
"></div></div></div><?php }} ?>
