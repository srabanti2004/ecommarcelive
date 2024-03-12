<?php 
include('datastore.php');
?>
<?php
if(isset($_POST['submit']))
{
$id=$_POST['customer_id'];
$prd_id=$_POST['prd_id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$pin=$_POST['pin'];
$locality=$_POST['locality'];
$city=$_POST['city'];
$address=$_POST['address'];
$road=$_POST['road'];
$state=$_POST['state'];
$date=$_POST['date'];

global $con;
$sql="INSERT INTO delivary_address(customer_id,name,phone,pin,locality,city,address,road,state,date) VALUES ('$id','$name','$phone','$pin','$locality','$city','$address','$road','$state','$date')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script>alert('Your Address save and Deliver successfully');window.location.href='order_confirm.php?prd_id=$prd_id';</script>";
}
else{
	echo"<script>alert('Something went wrong! Please try again');</script>";
}
}

?>