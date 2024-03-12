
<?php
include ('datastore.php');
if(isset($_POST['submit']))
{
$Catagory=$_POST['Catagory'];
$Sub_Category=$_POST['Sub_Category'];
$Name=$_POST['Name'];
$Actual_Price=$_POST['Actual_Price'];
$Discount=$_POST['Discount'];
$Discount_Price=$_POST['Discount_Price'];
$Size=$_POST['Size'];
$chk="";
$type=$_POST['type'];

$Image_name=$_FILES['Image']['name']; 
$Img_tmp_name=$_FILES['Image']['tmp_name'];
$Image_location='../assets/products/';
$product_subimage=$_FILES['product_sub_image'];
$Description=$_POST['Description'];

global $con;
foreach($Size as $chk1)  
   {  
      $chk .= $chk1.",";
}
$sql="INSERT INTO product(Catagory,Sub_Category,Name,Actual_Price,Discount,Discount_Price,Size,type,Image,Description) VALUES ('$Catagory','$Sub_Category','$Name','$Actual_Price','$Discount','$Discount_Price','$chk','$type','$Image_name','$Description')";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($Img_tmp_name,$Image_location.$Image_name);
	$product_id=mysqli_insert_id($con);

	
	foreach ($product_subimage['name'] as $key => $value) {
		$img_more_name=$product_subimage['name'][$key];
		$img_more_tmp_name=$product_subimage['tmp_name'][$key];
		$image_more_location='assets/more_image/'.time().$img_more_name;
		$sql1="INSERT INTO product_more(product_id,more_image) VALUES('".$product_id."','".$image_more_location."')";
		$result1=mysqli_query($con,$sql1);
		// echo $sql1;
		if($result1){
			move_uploaded_file($img_more_tmp_name,'../'.$image_more_location);
		}
	}
	echo "<script>alert('product data added successfully');window.location.href='product.php';</script>";
}
else{
	echo"<script>alert('Catagories data added unsuccessfully');window.location.href='product_form.php';</script>";
}
}

?>