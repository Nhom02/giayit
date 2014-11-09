<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 11:16:47
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/ajaxuserlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5460330655455b02ff2e353-88916741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca0bd60da90c65ee2763a7015ff6d0482978352' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/ajaxuserlist.tpl',
      1 => 1414896334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5460330655455b02ff2e353-88916741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'counter' => 0,
    'cl_version' => 0,
    'sourceInfo' => 0,
    'smsdata' => 0,
    'jk' => 0,
    'smsInfo' => 0,
    'emailid' => 0,
    'data' => 0,
    'pstatus' => 0,
    'first_btn' => 0,
    'cur_page' => 0,
    'previous_btn' => 0,
    'pre' => 0,
    'start_loop' => 0,
    'end_loop' => 0,
    'last_btn' => 0,
    'no_of_paginations' => 0,
    'nex' => 0,
    'next_btn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5455b0309273b4_89533402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455b0309273b4_89533402')) {function content_5455b0309273b4_89533402($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['sourceInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sourceInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sourceInfo']->key => $_smarty_tpl->tpl_vars['sourceInfo']->value) {
$_smarty_tpl->tpl_vars['sourceInfo']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
	<tr>
		<td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
			<div style="word-wrap:break-word; width:350px"><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</div>
		</td>
		<?php $_smarty_tpl->tpl_vars["emailtest"] = new Smarty_variable($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], null, 0);?>
		<td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
			<?php if ($_smarty_tpl->tpl_vars['sourceInfo']->value['id_customer']!="Nclient") {?>
				yes
			<?php } else { ?>
				No
			<?php }?>
			
		</td>
		<td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
			
            <?php  $_smarty_tpl->tpl_vars['smsInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['smsInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['jk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['smsdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['smsInfo']->key => $_smarty_tpl->tpl_vars['smsInfo']->value) {
$_smarty_tpl->tpl_vars['smsInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['jk']->value = $_smarty_tpl->tpl_vars['smsInfo']->key;
?>
            	<?php if ($_smarty_tpl->tpl_vars['jk']->value==$_smarty_tpl->tpl_vars['sourceInfo']->value['phone_mobile']) {?>
                	<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['smsInfo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>

                <?php }?>
            <?php } ?>
			
		</td>
		<td class="tipTd">
			
			<?php $_smarty_tpl->tpl_vars['emailid'] = new Smarty_variable($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], null, 0);?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['email_bl'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['email_bl']===1) {?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(1, null, 0);?>
			<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['email_bl'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['email_bl']===0) {?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(0, null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(1, null, 0);?>
			<?php }?>
			
			<a href="javascript:void(0)" class="ajax_contacts_href" email="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" status="<?php echo intval($_smarty_tpl->tpl_vars['pstatus']->value);?>
">
			<?php if ($_smarty_tpl->tpl_vars['pstatus']->value==1) {?>
			<img class="toolTip1 imgstatus" title="<?php echo smartyTranslate(array('s'=>'Subscribe the contact','mod'=>'sendinblue'),$_smarty_tpl);?>
" id="ajax_contact_status_<?php echo intval($_smarty_tpl->tpl_vars['counter']->value);?>
" src="../img/admin/disabled.gif" />
			<?php } else { ?>
			<img class="toolTip1 imgstatus" title="<?php echo smartyTranslate(array('s'=>'Unsubscribe the contact','mod'=>'sendinblue'),$_smarty_tpl);?>
" id="ajax_contact_status_<?php echo intval($_smarty_tpl->tpl_vars['counter']->value);?>
" src="../img/admin/enabled.gif" />
			<?php }?>
			</a>
		</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['sourceInfo']->value['newsletter']==1) {?>
			<img	class="imgstatus" src="../img/admin/enabled.gif" />
			<?php } else { ?>
			<img  class="imgstatus" src="../img/admin/disabled.gif" />
			<?php }?>
		</td>
                <td class="tipTd">

			<?php $_smarty_tpl->tpl_vars['emailid'] = new Smarty_variable($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], null, 0);?>

			<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_bl'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_bl']===1) {?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(1, null, 0);?>
			<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_bl'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_bl']===0) {?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(0, null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['pstatus'] = new Smarty_variable(1, null, 0);?>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['sourceInfo']->value['phone_mobile'])&&$_smarty_tpl->tpl_vars['sourceInfo']->value['phone_mobile']!='') {?>
			
                            <?php if ($_smarty_tpl->tpl_vars['pstatus']->value==1&&isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_exist'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_exist']!='') {?>
                                <a href="javascript:void(0)" class="ajax_sms_href" email="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><img class="toolTip1 imgstatus" title="<?php echo smartyTranslate(array('s'=>'Subscribe the contact','mod'=>'sendinblue'),$_smarty_tpl);?>
" id="ajax_contact_status_<?php echo intval($_smarty_tpl->tpl_vars['counter']->value);?>
" src="../img/admin/disabled.gif" /></a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['pstatus']->value==0&&isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_exist'])&&$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['emailid']->value]['sms_exist']!='') {?>
                                <a href="javascript:void(0)" class="ajax_sms_href" email="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sourceInfo']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><img class="toolTip1 imgstatus" title="<?php echo smartyTranslate(array('s'=>'Unsubscribe the contact','mod'=>'sendinblue'),$_smarty_tpl);?>
" id="ajax_contact_status_<?php echo intval($_smarty_tpl->tpl_vars['counter']->value);?>
" src="../img/admin/enabled.gif" /></a>
                            
                            <?php } else { ?>
                               <?php echo smartyTranslate(array('s'=>'Not synchronized','mod'=>'sendinblue'),$_smarty_tpl);?>

                            <?php }?>
			
                        <?php }?>
		</td>
                
	</tr>
<?php } ?>

<tr>
	<td colspan='3'>
		<div class='pagination'>
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['first_btn']->value&&$_smarty_tpl->tpl_vars['cur_page']->value>1) {?>
					<li p='1' class='active'><?php echo smartyTranslate(array('s'=>'First','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['first_btn']->value) {?>
					<li p='1' class='inactive'><?php echo smartyTranslate(array('s'=>'First','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php }?>
	
				<?php if ($_smarty_tpl->tpl_vars['previous_btn']->value&&$_smarty_tpl->tpl_vars['cur_page']->value>1) {?>
					<?php $_smarty_tpl->tpl_vars['pre'] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_page']->value-1, null, 0);?>
					<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pre']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' class='active'><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['previous_btn']->value) {?>
					<li class='inactive'><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php }?>
	
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['name'] = 'cu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'] = (int) $_smarty_tpl->tpl_vars['start_loop']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['end_loop']->value+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cu']['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['cur_page']->value==$_smarty_tpl->getVariable('smarty')->value['section']['cu']['index']) {?>
						<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['cu']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' style='color:#fff;background-color:#000;' class='active'><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['cu']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</li>
					<?php } else { ?>
						<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['cu']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' class='active'><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['cu']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</li>
					<?php }?>
					
				<?php endfor; endif; ?>
				
	
				<?php if ($_smarty_tpl->tpl_vars['last_btn']->value&&$_smarty_tpl->tpl_vars['cur_page']->value<$_smarty_tpl->tpl_vars['no_of_paginations']->value) {?>
					<?php $_smarty_tpl->tpl_vars['nex'] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_page']->value+1, null, 0);?>
					<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['nex']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' class='active'><?php echo smartyTranslate(array('s'=>'Next','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['next_btn']->value) {?>
					<li class='inactive'><?php echo smartyTranslate(array('s'=>'Next','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['last_btn']->value&&$_smarty_tpl->tpl_vars['cur_page']->value<$_smarty_tpl->tpl_vars['no_of_paginations']->value) {?>
					<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['no_of_paginations']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' class='active'><?php echo smartyTranslate(array('s'=>'Last','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['last_btn']->value) {?>
					<li p='<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['no_of_paginations']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
' class='inactive'><?php echo smartyTranslate(array('s'=>'Last','mod'=>'sendinblue'),$_smarty_tpl);?>
</li>
				<?php }?>
			</ul>
		</div>
	</td>
</tr>
<?php }} ?>
