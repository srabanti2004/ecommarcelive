
<!-- categorie value -->
<?php
function getAllCatagory(){
	global $con;
	$sql="SELECT * FROM categorie";
	$result=mysqli_query($con,$sql);
	$row=mysqli_num_rows($result);
	if($row){
		$alldata=array();
		while($data=mysqli_fetch_assoc($result)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else{
        return false;
}
}
?>

<!--product delete-->
<?php
function deleteProduct($id)
{
    global $con;
    $sql="DELETE FROM product WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

<!--wishlist product delete-->
<?php
function deletewishlist($id)
{
    global $con;
    $sql="DELETE FROM wishlist WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
        return false;
}
}

?>

<!--addtocart product delete-->
<?php
function deleteaddtocart($id)
{
    global $con;
    $sql="DELETE FROM addtocart WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
        return false;
}
}
?>

<!--Customer delete-->
<?php
function deletecustomer($id)
{
    global $con;
    $sql="DELETE FROM customers WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>


<!--slider delete-->
<?php
function deleteslider($id)
{
    global $con;
    $sql="DELETE FROM slider WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

<!--owlslider delete-->
<?php
function deleteowlslider($id)
{
    global $con;
    $sql="DELETE FROM owl_slide WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>


<!--special owl product delete-->
<?php
function deletespecialowlproduct($id)
{
    global $con;
    $sql="DELETE FROM owl_newslide WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

<!--subcategorie delete-->
<?php
function deletesubcategorie($id)
{
    global $con;
    $sql="DELETE FROM sub_categorie WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

<!--subcategorie delete-->
<?php
function deletecategorie($id)
{
    global $con;
    $sql="DELETE FROM categorie WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>
<?php
function getSubcategoriWithCatagori($id)
{
    global $con;
    $record = array();
    $sql="SELECT * FROM sub_categorie WHERE c_id='".$id."'";
    $query_one=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query_one);
    while($rec = mysqli_fetch_array($query_one))
    {
        $record[]=$rec;
    }
    if($record>0)
    {
        return $record;
    }
    else{
        return false;
}
}
?>

<!--delivary address-->
<?php 
function deletedelivaryaddress($id){
   global $con;
    $sql="DELETE FROM delivary_address WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

<!--order product delete-->
<?php
function deleteordersproduct($id)
{
    global $con;
    $sql="DELETE FROM order_product WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
?>

