<?php
require_once('controllers/base_controller.php');
require_once('models/products.php');
require_once('helpers/cart.helper.php');
class CartController extends BaseController
{
  function __construct()
  {
    $this->folder = 'cart';
  }

  public function index()
  {
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = Product::getOne($id);
    CartHelper::add($product);
    }
    $data = array('cart' => CartHelper::list());
    
    // CartHelper::clearAll();
    $this->render('index', $data);
  }

  public function checkout() 
  {
    $products = Product::all();
    $data = array('products' => $products);
    $this->render('checkout', $data);
  }

  public function remove() {
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = Product::getOne($id);
    CartHelper::remove($product);
    }
    $data = array('cart' => CartHelper::list());
    $this->render('index', $data);

  }

  public function error()
  {
    $this->render('error');
  }
}
?>