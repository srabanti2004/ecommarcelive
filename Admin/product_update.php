<?php
include ('datastore.php');
$id=$_POST['uid'];
$Catagory=$_POST['Catagory'];
$Sub_Category=$_POST['Sub_Category'];
$Name=$_POST['Name'];
$Actual_Price=$_POST['Actual_Price'];
$Discount=$_POST['Discount'];
$Discount_Price=$_POST['Discount_Price'];
$Size=$_POST['Size'];
$type=$_POST['type'];
$old_img=$_POST['old_img'];

$Image_name=$_FILES['Image']['name'];
$Img_tmp_name=$_FILES['Image']['tmp_name'];
$Image_location='../assets/products/';
$product_subimage=$_FILES['product_sub_image'];
$Description=$_POST['Description'];
$org_img='';
if($Image_name != '')
{
	$org_img=$Image_name;
}
else{
	$org_img=$old_img;
}


global $con;
$sql="UPDATE product SET Catagory = '".$Catagory."',Sub_Category='".$Sub_Category."',Name='".$Name."',Description='".$Description."',Actual_Price='".$Actual_Price."',Discount ='".$Discount."',Discount_Price = '".$Discount_Price."',Image='".$org_img."',type='".$type."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	if($Image_name != '')
	{
		unlink($Image_location.$old_img);
	move_uploaded_file($Img_tmp_name,$Image_location.$org_img);
	$product_id=mysqli_insert_id($con);

	
	foreach ($product_subimage['name'] as $key => $value) {
		$img_more_name=$product_subimage['name'][$key];
		$img_more_tmp_name=$product_subimage['tmp_name'][$key];
		$image_more_location='assets/more_image/'.time().$img_more_name;
		$sql1="INSERT INTO product_more(product_id,more_image) VALUES('".$product_id."','".$image_more_location."')";
		$result1=mysqli_query($con,$sql1);
		// echo $sql1;
   }
	echo "<script>alert('product data added successfully');
window.location.href='product.php';
	</script>";
}
else{
	echo"<script>alert('product data added unsuccessfully');window.location.href='forms.php';</script>";
}
}
?>