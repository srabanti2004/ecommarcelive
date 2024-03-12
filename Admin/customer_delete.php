
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deletecustomer($id);
if($call)
{
    echo "<script> confirm('your data will deleted');
    window.location.href='customer.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>