<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$staus=$_POST['staus'];
$description=$_POST['description'];
$type=$_POST['type'];

$image_name=$_FILES['image']['name']; 
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_location='../assets/slider/';

global $con;
$sql="INSERT INTO owl_slide(staus,type,description,image) VALUES ('$staus','$type','$description','$image_name')";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($img_tmp_name,$image_location.$image_name);
	echo "<script>alert('collection product data added successfully');window.location.href='owl_slide.php';</script>";
}
else{
	echo"<script>alert('sub-Categories data added unsuccessfully');window.location.href='owl_slide_from.php';</script>";
}
}

?>