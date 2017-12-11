<?php
require_once('controllers/base_controller.php');
require_once('models/products.php');

class ProductsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'products';
  }

  public function index()
  {
    $id =  $_GET['id'];
    $product = Product::getOne($id);
    $data = array('product' => $product);
    $this->render('index', $data);
  }

}
?>