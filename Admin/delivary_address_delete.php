
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deletedelivaryaddress($id);
if($call)
{
    echo "<script> alert('your delivary address deleted');
    window.location.href='delivary_address_table.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>