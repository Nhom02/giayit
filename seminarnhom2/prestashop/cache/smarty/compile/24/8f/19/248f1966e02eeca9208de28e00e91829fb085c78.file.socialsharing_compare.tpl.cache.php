<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 07:41:32
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98421173545037bccab1d5-41756856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248f1966e02eeca9208de28e00e91829fb085c78' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl',
      1 => 1412348726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98421173545037bccab1d5-41756856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'logo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545037bcd7bd16_16268238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545037bcd7bd16_16268238')) {function content_545037bcd7bd16_16268238($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<div id="social-share-compare">
		<p><?php echo smartyTranslate(array('s'=>"Share this comparison with your friends:",'mod'=>'socialsharing'),$_smarty_tpl);?>
</p>
		<p class="socialsharing_product">
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
				<button type="button" class="btn btn-default btn-block btn-twitter" onclick="socialsharing_twitter_click(<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?>'<?php echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['product']->value->name), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value));?>
'<?php }?>);">
					<i class="icon-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
				<button type="button" class="btn btn-default btn-block btn-facebook" onclick="socialsharing_facebook_click();">
					<i class="icon-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
				<button type="button" class="btn btn-default btn-block btn-google-plus" onclick="socialsharing_google_click();">
					<i class="icon-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
				<button type="button" class="btn btn-default btn-block btn-pinterest" onclick="socialsharing_pinterest_click('<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
');">
  					<i class="icon-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>

  				</button>
			<?php }?>
		</p>
	</div>
<?php }?><?php }} ?>
