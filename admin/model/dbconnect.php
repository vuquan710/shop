<?php
class dbconnect{
    public function connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $db = 'shop';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}