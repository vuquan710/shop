<?php
class Product
{
  public $id;
  public $category_id;
  public $product_name;
  public $price;

  function __construct($id, $title, $content)
  {
    $this->id = $id;
    $this->category_id = $category_id;
    $this->product_name = $product_name;
    $this->price = $price;
  }

  static function all()
  {
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM products');
    return $req->fetchAll();
  }

  static function getOne($id)
  {
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM products WHERE id = '$id'");
    return $req->fetch();
  }
}
?>