<body>
	<div class="main-cart">
		<div class="container">
			<div class="row cart cart_table">
				<form method="post" class="form_checkout" action="/cart">
					<div class="col-md-12">
						<table class="table table-bordered cart-table">
							<thead>
								<tr>
									<th class="text-center">Tên sản phẩm</th>
									<th class="text-center">Đơn giá</th>
									<th class="text-center">Số lượng</th>
									<th class="text-center">Thành tiền</th>
									<th class="text-center">Xóa</th>
								</tr>
							</thead>
							<tbody>	
								<?php foreach ($cart as $c) : ?> 
									<tr>
										<td class="text-center"><p class=""><?= $c['product_name']?></p></td>
										<td class="text-center"><p class=""><?= $c['price']?></p></td>
										<td class="text-center"><input type="text" class="item-quantity" value="1" readonly></td>
										<td class="text-center"><p class="l"><?= $c['price'] ?></p></td>
										<td class="text-center"><a class="fa fa-trash-o item-remove" href="index.php?controller=cart&action=remove&id=<?=$c['id']?>" data-id="4634733"></a></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<a href="#" class="btn-continue">Mua hàng tiếp</a>

				</div>
				<div class="col-md-3 col-xs-12">
					</tbody></table>
					<a href="index.php?controller=cart&action=checkout" class="btn-checkout pull-right ">Thanh toán</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="views/assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		jQuery(".fa-list").click(function(){
			jQuery(".list-product-cg .product-category").removeClass("col-md-4");
			jQuery(".list-product-cg .product-category").addClass("col-md-12");
			jQuery(".list-product-cg .product-category .thubnail").css({"float":"left","margin-right":"20px"});
			jQuery(".list-product-cg .product-category .thubnail img").css({"max-height":"300px"});
			jQuery(".list-product-cg .product-category .description").css({"text-align":"left"});
		});
		jQuery(".fa-th").click(function(){
			jQuery(".list-product-cg .product-category").removeClass("col-md-12");
			jQuery(".list-product-cg .product-category").addClass("col-md-4");
			jQuery(".list-product-cg .product-category .description").css({"text-align":"center"});
		});
	</script>
</body>
</html>