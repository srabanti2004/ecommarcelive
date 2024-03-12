<?php
include ('datastore.php');
if(isset($_POST['submit']))
{

$categorie=$_POST['categorie'];

global $con;
$sql="INSERT INTO categorie(categorie) VALUES ('$categorie')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script>alert('categorie added successfully');window.location.href='categorie.php';</script>";
}
else{
	echo"<script>alert('categorie data added unsuccessfully');window.location.href='categorie_add.php';</script>";
}
}

?>