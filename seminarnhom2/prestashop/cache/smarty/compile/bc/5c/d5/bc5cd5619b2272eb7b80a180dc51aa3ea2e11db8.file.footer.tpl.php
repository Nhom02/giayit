<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 22:54:26
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/scrolltop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18673582065453b0b2e1eeb8-81499342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5cd5619b2272eb7b80a180dc51aa3ea2e11db8' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/scrolltop/footer.tpl',
      1 => 1414770752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18673582065453b0b2e1eeb8-81499342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stx' => 0,
    'sty' => 0,
    'sto' => 0,
    'stc' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453b0b2e734d5_09588890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453b0b2e734d5_09588890')) {function content_5453b0b2e734d5_09588890($_smarty_tpl) {?><a href="#" style="right:<?php echo $_smarty_tpl->tpl_vars['stx']->value;?>
; bottom:<?php echo $_smarty_tpl->tpl_vars['sty']->value;?>
; opacity:<?php echo $_smarty_tpl->tpl_vars['sto']->value;?>
; <?php if ($_smarty_tpl->tpl_vars['stc']->value==1) {?>background: url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
icon_top.png') no-repeat;<?php } else { ?>background: url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
icon_top2.png') no-repeat;<?php }?>" class="mypresta_scrollup"><?php echo smartyTranslate(array('s'=>'scroll','mod'=>'scrolltop'),$_smarty_tpl);?>
</a><?php }} ?>
