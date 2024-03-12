<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO entey(name,email,password) VALUES ('$name','$email','$password')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script>alert('student data added successfully');window.location.href='login.php';</script>";
}
else{
	echo"<script>alert('student data added unsuccessfully');window.location.href='forms.php';</script>";
}
}
?>