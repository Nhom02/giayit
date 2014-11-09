<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 11:11:28
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/userlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8414292065455aef03bf7e6-36933430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbf1e760e5e90f8a0c5201d9b455a717fd7a988' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/userlist.tpl',
      1 => 1414896334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8414292065455aef03bf7e6-36933430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cl_version' => 0,
    'middlelable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5455aef03d4346_81431488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455aef03d4346_81431488')) {function content_5455aef03d4346_81431488($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<table width="100%" cellspacing="0" cellpadding="0" style="margin-top:15px;margin-bottom:15px;" class="table hidetableblock">
	<thead>
		<tr>
			<th colspan="2"><?php echo smartyTranslate(array('s'=>'Contacts list','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
	
		<tr>
			<td style="border-bottom:none;" class="<?php echo $_smarty_tpl->tpl_vars['cl_version']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['middlelable']->value, "htmlentity");?>

			</td>
		</tr>
		<tr id="userDetails" style="display:none;">
			<td>
				<table class="table managesubscribeBlock" style="margin-top:20px;" cellspacing="0" cellpadding="0" width="100%">
					<thead>
						<tr>
							<th>Emails</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Client','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Newsletter SendinBlue Status','mod'=>'sendinblue'),$_smarty_tpl);?>
<span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Click on the icon to subscribe / unsubscribe the contact from SendinBlue and PrestaShop.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span></th>
							<th width="20%"><?php echo smartyTranslate(array('s'=>'Newsletter PrestaShop Status','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
                                                        <th width="20%"><?php echo smartyTranslate(array('s'=>'SMS SendinBlue Status','mod'=>'sendinblue'),$_smarty_tpl);?>
<span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Click on the icon to subscribe / unsubscribe the SMS from SendinBlue.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span></th>
						</tr>
					</thead>
					<tbody class="midleft"> 
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<?php }} ?>
