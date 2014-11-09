<?php /*%%SmartyHeaderCode:14398996265433e56a9c1a14-55147263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79ad5ee3d095b875796bfc99228d20c812deac8' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1412348061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14398996265433e56a9c1a14-55147263',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b9acb4dc2e3_84065644',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b9acb4dc2e3_84065644')) {function content_545b9acb4dc2e3_84065644($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://giayit.byethost22.com/prestashop/vn/supplier" title="Nhà cung cấp">
					Nhà cung cấp
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="first_item">
                					<a 
					href="http://giayit.byethost22.com/prestashop/vn/1__fashion-supplier" 
					title="Chi tiết Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
															<li class="last_item">
                					<a 
					href="http://giayit.byethost22.com/prestashop/vn/2__it-company" 
					title="Chi tiết IT company">
				                IT company
                					</a>
                				</li>
										</ul>
										<form action="/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tất cả</option>
													<option value="http://giayit.byethost22.com/prestashop/vn/1__fashion-supplier">Fashion Supplier</option>
													<option value="http://giayit.byethost22.com/prestashop/vn/2__it-company">IT company</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
