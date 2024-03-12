<?php
include('datastore.php');
$username=$_POST['email'];
$password=$_POST['password'];

global $con;
$sql="SELECT * FROM customers WHERE email='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows>0)
{
	$data=mysqli_fetch_assoc($result);
	session_start();

	$_SESSION['userid']=$data['id'];
	$_SESSION['fname']=$data['fname'];
	$_SESSION['lname']=$data['lname'];
	$_SESSION['email']=$data['email'];
	$_SESSION['phone']=$data['phone'];
	$_SESSION['texts']=$data['texts'];
	$_SESSION['gender']=$data['gender'];

	header('location:index.php');
}
else
{
	echo "<script>alert('username or password does not exist.');window.location.href='login.php';</script>";
}
?>