<?php
session_start();
$conn = mysqli_connect('HTADFpjYkD')

if(!$conn){
	echo 'Connection error: ' . mysqli_connect_error();
}

if(isset($_POST["save"]))
{
	$id = $_POST[];

	$name = $_POST["name"];
	$type = $_POST["type"];
	$price = $_POST["price"];
	$count = $_POST["count"];
	$description = $_POST["description"];

	$query = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);


	if($query_run)
	{
		$_SESSION['status'] = "Updated Successfully";
		header("Location: backstore.php")
	}
	else{
		$_SESSION['status'] = "Not Updated";
		header("Location: backstore.php")
	}
}

?>