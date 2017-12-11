<?php 
session_start();

class CartHelper {
	public static function list () {
		return isset($_SESSION['CART']) ? $_SESSION['CART']  : [];
	}

	public static function add ($item) {
		$cart = CartHelper::list();
		if (!in_array($item, $cart)) {
			array_push($cart, $item);
		}
		$_SESSION['CART'] = $cart;
	}

	public static function remove ($item) {
		$cart = CartHelper::list();
		if (in_array($item, $cart)) {
			array_splice($cart, array_search($item, $cart),1);
		}
		$_SESSION['CART'] = $cart;
	}


	public static function clearAll () {
		return session_destroy();
	}
}
?>