<?php
include_once("model/Model.php");

class Controller {
	public $model;

	public function __construct()  
	{  
		$this->model = new Model();

	} 

	public function login()
	{
		$result = $this->model->getlogin();     

		if($result == 'login')
		{
			$categories = $this->model->getCategories();
			header('location:category.php');
		}
		else
		{
			include 'view/login.php';
		}
	}

	public function edit(){
		$id = $_REQUEST['id'];
		$result = $this->model->getCateById($id);
		include 'edit.php';
	}
}

?>