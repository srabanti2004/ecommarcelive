
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deleteordersproduct($id);
if($call)
{
     echo "<script> alert('your order will deleted');
     window.location.href='orders.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>