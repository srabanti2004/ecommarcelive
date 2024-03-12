<?php
include('datastore.php');
$username=$_POST['email'];
$password=$_POST['password'];

global $con;
$sql="SELECT * FROM entey WHERE email='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows)
{
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['name']=$data['name'];
	$_SESSION['email']=$data['email'];
	$_SESSION['password']=$data['password'];
	header('location:dashbord.php');
}
else
{
	echo "<script>alert('username or password does not exist.');window.location.href='login.php';</script>";
}
?>
