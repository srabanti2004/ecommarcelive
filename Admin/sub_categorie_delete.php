
<?php 
include('function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['uid']; 
$call=deletesubcategorie($id);
if($call)
{
    echo "<script> alert('your data will deleted');
    window.location.href='sub_categorie_add.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>