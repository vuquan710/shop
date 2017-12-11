<?php
include 'dbconnect.php';
class Model extends dbconnect {

    private $conn; 
    public function __construct() { 
     $dbcon = new parent(); 
     $this->conn = $dbcon->connect();
   }
   public function getlogin()
   {
  // here goes some hardcoded values to simulate the database
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

            if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
                return 'login';
            }
            else{
                return 'invalid user';
            }
        }
    }

    public function getProducts()  
    {  
      $sql = "SELECT * FROM Products";
      $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
      $row = $result->fetch_assoc();
      return $row;
    }

    public function getCategories()  
    {  
      $sql = "SELECT * FROM Categories";
      $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
     while($row = $result->fetch_assoc())
        {
            $rows[] = $row;
        }
     return $rows;
    }

    public function getCateById($id) {
      $sql = "SELECT * FROM Categories WHERE id = $id";
      $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
      $row = $result->fetch_assoc();
      return $row;
    }



}

?>