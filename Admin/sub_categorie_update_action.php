<?php
include ('datastore.php');
$id=$_POST['u_id'];

$c_id=$_POST['c_id'];
$Sub_Category=$_POST['Sub_Category'];

global $con;
$sql="UPDATE sub_categorie SET c_id='".$c_id."',Sub_Category= '".$Sub_Category."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	  echo "<script>alert('sub-Categorie added successfully');window.location.href='sub_categorie_add.php';
	  </script>";
}
else{
	echo"<script>alert('sub-Categorie added unsuccessfully');</script>";
}

?>