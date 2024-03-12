<?php
$con;
function connection(){
	global $con;
	$hostname="localhost";
	$username="root";
	$password="";
	$db="ecommerce";
	$con=mysqli_connect($hostname,$username,$password,$db);
	// if($con)
	// {
	// 	echo "success";
	// }
	// else{
	// 	echo "Not success";
	// }

}
connection();
?>