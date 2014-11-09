<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 11:17:44
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/front/sendinblue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487973365455b06885c1d8-89892876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '758e63f04e5551f82fd2826336760fa911633833' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/front/sendinblue.tpl',
      1 => 1414896334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487973365455b06885c1d8-89892876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'Sendin_dropdown' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5455b068c8c482_53385545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455b068c8c482_53385545')) {function content_5455b068c8c482_53385545($_smarty_tpl) {?>

<!-- sendinblue Newsletter module-->

<div id="newsletter_block_left" class="block" >

	<h4><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'sendinblue'),$_smarty_tpl);?>
</h4>

	<div class="block_content">	
		<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>" <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?> style="padding-top: 10px; font-size:10px;color:#DA0F00" <?php } else { ?> style="padding-top: 10px; font-size:10px;color:#008000" <?php }?> style="padding-top: 10px; font-size:10px;color:#DA0F00"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		<?php }?>
	
		<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
			<p style="padding-top:10px;">
				<input type="text" name="email" style="width: 170px;" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'sendinblue'),$_smarty_tpl);?>
<?php }?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'sendinblue'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'sendinblue'),$_smarty_tpl);?>
';" />
			</p>
			
			<?php if (isset($_smarty_tpl->tpl_vars['Sendin_dropdown']->value)&&$_smarty_tpl->tpl_vars['Sendin_dropdown']->value==1) {?>
				<p style="padding-top:10px;">
					<select name="action">
						<option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'sendinblue'),$_smarty_tpl);?>
</option>
						<option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'sendinblue'),$_smarty_tpl);?>
</option>
					</select>
				</p>
			<?php }?>
			
			<p style="padding-top:10px;">
                                            
				<input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
			</p>
		</form>
	</div>
</div>

<!-- /sendinblue Newsletter module-->
<?php }} ?>
