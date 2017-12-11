		<!-- end main-service -->
	<div class="main-slider">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="main-categories">
						<h3 class="main-categories-heading">Danh mục sản phẩm</h3>
						<div class="main-categories-content">
							<ul class="mc-list">
								<li> <i class="fa fa-angle-double-right"></i><a href="/giay-nam">GIÀY NAM</a></li>
								<li> <i class="fa fa-angle-double-right"></i> <a href="/giay-boot-nam">GIÀY BOOT NAM</a></li>
								<li>
									<a href=""> <i class="fa fa-angle-double-right"></i> Hình Xăm Dán</a>
								</li>
								<li> <a href="/gang-tay-xe-may"><i class="fa fa-angle-double-right"></i> săng Tay Xe Máy</a></li>
								<li> <a href="/gang-tay-hinh-xam"><i class="fa fa-angle-double-right"> </i> Găng tay hình xăm</a></li>
								<li><a href="/gang-tay-chong-nang-han-quoc"><i class="fa fa-angle-double-right"></i> Găng Tay Chống Nắng Hàn Quốc</a></li>
								<li>
									<a href=""><i class="fa fa-angle-double-right"></i> Balo - Túi Xách</a>
								</li>
								<li><a href="/vi-card-moc-khoa"><i class="fa fa-angle-double-right"></i> Ví Card - Móc Khóa</a></li>
								<li><a href="/bop-vi-nam"><i class="fa fa-angle-double-right"></i> Bóp Ví Nam</a></li>
								<li><a href="/mu-non"><i class="fa fa-angle-double-right"></i> Mũ - Nón</a></li>
								<li><a href="/binh-dau-lau-ly-dau-lau"><i class="fa fa-angle-double-right"></i> Bình Đầu Lâu - Ly Đầu Lâu</a></li>
								<li><a href="/khan-da-nang"><i class="fa fa-angle-double-right"></i> Khăn Đa Năng</a></li>
								<li><a href="/day-nit-that-lung-nam"><i class="fa fa-angle-double-right"></i> DÂY NỊT - THẮT LƯNG NAM</a></li>
								<li><a href="/gang-tay-tattoo-baby"><i class="fa fa-angle-double-right"></i> Găng Tay Tattoo Baby</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-8 ">
					<img src="views/assets/images/image-slider.jpg" class="img_slider">
				</div>
			</div>
		</div>
	</div> 
	<!-- end main-banner -->
	<div class="main-product-list">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="box-heading">
						<h3><a href="gang-tay-xe-may">Sản phẩm bán chạy</a></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">

					<?php foreach ($products as $p) :  ?>
						<div class="col-md-3">
							<figure class="thubnail">
								<img src="views/assets/images/giaybanchay.jpg">
							</figure>
							<div class="description">
								<div class="title_product">
									<?= $p['product_name']?>
								</div>
								<span class="price"><?= $p['price']?></span>
								<a href="./index.php?controller=products&id=<?=$p['id']?>" title=""><button class="btn_buy">Mua Hang</button></a>
							</div>
						</div>
					<?php endforeach; ?>

					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="main-product-list">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="box-heading">
						<h3><a href="gang-tay-xe-may">Găng tay xe máy</a></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<figure class="thubnail">
								<img src="views/assets/images/giaybanchay.jpg">
							</figure>
							<div class="description">
								<div class="title_product">
									Giày thể thao nam
								</div>
								<span class="price">320000</span>
								<button class="btn_buy">Mua Hang</button>
							</div>
						</div>
							<div class="col-md-3">
							<figure class="thubnail">
								<img src="views/assets/images/giaybanchay.jpg">
							</figure>
							<div class="description">
								<div class="title_product">
									Giày thể thao nam
								</div>
								<span class="price">320000</span>
								<button class="btn_buy">Mua Hang</button>
							</div>
						</div>
							<div class="col-md-3">
							<figure class="thubnail">
								<img src="views/assets/images/giaybanchay.jpg">
							</figure>
							<div class="description">
								<div class="title_product">
									Giày thể thao nam
								</div>
								<span class="price">320000</span>
								<button class="btn_buy">Mua Hang</button>
							</div>
						</div>
							<div class="col-md-3">
							<figure class="thubnail">
								<img src="views/assets/images/giaybanchay.jpg">
							</figure>
							<div class="description">
								<div class="title_product">
									Giày thể thao nam
								</div>
								<span class="price">320000</span>
								<button class="btn_buy">Mua Hang</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	</div>