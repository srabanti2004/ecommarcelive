
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deleteowlslider($id);
if($call)
{
    echo "<script> alert('your Slider data will deleted');
    window.location.href='owl_slide.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>