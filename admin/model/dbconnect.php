<?php
class dbconnect{
    public function connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $db = '500k';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}