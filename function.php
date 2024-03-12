<?php
function alldata($id){
	global $con;
	$sql="SELECT * FROM product WHERE Id='".$id."'";
	$result=mysqli_query($con,$sql);
	if($result){
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

<!--main slider function-->

<?php
function getAllSlider(){
	
  global $con;
  $sql="SELECT * FROM slider WHERE status=1 ORDER BY id DESC";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{
   return false;
  }
}

#OwlCarauselfunction

function getOwlslider(){
	global $con;
	$sql="SELECT * FROM owl_slide WHERE staus=1 ORDER BY id DESC";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type first-->
<?php
function latestproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='latest'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type second-->
<?php
function popularproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='popular'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type Third-->
<?php
function brandproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='brand'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type fourth-->
<?php
function collectionproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='collection'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type Third-->
<?php
function specialproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='special'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--shoes for boys-->
<?php
function collectproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='shoes'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--product type Third-->
<?php
function uniqueproduct()
{
	global $con;
	$sql="SELECT * FROM product WHERE type='unique'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--inner section of product-->
<?php
function product_inner($id)
{
    global $con;
    $sql="SELECT * FROM product WHERE id='".$id."'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}

?>

<!--collection page-->
<?php
function product_collection_girl()
{
    global $con;
    $sql="SELECT * FROM product WHERE type='product_collection_girl'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}
?>

<?php
function product_collection_men()
{
    global $con;
    $sql="SELECT * FROM product WHERE type='product_collection_man'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}
?>

<?php
function product_collection_shoes()
{
    global $con;
    $sql="SELECT * FROM product WHERE type='product_collection_shoes'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}
?>

<!--special product of owl carausel-->
<?php
function specialOwlslider(){
	global $con;
	$sql="SELECT * FROM owl_newslide";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
	else{
		return false;
	}
}

#Advatisement of products
function Advatisement()
{
    global $con;
    $sql="SELECT * FROM product WHERE type='Advatisements'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}
?>

<!--wishlist-->
<?php
function wishlist_item()
{
    global $con;
    $sql="SELECT * FROM wishlist";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldata=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else
    {
        return false;
}
}

?>

<!--more image-->
<?php
function product_more_image($p_id)
  {
     global $con;
     $sql="SELECT * from product_more WHERE product_id='".$p_id."'";
      $query=mysqli_query($con,$sql);
  $record=array();
  while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;
  }
  if($record)
  {
    return $record;
  }
  else
  {
    return false;
}
}
?>

<!--wishlist count-->
<?php 
function countwhish($uid){
   global $con;

   $sql="SELECT * FROM wishlist WHERE user_id='".$uid."' AND status=1";
   $quary=mysqli_query($con,$sql);
   $count=mysqli_num_rows($quary);
   if($count){
       return $count;
   }
   else{
       // return false;
}
}
?>

<!--addtocart count-->
<?php 
function countaddtocart($uid){
   global $con;

  $sql="SELECT * FROM addtocart WHERE user_id='".$uid."' AND status=1";
   $quary=mysqli_query($con,$sql);
   $count=mysqli_num_rows($quary);
   if($count){
       return $count;
   }
   else{
//       return false;
 }
}
?>

<!--product show this type of image-->
<?php
function productshows($type){
	global $con;
	$sql="SELECT * FROM product WHERE type='".$type."'";
	$result=mysqli_query($con,$sql);
	if($result){
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

<!--feedback-->
<?php
function feedbacknote(){
	global $con;
	$sql="SELECT * FROM feedback";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	$alldata=array();
		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		if($query)
		{
		return $alldata;
	}
	else{
		return false;
	}
}
?>

<!--filter-->
<?php
function displayproductWithFitter($orderby){
    global $con;
    $record=array();
    $sql="SELECT * FROM product ORDER BY Actual_price ".$orderby;
    $query=mysqli_query($con,$sql);
    while($rec=mysqli_fetch_array($query)){
        $record[]=$rec;
    }
    if($record>0){
        return $record;
    }
    else{
        return false;
}
}
?>

<!--product filter-->
<?php
function allproductfilter($id){
	global $con;
    $record=array();
    $sql="SELECT * FROM sub_categorie WHERE c_id='".$id."'";
    $query=mysqli_query($con,$sql);
    while($rec=mysqli_fetch_array($query)){
        $record[]=$rec;
    }
    if($record>0){
        return $record;
    }
    else{
        return false;
}
}
?>

<!--order user details-->
<?php
function delivary_address($id){
	global $con;
	$sql="SELECT * FROM delivary_address WHERE customer_id ='".$id."'";
	$query=mysqli_query($con,$sql);
	while($rec=mysqli_fetch_assoc($query))
	{
		$alldata[]=$rec;
	}
	if($alldata){
        return $alldata;
    }
    else{
    return false;
}
}
?>

<!--payment-->
<?php
function payment()
{
    global $con;
    $sql="SELECT * FROM payment";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow){
		$alldatas=array();

		while($data=mysqli_fetch_assoc($query)){
			$alldatas[]=$data;
		}
		return $alldatas;
	}
    else
    {
        return false;
}
}
?>

<!--All products-->
<?php
function allproducts($Id){
	global $con;
	$sql="SELECT * FROM product WHERE Id ='".$Id."'";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	$alldata=array();
		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		if($query)
		{
		return $alldata;
	}
	else{
		return false;
	}
}
?>


<?php
// function ordershows($id){
// 	global $con;
// 	//$sql="SELECT * FROM order_product WHERE id ='".$id."'";
// 	$sql="SELECT product.Name,product.Actual_Price,product.Discount,product.Image,order_product.id,order_product.payment_type,order_product.Size,order_product.order_date FROM product INNER JOIN order_product ON product.id=order_product.id";
// 	$query=mysqli_query($con,$sql);
// 	$norow=mysqli_num_rows($query);
// 	$alldata=array();
// 		while($data=mysqli_fetch_assoc($query)){
// 			$alldata[]=$data;
// 		}
// 		if($query)
// 		{
// 		return $alldata;
// 	}
// 	else{
// 		return false;
// 	}
// }
?>


<!--order delete-->
<?php
function deleteorder($id)
{
    global $con;
    $sql="DELETE FROM order_product WHERE id='".$id."'";
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
function ordershows($id)
{
	global $con;
	$sql="SELECT * FROM order_product WHERE userid = '".$id."'";
	$query=mysqli_query($con,$sql);
	$alldata=array();
		while($data=mysqli_fetch_assoc($query)){
			$alldata[]=$data;
		}
		if($query)
		{
		return $alldata;
	}
	else{
		return false;
	}

}
?>

<!--customer data-->
<?php
function customerdetails($id){
	global $con;
	$sql="SELECT * FROM customers WHERE id='".$id."'";
	$result=mysqli_query($con,$sql);
	if($result){
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