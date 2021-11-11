<?php
    $Servername='localhost'; // host name
    $username='root';   // database user name
    $password='';   // database password
    $dbName = "CRUD"; // database name
    $dbCon = mysqli_connect($Servername,$username,$password,"$dbName");
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysqli_error());
      }
?>