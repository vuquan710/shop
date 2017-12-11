<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="stylesheet" type="text/css" href="views/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 hidden-xs">
						<ul>
						</ul>
					</div>
					<div class="col-sm-6 hidden-xs">
						<ul class="pull-right">
							<li><a href="index.php?controller=admin">Đăng nhập</a></li>
							<li><a href="#">Đăng ký</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-md-3  col-xs-12">
						<a href="/" class="header-logo">
							<figure class="thumnail">
								<img src="views/assets/images/logo.jpg">
							</figure>
						</a>
					</div>
					<div class="col-md-3 col-xs-12">
						<a href="/" class="header-logo">
							<img src="views/assets/images/logo.jpg">
						</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="header-search">
							<form action="/search" method="get" id="header-search">
								<input type="text" id="header-search-input" placeholder="Tìm kiếm sản phẩm" value="" name="query">
								<button id="header-search-btn" type="submit"><span class="fa fa-search"></span></button>
							</form>
						</div>
					</div>
					<div class="col-md-2  col-xs-6">
						<div class="header-cart">
							<a href="./index.php?controller=cart" title=""><i class= "fa fa-shopping-cart"></i></a>
							<!-- <div class="cart-mini"> -->
								<!-- <a href="/cart" class="cart-icon"><span class="amount_product">0 </span> sản phẩm</a> -->
			<!-- 					<div class="cart-mini-total">
									<ul></ul>	
									<p class="text-right cart-mini-total-money">Tổng tiền: <span class="amount_price"> 0 </span> ₫ </p>
									<p class="text-right cart-mini-link">
										<a href="/checkout" class="btn_cart">Thanh toán</a>
										<a href="/cart" class="btn_cart">Giỏ hàng</a>
									</p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="main-nav ">
		<div class="container">
			<div class="main-nav-content">
				<ul>
					<li><a href="./">Trang chủ</a></li>
					<li><a href="#">GIÀY NAM</a></li>
					<li><a href="#">Găng Tay Xe Máy</a></li>
					<li><a href="#">Túi Đeo Chéo</a></li>
					<li><a href="#">Hình Xăm Dán</a></li>
					<li><a href="#">Địa chỉ - Liên hệ</a></li>
					<li><a href="#">GIAO HÀNG - THANH TOÁN</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end main-nav -->
	<div class="main-service">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<p><span class="fa fa-exchange"></span>NHẬN HÀNG THANH TOÁN</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<p><span class="fa fa-truck"></span>GIAO HÀNG TOÀN QUỐC</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<p><span class="fa fa-money"></span>Mở Cửa 8H30 - 21H30 Mỗi Ngày</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<p><span class="fa fa fa-tty"></span>HOTLINE: 0888.28.38.48</p>
				</div>
			</div>
		</div>
	</div> 

    <?= @$content ?>
	<footer class="footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="footer-info">
						<a href="/" class="footer-logo" title="Alomua88.com">
							<img src="images/logo.jpg" alt="Alomua88.com">
						</a>
						<p><span class="fa fa-map-marker"></span>163/29 Thành Thái Phường 14 Quận 10 HCM</p>
						<p><span class="fa fa-phone"></span>012.18.28.38.48 </p>
						<p><span class="fa fa-phone"></span>0888 28 38 48</p>
						
						<p><span class="fa fa-envelope"></span><a href="mailto:alomua88@gmail.com">truonggiangg1207@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4  col-xs-6">
					<div class="footer-menu">
						<h3 class="footer-menu-heading">SẢN PHẨM</h3>
						<ul>
							
							<li><a href="/gang-tay-hinh-xam">GĂNG TAY HÌNH XĂM</a></li>
							
							<li><a href="/binh-dau-lau-ly-dau-lau">BÌNH LY ĐẦU LÂU</a></li>
							
							<li><a href="/hinh-xam-dan">HÌNH XĂM DÁN</a></li>
							
							<li><a href="/gang-tay-chong-nang-han-quoc">GĂNG TAY CHỐNG NẮNG</a></li>
							
							<li><a href="/bop-vi-nam">BÓP VÍ NAM</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-4  col-xs-6">
					<div class="footer-menu">
						<h3 class="footer-menu-heading">*NỔI BẬT*</h3>
						<ul>
							
							<li><a href="/gang-tay-xe-may">GĂNG TAY XE MÁY</a></li>
							
							<li><a href="/tui-deo-cheo">TÚI ĐEO CHÉO</a></li>
							
							<li><a href="/khan-da-nang">KHĂN ĐA NĂNG</a></li>
							
							<li><a href="/day-nit-that-lung-nam">DÂY NỊT - THẮT LƯNG</a></li>
							
							<li><a href="/mu-non">MŨ - NÓN</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-4  col-xs-6">
					<div class="footer-menu">
						<h3 class="footer-menu-heading">Thông tin</h3>
						<ul>
							
							<li><a href="/search">TÌM KIẾM</a></li>
							
							<li><a href="/tuyen-dung">TUYỂN DỤNG</a></li>
							
							<li><a href="/giao-hang-thanh-toan">GIAO NHẬN HÀNG</a></li>
							
							<li><a href="/lien-he">LIÊN HỆ</a></li>
							
							<li><a href="/collections/all">TẤT CẢ SẢN PHẨM</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-4  col-xs-6">
					<div class="footer-menu">
						<h3 class="footer-menu-heading">Tài khoản</h3>
						<ul>
							
							<li><a href="/">TRANG CHỦ</a></li>
							
							<li><a href="http://alomua88.bizwebvietnam.net/cart">GIỎ HÀNG</a></li>
							
							<li><a href="http://alomua88.bizwebvietnam.net/account/register">ĐĂNG KÝ</a></li>
							
							<li><a href="http://alomua88.bizwebvietnam.net/account/login">ĐĂNG NHẬP</a></li>
							
							<li><a href="/kiem-tra-don-hang">KIỂM TRA ĐƠN HÀNG</a></li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="copyright"> Designed by <a href="" title="Alomua88">ZQ</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>