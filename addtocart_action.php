<?php 
include('datastore.php');
$product_id=$_POST['p_id'];
$user_id=$_POST['user_id'];
$size=$_POST['size'];

$add="SELECT * FROM addtocart WHERE user_id='".$user_id."'AND product_id='".$product_id."'";
$add_count=mysqli_query($con,$add);
$product_count=mysqli_num_rows($add_count);
if($product_count){
	echo  "<script>alert('This Item Allready exits');window.location.href='addtocart.php';</script>";
}
else{
	global $con;
$sql="INSERT INTO addtocart(user_id,product_id,size) VALUES('$user_id','$product_id','$size')";
$query=mysqli_query($con,$sql);

if($query)
{
	 echo  "<script>alert('This Item Add With addtocart Page');window.location.href='addtocart.php';</script>";
}
else{
	echo "<script>alert('This item not add with addtocart page');</script>";
}
}
?>