
<?php 
include('Admin/function.php');
?>
<?php 
include('datastore.php');
?>
<?php
$id=$_GET['id']; 
$call=deleteaddtocart($id);
if($call)
{
    echo "<script>confirm('your  will remove this addto cart product');
     window.location.href='addtocart.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>
