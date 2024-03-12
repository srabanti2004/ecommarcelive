
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deletespecialowlproduct($id);
if($call)
{
    echo "<script> alert('your Slider data will deleted');
    window.location.href='special_owlproducts.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>