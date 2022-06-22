<?php
include("connection.php");

if(isset($_REQUEST['sub'])){
   $name=$_REQUEST['name'];
   $cat=$_REQUEST['cat'];
   $brand=$_REQUEST['brand'];
    $price=$_REQUEST['price'];
    $editing_id=$_REQUEST['editing_id'];

    $upquery="UPDATE product SET name='$name',cat='$cat',brand='$brand',price='$price' where id=$editing_id";

    $run_query=mysqli_query($link,$upquery);


    if($run_query){
      header("location: pl.php?edited");
    }
}
?>
 