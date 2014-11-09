<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 11:11:28
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/smssetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2738165245455aef0045b62-60364477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8978e455312b526ea792432908f5ce96f1a2298f' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/sendinblue/views/templates/admin/smssetting.tpl',
      1 => 1414896334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2738165245455aef0045b62-60364477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prs_version' => 0,
    'current_credits_sms' => 0,
    'Sendin_Notify_Value' => 0,
    'cl_version' => 0,
    'sms_credit_status' => 0,
    'form_url' => 0,
    'Sendin_Notify_Email' => 0,
    'link' => 0,
    'site_name' => 0,
    'sms_order_status' => 0,
    'Sendin_Sender_Order' => 0,
    'Sendin_Sender_Order_Message' => 0,
    'sms_shipment_status' => 0,
    'Sendin_Sender_Shipment' => 0,
    'Sendin_Sender_Shipment_Message' => 0,
    'sms_campaign_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5455aef0395838_72373281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455aef0395838_72373281')) {function content_5455aef0395838_72373281($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/tools/smarty/plugins/modifier.replace.php';
?>



<table width="100%" cellspacing="0" cellpadding="0" style="margin-top:15px;margin-bottom:15px;" class="table form-data">
   <thead>
      <tr>
         <th colspan="2"><?php echo smartyTranslate(array('s'=>'Manage SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</th>
      </tr>
   </thead>
   <tbody>
      <tr>
        
                     <td class="row1" style="border:none; padding-top:10px;">
                     
                     <?php if (isset($_smarty_tpl->tpl_vars['prs_version']->value)&&$_smarty_tpl->tpl_vars['prs_version']->value>=1.5) {?>
                     <?php if ($_smarty_tpl->tpl_vars['current_credits_sms']->value>=$_smarty_tpl->tpl_vars['Sendin_Notify_Value']->value) {?>
                        <span style="margin-bottom:10px; color:#000; font-weight:bold;color: #585A69;"><?php echo smartyTranslate(array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl);?>
<strong style="color: #000000;"> <?php echo floatval($_smarty_tpl->tpl_vars['current_credits_sms']->value);?>
</strong> <?php echo smartyTranslate(array('s'=>' credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl);?>
<a target="_blank" href ="<?php echo smartyTranslate(array('s'=>'https://www.sendinblue.com/pricing','mod'=>'sendinblue'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>' here','mod'=>'sendinblue'),$_smarty_tpl);?>
</a>.</span>
                        <?php } else { ?>
                        <span style="margin-bottom:10px; font-weight:bold; color: #585A69;"><?php echo smartyTranslate(array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl);?>
 <strong  style="color:#F00; "><?php echo floatval($_smarty_tpl->tpl_vars['current_credits_sms']->value);?>
</strong> <?php echo smartyTranslate(array('s'=>' credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl);?>
<a target="_blank" href ="<?php echo smartyTranslate(array('s'=>'https://www.sendinblue.com/pricing','mod'=>'sendinblue'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>' here','mod'=>'sendinblue'),$_smarty_tpl);?>
</a>.</span>
                        <?php }?>
                     <?php } else { ?>
                     		<?php if ($_smarty_tpl->tpl_vars['current_credits_sms']->value>=$_smarty_tpl->tpl_vars['Sendin_Notify_Value']->value) {?>
                            <span style="margin-bottom:10px; color:#000; font-weight:bold;color: #996633;"><?php echo smartyTranslate(array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl);?>
<strong style="color: #000000;"> <?php echo floatval($_smarty_tpl->tpl_vars['current_credits_sms']->value);?>
</strong> <?php echo smartyTranslate(array('s'=>' credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl);?>
<a target="_blank" href ="<?php echo smartyTranslate(array('s'=>'https://www.sendinblue.com/pricing','mod'=>'sendinblue'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>' here','mod'=>'sendinblue'),$_smarty_tpl);?>
</a>.</span>
                            <?php } else { ?>
                            <span style="margin-bottom:10px; font-weight:bold; color: #996633;"><?php echo smartyTranslate(array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl);?>
 <strong  style="color:#F00; "><?php echo floatval($_smarty_tpl->tpl_vars['current_credits_sms']->value);?>
</strong> <?php echo smartyTranslate(array('s'=>' credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl);?>
<a target="_blank" href ="<?php echo smartyTranslate(array('s'=>'https://www.sendinblue.com/pricing','mod'=>'sendinblue'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>' here','mod'=>'sendinblue'),$_smarty_tpl);?>
</a>.</span>
                            <?php }?>
                     <?php }?>   
                        <br/><br/>
                       <label><?php echo smartyTranslate(array('s'=>'You want to be notified by e-mail when you do not have enough credits?','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
							<span class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
                           <input name="sms_credit" <?php if (isset($_smarty_tpl->tpl_vars['sms_credit_status']->value)&&$_smarty_tpl->tpl_vars['sms_credit_status']->value==1) {?>checked="checked"<?php }?> type="radio" value="1" class="sms_credit radio_nospaceing" />
                           <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl);?>

                           <input name="sms_credit" <?php if (isset($_smarty_tpl->tpl_vars['sms_credit_status']->value)&&$_smarty_tpl->tpl_vars['sms_credit_status']->value==0) {?>checked="checked"<?php }?>  type="radio" value="0" class="sms_credit radio_spaceing2" />
                           <?php echo smartyTranslate(array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl);?>
</span>
                  
                        <div class="hideCredit" id="div_email_test" style="padding-top:20px;">
                         <form action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" method="POST" name="notify_sms_mail_form" >
                   
                           <div id="errmsg" style="color:#F00"></div>
                           <p  class="form-data"><label><?php echo smartyTranslate(array('s'=>'Email','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
                            <input name="sendin_notify_email" id="sendin_notify_email" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Sendin_Notify_Email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="40" /></p>
							<p  class="form-data"> <label><?php echo smartyTranslate(array('s'=>'Limit','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
                           <input name="sendin_notify_value" id="sendin_notify_value" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Sendin_Notify_Value']->value;?>
" size="40" /><span style="position:absolute;" class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Alert threshold for remaining credits','mod'=>'sendinblue'),$_smarty_tpl);?>
"></span></p>
							<p  class="form-data"><input name="notify_sms_mail" type="submit"  onClick="return validate('<?php echo smartyTranslate(array('s'=>'Please provide valid Email!','mod'=>'sendinblue'),$_smarty_tpl);?>
','<?php echo smartyTranslate(array('s'=>'Please provide a limit greater than 0','mod'=>'sendinblue'),$_smarty_tpl);?>
');" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="button" style=" margin-left: 658px;" /></p>
							<p  class="mrgin-left"><?php echo smartyTranslate(array('s'=>'To get the email notification, you should run ','mod'=>'sendinblue'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo smartyTranslate(array('s'=>' atleast one time per day. ','mod'=>'sendinblue'),$_smarty_tpl);?>

							<span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'Note that if you change the name of your Shop (currently ','mod'=>'sendinblue'),$_smarty_tpl);?>

			        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['site_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>') the token value changes.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span></p>
                          
                          </form>
                        </div>
                    
                     </td>
                  </tr>
		<tr>
         <td>
            <div id="tabs_wrapper">
               <div id="tabs_container">
                  <ul id="tabs">
                     <li class="active"><a href="#tab1"><?php echo smartyTranslate(array('s'=>'Send SMS after order confirmation','mod'=>'sendinblue'),$_smarty_tpl);?>
</a></li>
                     <li><a class="icon_accept" href="#tab2"><?php echo smartyTranslate(array('s'=>'Send a SMS confirmation for the shipment of the order','mod'=>'sendinblue'),$_smarty_tpl);?>
</a></li>
                     <li><a href="#tab3"><?php echo smartyTranslate(array('s'=>'Send a campaign SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</a></li>
                  </ul>
               </div>
               <div id="tabs_content_container">
                  <div id="tab1" class="tab_content" style="display: block;">
                     <div class="wrapper" style="margin-top:15px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-data2">
                      
                           <tr>
                              <td class="row1">
                                 <label class="r_label" style="padding-top:0px;"><strong><?php echo smartyTranslate(array('s'=>'Send SMS after order confirmation','mod'=>'sendinblue'),$_smarty_tpl);?>
</strong></label>
                                 <div class="radio_bx <?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"> <span style="margin:0 0px 0 0;">
                                    <input name="sms_order_setting" <?php if (isset($_smarty_tpl->tpl_vars['sms_order_status']->value)&&$_smarty_tpl->tpl_vars['sms_order_status']->value==1) {?>checked="checked"<?php }?>  class="sms_order_setting radio_spaceing" type="radio" value="1" />
                                    <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl);?>
</span> <span>
                                    <input name="sms_order_setting" class="sms_order_setting radio_spaceing2" <?php if (isset($_smarty_tpl->tpl_vars['sms_order_status']->value)&&$_smarty_tpl->tpl_vars['sms_order_status']->value==0) {?>checked="checked"<?php }?>  type="radio" value="0" />
                                    <?php echo smartyTranslate(array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl);?>
</span>
                                 </div>
                                 <div class="hideOrder">
                                
                                 <div class="form_table" style="margin-top:33px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-data">

                                       <tr>
                                       <td style="padding:0">
										 
										 <form action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" method="POST" name="sender_order_form">

										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr><td valign="top" style="padding-left:0; width:250px" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><h4 style="margin-top:0px;"><?php echo smartyTranslate(array('s'=>'SMS settings','mod'=>'sendinblue'),$_smarty_tpl);?>
:</h4></td><td >&nbsp</td></tr>
										<tr>
                                          <td valign="top">
                                          <label><?php echo smartyTranslate(array('s'=>'Sender','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <input name="sender_order"  id="sender_order" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Sendin_Sender_Order']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'This field allows you to personalize the SMS sender. Attention, there is a limited number of characters.If you enter a name, it is limited to 11 characters, and special characters (é, à ...) are not accepted. If you enter a phone number, it is limited to 17 characters; the number should be preceded by 00 and the country code (for instance, for France mobile 06 12 34 56 78 use 0033612345678 with 0033 is France prefix ).','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_order_text">17	</span></em>
                                             </div>
                                             
                                          </td>
                                       </tr>
                                       <tr>
                                          <td valign="top"><label><?php echo smartyTranslate(array('s'=>'Message','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <textarea name="sender_order_message" id="sender_order_message" cols="45" rows="5" class="textarea_bx"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Sendin_Sender_Order_Message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
                                             <span class="toolTip" style="margin-top:35px;" title="<?php echo smartyTranslate(array('s'=>' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <div class="clear"></div>
                                              <span style="line-height:16px; margin-bottom:15px; width:333px;" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><?php echo smartyTranslate(array('s'=>'Number of SMS used: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_order_message_text_count">0</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
</em><span id="sender_order_message_text">160</span></div>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Attention line break is counted as a single character.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em>
                                             </div><br>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'If you want to personalize the SMS, you can use the variables below:','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For civility use {civility}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                                <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For first name use {first_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For last name use {last_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order reference id use {order_reference}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order price use {order_price}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order date use {order_date}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                             <input name="sender_order_save" type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="button sender_order_save" senderfield="<?php echo smartyTranslate(array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl);?>
"  messagefield="<?php echo smartyTranslate(array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl);?>
"  style="margin-top:10px; margin-left:249px;"  />
                                          </td>
                                       </tr>
                                       </table>
                                        </form> 
                                       </td>
                                       </tr>
                                      
                                       <tr>
                                       <td colspan="2" valign="top" border="0">
										<form  name="sender_order_testForm">

										<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td>
                                             
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Sending a test SMS will be deducted from your SMS credits.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                             <label style="padding-top:5px;"><?php echo smartyTranslate(array('s'=>'Send a test SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
                                             <input name="sender_order_number" id="sender_order_number" maxlength="17" type="text" value="" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <input name="sender_order_submit" id="sender_order_submit" type="button" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="button testOrdersmssend" successmsg="<?php echo smartyTranslate(array('s'=>'Message has been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
"  failmsg="<?php echo smartyTranslate(array('s'=>'Message has not been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
" />
                                          </td>
                                       </tr>
                                       
                                        </table>
                                        </form> 
                                       </td>
                                       </tr>
                                    </table>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </div></div>
                  </div>
                  <div id="tab2" class="tab_content">
                     <div class="wrapper"  style="margin-top:15px;margin-bottom: 6px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                       
                           <tr>
                              <td class="row1">
                                 <label class="r_label" style="margin-left: 7px; padding-top:0px;"><strong><?php echo smartyTranslate(array('s'=>'Send a SMS confirmation for the shipment of the order','mod'=>'sendinblue'),$_smarty_tpl);?>
</strong></label>
                                 <div class="radio_bx <?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"> <span>
                                    <input name="sms_shiping_setting" class="sms_shiping_setting radio_spaceing" <?php if (isset($_smarty_tpl->tpl_vars['sms_shipment_status']->value)&&$_smarty_tpl->tpl_vars['sms_shipment_status']->value==1) {?>checked="checked"<?php }?> type="radio" value="1" />
                                    <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl);?>
</span> <span>
                                    <input name="sms_shiping_setting" type="radio" value="0" <?php if (isset($_smarty_tpl->tpl_vars['sms_shipment_status']->value)&&$_smarty_tpl->tpl_vars['sms_shipment_status']->value==0) {?>checked="checked"<?php }?>  class="sms_shiping_setting radio_spaceing2"/>
                                    <?php echo smartyTranslate(array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl);?>
</span>
                                 </div>
                                 <div class="hideShiping" style="margin-top:33px;">
								
                                 <div class="form_table ">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           
                                       <tr>
                                       <td >
										 
										 <form action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" method="POST" name="sender_shipment_form">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr><td valign="top"  style="padding-left:0" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><h4 style="margin-top:0px;"><?php echo smartyTranslate(array('s'=>'SMS settings','mod'=>'sendinblue'),$_smarty_tpl);?>
:</h4></td><td >&nbsp</td></tr>
                                       <tr>
                                          <td style="width:250px"  valign="top"><label><?php echo smartyTranslate(array('s'=>'Sender','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td >
                                             <input name="sender_shipment" maxlength="17" id="sender_shipment" type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Sendin_Sender_Shipment']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'This field allows you to personalize the SMS sender. Attention, there is a limited number of characters.If you enter a name, it is limited to 11 characters, and special characters (é, à ...) are not accepted. If you enter a phone number, it is limited to 17 characters; the number should be preceded by 00 and the country code (for instance, for France mobile 06 12 34 56 78 use 0033612345678 with 0033 is France prefix ).','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_shipment_text">17</span></em>
                                             </div>
                                             
                                          </td>
                                       </tr>
                                       <tr>
                                          <td valign="top"><label><?php echo smartyTranslate(array('s'=>'Message','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <textarea name="sender_shipment_message" id="sender_shipment_message" cols="45" rows="5" class="textarea_bx"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Sendin_Sender_Shipment_Message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
                                             <span class="toolTip" style="margin-top:35px;" title="<?php echo smartyTranslate(array('s'=>' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                                <div class="clear"></div>                                        
                                             <span style="line-height:16px; margin-bottom:15px; width:333px;" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><?php echo smartyTranslate(array('s'=>'Number of SMS used: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_shipment_message_text_count">0</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
</em><span id="sender_shipment_message_text">160</span></div>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Attention line break is counted as a single character.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em>
                                             </div><br/>
                                            <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'If you want to personalize the SMS, you can use the variables below:','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For civility use {civility}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For first name use {first_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For last name use {last_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order reference id use {order_reference}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order price use {order_price}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For order date use {order_date}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                             <input name="sender_shipment_save" type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="button sender_shipment_save" senderfield="<?php echo smartyTranslate(array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl);?>
"  messagefield="<?php echo smartyTranslate(array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl);?>
" style="margin-top:10px;   margin-left: 249px;" />
                                          </td>
                                       </tr>
                                        </table>
                                        </form> 
                                       </td>
                                       </tr>
                                       
                                        <tr>
                                       <td colspan="2" valign="top" border="0">
										<form action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" method="POST" name="sender_order_testForm">

										<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td valign="top" colspan="2">
                                             
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Sending a test SMS will be deducted from your SMS credits.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                             <label style="padding-top:5px;"><?php echo smartyTranslate(array('s'=>'Send a test SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
                                             <input name="sender_shipment_number" id="sender_shipment_number" maxlength="17" type="text" value="" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <input name="sender_shipment_submit" id="sender_shipment_submit" type="button" successmsg="<?php echo smartyTranslate(array('s'=>'Message has been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
"  failmsg="<?php echo smartyTranslate(array('s'=>'Message has not been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendinblue'),$_smarty_tpl);?>
" class="button testSmsShipped"  />
                                          </td>
                                       </tr>
                                        </table>
                                        </form> 
                                       </td>
                                       </tr>
                                    </table>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </div> </div>
                  </div>
                  <div id="tab3" class="tab_content"> 
                     <div class="wrapper" style="margin-top:15px;margin-bottom: 6px;">
                     
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-data">
                    
                           <tr>
                              <td class="row1">
                                 <label class="r_label"  style="margin-left: 7px; padding-top:0px;"><strong><?php echo smartyTranslate(array('s'=>'Send a campaign SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</strong></label>
                                 <div class="radio_bx" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"> <span>
                                    <input name="sms_campaign_setting" class="sms_campaign_setting radio_spaceing" <?php if (isset($_smarty_tpl->tpl_vars['sms_campaign_status']->value)&&$_smarty_tpl->tpl_vars['sms_campaign_status']->value==1) {?>checked="checked"<?php }?> type="radio" value="1" />
                                    <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'sendinblue'),$_smarty_tpl);?>
</span> <span>
                                    <input name="sms_campaign_setting" class="sms_campaign_setting radio_spaceing2" <?php if (isset($_smarty_tpl->tpl_vars['sms_campaign_status']->value)&&$_smarty_tpl->tpl_vars['sms_campaign_status']->value==0) {?>checked="checked"<?php }?> type="radio" value="0" />
                                    <?php echo smartyTranslate(array('s'=>'No','mod'=>'sendinblue'),$_smarty_tpl);?>
</span>
                                 </div>
							<div class="hideCampaign">
							
                                 <div class="form_table " style="margin-top:33px;">
                                 
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
                                       <td>
										 
										 <form action="<?php echo smarty_modifier_replace(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'&amp;','&');?>
" method="POST" name="sender_order_form">

										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-data no-padding">

                                        <tr>
                                          <td valign="top" style="width:250px"> <label> <?php echo smartyTranslate(array('s'=>'To','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                         <td class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
                                             <input name="Sendin_Sms_Choice" id="r1_Sendin_Sms_Choice"  checked="checked" class="Sendin_Sms_Choice radio_nospaceing" type="radio" value="1" />
                                            <?php echo smartyTranslate(array('s'=>'A single contact','mod'=>'sendinblue'),$_smarty_tpl);?>

                                              &nbsp;&nbsp;
                                             <input name="Sendin_Sms_Choice" id="r2_Sendin_Sms_Choice" class="Sendin_Sms_Choice radio_spaceing" type="radio" value="0" />
                                             <?php echo smartyTranslate(array('s'=>'All my PrestaShop customers','mod'=>'sendinblue'),$_smarty_tpl);?>

                                             &nbsp;&nbsp;
                                             <input name="Sendin_Sms_Choice" id="r3_Sendin_Sms_Choice" class="Sendin_Sms_Choice radio_spaceing" type="radio" value="2" />
                                             <?php echo smartyTranslate(array('s'=>'Only subscribed customers','mod'=>'sendinblue'),$_smarty_tpl);?>

                                          </td>
                                       </tr>
                                       <tr><td valign="top"  style="padding-left:0" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><h4 style="margin-top:0px;"><?php echo smartyTranslate(array('s'=>'SMS Settings','mod'=>'sendinblue'),$_smarty_tpl);?>
:</h4></td><td>&nbsp</td></tr>
                                       <tr class="singlechoice">
                                          <td valign="top"><label><?php echo smartyTranslate(array('s'=>'Phone number of the contact','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <input name="singlechoice" id="singlechoice" maxlength="17" type="text" value="" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                          </td>
                                       </tr>
                                       
                                       <tr>
                                          <td valign="top"><label><?php echo smartyTranslate(array('s'=>'Sender','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <input name="sender_campaign" maxlength="17" id="sender_campaign" type="text" value="" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>'This field allows you to personalize the SMS sender. Attention, there is a limited number of characters.If you enter a name, it is limited to 11 characters, and special characters (é, à ...) are not accepted. If you enter a phone number, it is limited to 17 characters; the number should be preceded by 00 and the country code (for instance, for France mobile 06 12 34 56 78 use 0033612345678 with 0033 is France prefix ).','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_campaign_text">17</span></em>
                                             </div>
                                             
                                          </td>
                                       </tr>
                                       <tr>
                                          <td valign="top"><label><?php echo smartyTranslate(array('s'=>'Message','mod'=>'sendinblue'),$_smarty_tpl);?>
</label></td>
                                          <td>
                                             <textarea name="sender_campaign_message" id="sender_campaign_message" cols="45" rows="5" class="textarea_bx"></textarea>
                                             <span class="toolTip" style=" margin-top:35px;" title="<?php echo smartyTranslate(array('s'=>' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <div class="clear"></div>
                                             <span style="line-height:16px; margin-bottom:15px; width:333px;" class="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cl_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"><?php echo smartyTranslate(array('s'=>'Number of SMS used: ','mod'=>'sendinblue'),$_smarty_tpl);?>
<span id="sender_campaign_message_text_count">0</span>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl);?>
</em><span id="sender_campaign_message_text">160</span></div>
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Attention line break is counted as a single character.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em>
                                             </div><br>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'If you want to personalize the SMS, you can use the variables below:','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For civility use {civility}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For first name use {first_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                               <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'- For last name use {last_name}','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                              
                                             <input type="submit" style="margin-top:10px; margin-left: 249px;" class="button sender_campaign_save" value="<?php echo smartyTranslate(array('s'=>'Send the campaign','mod'=>'sendinblue'),$_smarty_tpl);?>
" name="sender_campaign_save" senderfield="<?php echo smartyTranslate(array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl);?>
"  messagefield="<?php echo smartyTranslate(array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl);?>
">
                                          </td>
                                       </tr>
                                      
                                      
                                       
                                         </table>
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td valign="top" colspan="2">
                                             
                                             <div class="hintmsg"><em><?php echo smartyTranslate(array('s'=>'Sending a test SMS will be deducted from your SMS credits.','mod'=>'sendinblue'),$_smarty_tpl);?>
</em></div>
                                             <label style="padding-top:5px;"><?php echo smartyTranslate(array('s'=>'Send a test SMS','mod'=>'sendinblue'),$_smarty_tpl);?>
</label>
                                             <input name="sender_campaign_number_test" id="sender_campaign_number_test" maxlength="17" type="text" value="" class="input_bx" />
                                             <span class="toolTip" title="<?php echo smartyTranslate(array('s'=>' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)','mod'=>'sendinblue'),$_smarty_tpl);?>
">&nbsp;</span>
                                             <input name="sender_campaign_test_submit" id="sender_campaign_test_submit" type="button" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendinblue'),$_smarty_tpl);?>
" sendererr="<?php echo smartyTranslate(array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl);?>
" mobileerr="<?php echo smartyTranslate(array('s'=>'Please fill the Mobile Phone field','mod'=>'sendinblue'),$_smarty_tpl);?>
" messageerr="<?php echo smartyTranslate(array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl);?>
" successmsg="<?php echo smartyTranslate(array('s'=>'Message has been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
"  failmsg="<?php echo smartyTranslate(array('s'=>'Message has not been sent successfully','mod'=>'sendinblue'),$_smarty_tpl);?>
"  class="button testSmsCampaignsend"  />
                                          </td>
                                       </tr>
                                        </table>
                                        </form> 
                                       </td>
                                       </tr>
                                    </table>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </td>
      </tr>
   </tbody>
</table>

<?php }} ?>
