<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 16:36:55
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/fbcomment/facebooktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1280771037545206b7295466-34092619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0fbfebecd75ffbb5b8a4df14d37b472f6ac36e0' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/fbcomment/facebooktags.tpl',
      1 => 1414661774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1280771037545206b7295466-34092619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admids' => 0,
    'appid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545206b7a6f0c7_86675608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545206b7a6f0c7_86675608')) {function content_545206b7a6f0c7_86675608($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['admids']->value)) {?><meta property="fb:admins" content="<?php echo $_smarty_tpl->tpl_vars['admids']->value;?>
"/><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['appid']->value)) {?><meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
"/><?php }?>
<?php }} ?>
