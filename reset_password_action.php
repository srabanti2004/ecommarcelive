<?php
include ('datastore.php');
$id=$_POST['uid'];

$newpassword=$_POST['newpassword'];
global $con;
$sql="UPDATE customers SET password='".$newpassword."' WHERE id=".$id;
 $result=mysqli_query($con,$sql);

if($result)
{
echo "<script>alert('your password will be change');window.location.href='login.php';
	</script>";
}

else{
	echo"<script>alert('Enter Strong Pssword');window.location.href='reset_password.php';</script>";
}

?>