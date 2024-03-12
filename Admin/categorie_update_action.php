<?php
include ('datastore.php');
$id=$_POST['u_id'];

$categorie=$_POST['categorie'];

global $con;
$sql="UPDATE categorie SET categorie='".$categorie."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	  echo "<script>alert('Categorie added successfully');window.location.href='manage_categorie.php';
	  </script>";
}
else{
	echo"<script>alert('Categorie added unsuccessfully');</script>";
}

?>