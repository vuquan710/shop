<?php
require_once('controllers/base_controller.php');
require_once('models/products.php');
class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $products = Product::all();
    $data = array('products' => $products);
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}
?>