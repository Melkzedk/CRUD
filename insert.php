<?php
if(count($_POST)>0)
{    
     include 'db.php';
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
 
     $query = "INSERT INTO customer (fname,lname,email)
     VALUES ('$fname','$lname','$email')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: index.php?msg=".$msg."");
?>