<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deleteorder($id);
if($call)
{
     echo "<script> confirm('your data will deleted');
     window.location.href='myorder.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>