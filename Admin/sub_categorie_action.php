<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$c_id=$_POST['c_id'];
$Sub_Category=$_POST['sub_categorie'];

global $con;
$sql="INSERT INTO sub_categorie(c_id,sub_category) VALUES ('$c_id','$Sub_Category')";
$result=mysqli_query($con,$sql);
if($result)
{
	
	echo "<script>alert('sub-Categories data added successfully');window.location.href='sub_categorie_add.php';</script>";
}
else{
	echo"<script>alert('sub-Categories data added unsuccessfully');window.location.href='dashbord.php';</script>";
}
}

?>