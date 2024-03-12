
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deletecategorie($id);
if($call)
{
    echo "<script> alert('your data will deleted');
    window.location.href='manage_categorie.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>