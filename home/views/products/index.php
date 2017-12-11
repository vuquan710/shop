	<div class="product-detail">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 img-main">
					<div class="col-md-2 col-sm-2 col-xs-2">
						
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<img src="views/assets/images/bn22.jpg">
					</div>
				</div>
				<div class="col-md-6 box-pay">
					<form action="index.php?controller=cart&id=<?=$product['id']?>" method="POST">
						<h1 name="name" class="pd-name"><?=$product['product_name'] ?></h1>
						<p name="price" class="pd-price"><?=$product['price'] ?></p>
						<div class="pd-form">
							<div class="selector-wrapper clearfix"><label for="product-select-option-0">Kích thước</label><select class="single-option-selector" data-option="option1" id="product-select-option-0"><option value="L">L</option><option value="XL">XL</option></select></div><select id="product-select" name="variantId" style="display: none;">
							<option lỗi="" liquid:="" unknown="" operator="" roduct="" value="4093640">L - 230.000₫</option>
							<option lỗi="" liquid:="" unknown="" operator="" roduct="" value="4093641">XL - 230.000₫</option>
						</select>
						<label for="">Số lượng</label>
						<input type="number" value="1" name="quantity">
						<div class="clearfix"></div>
						<button type="submit">Mua hàng</button>
					</form>
				</div>	
			</div>	
		</div>
	</div>