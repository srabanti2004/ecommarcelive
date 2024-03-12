<?php
include ('datastore.php');
$id=$_POST['u_id'];
$prd_id=$_POST['prd_id'];

$prd_id=explode(',',$prd_id);
$name=$_POST['name'];
$phone=$_POST['phone'];
$pin=$_POST['pin'];
$locality=$_POST['locality'];
$city=$_POST['city'];
$address=$_POST['address'];
$road=$_POST['road'];
$state=$_POST['state'];


global $con;
$sql="UPDATE delivary_address SET name='".$name."', phone='".$phone."', pin='".$pin."',locality='".$locality."',city='".$city."',address='".$address."',road='".$road."',state='".$state."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	  echo "<script>alert('Delivary address added successfully');window.location.href='order_confirm.php?prd_id=$prd_id';
	  </script>";
}
else{
	echo"<script>alert('Delivary address added unsuccessfully');</script>";
}

?>