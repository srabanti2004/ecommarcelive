<?php
include('datastore.php');

global $con;

$user_id=$_POST['userid'];
$p_id=$_POST['Id'];
$prd_id=array();
$prd_id=explode(',',$p_id);
$Actual_Price=$_POST['Actual_Price'];
$size=$_POST['size'];
$delivary_date=$_POST['delivary_date'];
$order_date=date('Y-M-D');
$payment_type=$_POST['payment_type'];
$cancel_status=$_POST['cancel_status'];

foreach($prd_id as $key => $val)
{
$sql="INSERT INTO order_product(userid,p_id,Actual_Price,Size,delivary_date,order_date,payment_type,cancel_status) VALUES ('$user_id','$val','$Actual_Price','$size','$delivary_date','$order_date','$payment_type','$cancel_status')";
$query=mysqli_query($con,$sql);
}
if($query){
	echo "<script>window.location.href='order.php';</script>";
}
else
{
	echo  "false";
}
// }

?>
