<?php
include ('datastore.php');

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$text=$_POST['texts'];
$gender=$_POST['gender'];


$sql="INSERT INTO customers(fname,lname,password,email,phone,texts,gender) VALUES ('$fname','$lname','$password','$email','$phone','$text','$gender')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script>alert('your register successfully');window.location.href='index.php';</script>";
}
else{
	echo"<script>alert('Register unsuccessfully');window.location.href='forms.php';</script>";
}
}


?>