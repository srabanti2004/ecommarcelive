
<?php
include ('datastore.php');
$id=$_GET['u_id'];

global $con;
$sql="UPDATE addtocart SET status = 0 WHERE id ='".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	  echo "<script>alert('save for later successfully');window.location.href='savefor_later_product.php';
	  </script>";
}
else{
	echo"<script>alert('slider added unsuccessfully');</script>";
}

?>