<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 16:36:55
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/fbcomment/facebookcode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1273037370545206b7ed6274-71476452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d77d5ec793e02aadf878c15735c24eb8bfb510' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/fbcomment/facebookcode.tpl',
      1 => 1414661774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273037370545206b7ed6274-71476452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locale' => 0,
    'appid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545206b7edaef6_13379170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545206b7edaef6_13379170')) {function content_545206b7edaef6_13379170($_smarty_tpl) {?><div id="fb-root"></div>
<script type="text/javascript">
// <![CDATA[    
            /* Facebook SDK */
            (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
/all.js#xfbml=1&appId=<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
";
                    fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
// ]]>            
</script><?php }} ?>
