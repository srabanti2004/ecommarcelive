<?php
include('datastore.php');
?>
<?php
if(isset($_POST['buy_now'])){
	$_Size=$_POST['Size'];
	$p_id=$_POST['p_id'];
	$sql="INSERT INTO size(Size,p_id) VALUES ('$Size','$p_id')";
	$query=mysqli_query($con,$sql);
	if($query){
		echo "<script>window.location.href='addtocart.php';</script>";
	}
	else{
		echo "<script>window.location.href='addtocart.php';</script>";
	}
}

if(isset($_POST['addtocart'])){
	$Size=$_POST['Size'];
	$p_id=$_POST['p_id'];
	$sql="INSERT INTO size(Size,p_id) VALUES ('$Size','$p_id')";
	$query=mysqli_query($con,$sql);
	if($query){
		echo "<script>window.location.href='addtocart.php';</script>";
	}
	else{
		echo "<script>window.location.href='addtocart.php';</script>";
	}
}
?>