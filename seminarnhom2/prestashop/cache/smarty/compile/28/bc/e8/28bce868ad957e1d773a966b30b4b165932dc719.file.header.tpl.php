<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 16:44:21
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:875906108543bd1033f8b93-58190998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bce868ad957e1d773a966b30b4b165932dc719' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/facebookcomments/header.tpl',
      1 => 1414662124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875906108543bd1033f8b93-58190998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543bd103bebbf5_63678554',
  'variables' => 
  array (
    'var' => 0,
    'fcbc_appid' => 0,
    'fcbc_admins' => 0,
    'fcbc_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bd103bebbf5_63678554')) {function content_543bd103bebbf5_63678554($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['fcbc_appid'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_appid'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_admins'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_admins'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_lang'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fcbc_appid'] = new Smarty_variable($_smarty_tpl->tpl_vars['var']->value['fcbc_appid'], null, 0);?> 

<meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['fcbc_appid']->value;?>
"/><meta property="fb:admins" content="<?php echo $_smarty_tpl->tpl_vars['fcbc_admins']->value;?>
"/><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['fcbc_lang']->value;?>
/all.js#xfbml=1&appId=<?php echo $_smarty_tpl->tpl_vars['fcbc_appid']->value;?>
";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php }} ?>
