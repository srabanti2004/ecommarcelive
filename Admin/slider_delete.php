
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deleteslider($id);
if($call)
{
    echo "<script> alert('your Slider data will deleted');
    window.location.href='slider.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>