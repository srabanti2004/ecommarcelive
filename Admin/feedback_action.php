<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$description=$_POST['description'];

$image_name=$_FILES['image']['name']; 
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_location='../assets/feedback/';

global $con;
$sql="INSERT INTO feedback(name,description,image) VALUES ('$name','$description','$image_name')";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($img_tmp_name,$image_location.$image_name);
	echo "<script>alert('successfully feedback upload');window.location.href='feedback_table.php';</script>";
}
else{
	echo"<script>alert('feedback upload unsuccessfully');window.location.href='feedback_table.php';</script>";
}
}

?>