<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 16:44:21
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/tab16.tpl" */ ?>
<?php /*%%SmartyHeaderCode:441217245543bd10d213a61-64085961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbd84346c67a1b9499c6b8f9cab8486d891d7e2' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/tab16.tpl',
      1 => 1414662124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '441217245543bd10d213a61-64085961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543bd10d279467_98885993',
  'variables' => 
  array (
    'var' => 0,
    'fcbc_scheme' => 0,
    'fcbc_width' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bd10d279467_98885993')) {function content_543bd10d279467_98885993($_smarty_tpl) {?><section class="page-product-box">
    <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'facebookcomments'),$_smarty_tpl);?>
 (<fb:comments-count href="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"></fb:comments-count>)</h3>
    <?php $_smarty_tpl->tpl_vars['fcbc_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_width'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fcbc_nbp'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_nbp'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fcbc_scheme'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_scheme'], null, 0);?>
    
    <style>
    .fb_ltr, .fb_iframe_widget, .fb_iframe_widget span {width: 100%!important}
    </style>
    
    <div id="fcbc" class="">
    <fb:comments href="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
" colorscheme="<?php echo $_smarty_tpl->tpl_vars['fcbc_scheme']->value;?>
"  width="<?php echo $_smarty_tpl->tpl_vars['fcbc_width']->value;?>
"></fb:comments>
    </div>
</section><?php }} ?>
