<?php 
include('datastore.php');
$product_id=$_GET['p_id'];
$user_id=$_GET['user_id'];

$add="SELECT * FROM wishlist WHERE user_id='".$user_id."'AND product_id='".$product_id."'";
$add_count=mysqli_query($con,$add);
$product_count=mysqli_num_rows($add_count);
if($product_count){
	echo  "<script>alert('This Item Allready exits');window.location.href='wishlist.php';</script>";
}
else{
global $con;

$sql="INSERT INTO wishlist(user_id,product_id) VALUES('$user_id','$product_id')";
$query=mysqli_query($con,$sql);
if($query)
{
	echo  "<script>alert('This Item Add With Wishlist Page');window.location.href='wishlist.php';</script>";
}
else{
	echo "<script>alert('This item not add with wihlistpage');</script>";
}
}
?>