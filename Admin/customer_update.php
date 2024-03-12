<?php
include ('datastore.php');
$id=$_POST['u_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$texts=$_POST['texts'];
$gender=$_POST['gender'];

global $con;
$sql="UPDATE customers SET fname = '".$fname."',lname='".$lname."',email='".$email."',password='".$password."',phone='".$phone."',texts ='".$texts."',gender = '".$gender."'WHERE id=".$id;
 $result=mysqli_query($con,$sql);
// $update=mysqli_num_rows($result);
if($result)
{
echo "<script>alert('customer updatesuccessfully');window.location.href='customer.php';
	</script>";
}

else{
	echo"<script>alert('customer update  unsuccessfully');window.location.href='customer.php';</script>";
}

?>