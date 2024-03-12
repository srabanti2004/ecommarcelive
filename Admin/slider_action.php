<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$type=$_POST['type'];

$image_name=$_FILES['image']['name']; 
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_location='../assets/slider/';

global $con;
$sql="INSERT INTO slider(type,image) VALUES ('$type','$image_name')";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($img_tmp_name,$image_location.$image_name);
	echo "<script>alert(' product data added successfully');window.location.href='slider.php';</script>";
}
else{
	echo"<script>alert('Catagories data added unsuccessfully');window.location.href='slider_form.php';</script>";
}
}

?>