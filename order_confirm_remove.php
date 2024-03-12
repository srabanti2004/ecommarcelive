
<?php 
include('Admin/function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['id']; 
$call=deleteorder_confirmation($id);
if($call)
{
    echo "<script>alert('your  will remove this product');
     window.location.href='order_confirm.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>
