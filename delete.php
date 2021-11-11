<?php

include ('db.php');

$query = "DELETE FROM customer WHERE custId = '" .$_GET["custId"]. "' ";
if(mysqli_query($dbCon, $query)){
    $msg = 3;
} else {
   $msg = 4;
}

header ("Location: index.php?msg=".$msg."");

?>