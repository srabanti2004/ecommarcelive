<?php
include ('datastore.php');
$id=$_POST['u_id'];

$type=$_POST['type'];
$Discount_Price=$_POST['Discount_Price'];
$Discount=$_POST['Discount'];
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
$sql="UPDATE addtocart SET type= '".$type."',Discount_Price= '".$Discount_Price."',Discount= '".$Discount."',Description= '".$Description."',image='".$org_img."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	if($image_name != '')
	{
	unlink($image_location.$old_img);
	move_uploaded_file($img_tmp_name,$image_location.$org_img);
   }
	 echo "<script>alert('save for later successfully');window.location.href='addtocart.php';
	 </script>";
}
else{
	echo"<script>alert('slider added unsuccessfully');</script>";
}
?>