
<?php 
include('Admin/function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['id']; 
$call=deletewishlist($id);
if($call)
{
    echo "<script>alert('your  will remove this wishlist');
     window.location.href='index.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>