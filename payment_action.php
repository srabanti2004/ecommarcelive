<?php
include('datastore.php');
?>

<?php
if(isset($_POST['submit'])){
	$user_id=$_POST['userid'];
	$product_id=$_POST['product_id'];
	$payment=$_POST['payment'];
	$sql="INSERT INTO payment(product_id,user_id,payment) VALUES ('$product_id','$user_id','$payment')";
	$query=mysqli_query($con,$sql);
	if($query){
		// echo "<script>alert('Your Order Successfull');window.location.href='order.php';</script>";
	}
	else{
		echo "alert('order unsuccessfull')";
	}
}
?>
