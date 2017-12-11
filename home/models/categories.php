<?php
class Category
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
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM categories');
    return $req->fetchAll();
  }
}
?>