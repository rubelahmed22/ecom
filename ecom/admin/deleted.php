<?php
include("connection.php");


if(isset($_REQUEST['delete_id'])){
	$rcv=$_REQUEST['delete_id'];

	$dlquery="DELETE FROM product where id=$rcv";
	$run=mysqli_query($link,$dlquery);

	if($run){
		header("location: pl.php?deleted");
	}
}


?>