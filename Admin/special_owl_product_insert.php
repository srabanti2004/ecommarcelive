<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$status=$_POST['status'];
$Description=$_POST['Description'];
$type=$_POST['type'];

$image_name=$_FILES['image']['name']; 
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_location='../assets/owlslider/';

global $con;
$sql="INSERT INTO owl_newslide(status,type,Description,image) VALUES ('$status','$type','$Description','$image_name')";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($img_tmp_name,$image_location.$image_name);
	echo "<script>alert('collection product data added successfully');window.location.href='special_owlproducts.php';</script>";
}
else{
	echo"<script>alert('sub-Categories data added unsuccessfully');</script>";
}
}

?>