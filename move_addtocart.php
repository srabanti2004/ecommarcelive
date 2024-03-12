<?php 
include('datastore.php');
connection();
$id=$_GET['u_id'];
$user_id=$_GET['usr_id'];
global $con;
$sql="UPDATE addtocart SET status=1 WHERE Id='".$id."' AND status=0";
$query=mysqli_query($con,$sql);
if($query)
{
	echo "<script>window.location.href='addtocart.php?cust_id=$user_id';</script>";
}
else{
	echo "<script>alert('Something is wrong');window.location.href='addtocart.php?cust_id=$user_id';</script>";
}
?>