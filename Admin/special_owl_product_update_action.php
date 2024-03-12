<?php
include ('datastore.php');
$id=$_POST['u_id'];

$status=$_POST['status'];
$type=$_POST['type'];
$Description=$_POST['Description'];
$old_img=$_POST['old_image'];

$image_name=$_FILES['image']['name'];
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_location='../assets/owlslider/';

$org_img='';
if($image_name !='')
{
	$org_img=$image_name;
}
else{
	$org_img=$old_img;
}


global $con;
$sql="UPDATE owl_newslide SET status= '".$status."',type= '".$type."',Description= '".$Description."',image='".$org_img."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	if($image_name != '')
	{
	unlink($image_location.$old_img);
	move_uploaded_file($img_tmp_name,$image_location.$org_img);
   }
	 echo "<script>alert('slider added successfully');window.location.href='special_owlproducts.php';
	 </script>";
}
else{
	echo"<script>alert('slider added unsuccessfully');</script>";
}

?>