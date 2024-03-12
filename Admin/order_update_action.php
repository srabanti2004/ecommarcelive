<?php
include ('datastore.php');
$id=$_POST['u_id'];

$order_date=$_POST['order_date'];
$Size=$_POST['Size'];
$payment_type=$_POST['payment_type'];
$cancel_status=$_POST['cancel_status'];
$Actual_Price=$_POST['Actual_Price'];

global $con;
$sql="UPDATE order_product SET order_date='".$order_date."', Size='".$Size."', payment_type='".$payment_type."',cancel_status='".$cancel_status."',Actual_Price='".$Actual_Price."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	  echo "<script>alert('order update successfully');window.location.href='orders.php';
	  </script>";
}
else{
	echo"<script>alert('order update unsuccessfully');</script>";
}

?>