<?php
include('header.php');
?>

<?php
if(!isset($_SESSION['email']))
{
?>
<div class="search_option mx-auto">
    <img src="assets/img/empty1.gif"class="search_loading mx-auto">
  </div>
    <div class="text-center button">
  <a href="login.php"><button class="btn btn bg-warning" style="width:140px;height:50px;position: relative;top:-90px;"><b>Login Now</b></button></a>
</div>
<?php
?>

<?php
}
else
{
$empty=countwhish($_SESSION['userid']);
if($empty=='')
{
?>
  <div class="search_option mx-auto">
    <img src="assets/img/search1.gif"class="search_loading mx-auto">
  </div>
  <div class="text-center button">
  <button class="btn btn bg-warning" style="width:140px;height:50px;position: relative;top:-90px;"><b>Shopping Now</b></button>
</div>
<?php
}
else{

if(isset($_SESSION['email'])){
  $user_id=$_SESSION['userid'];
  global $con;
  $record_rc=array();
  $result="SELECT * FROM wishlist WHERE user_id= '".$user_id."' AND status=1";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record_rc[]=$rec;
}
}
?>
<?php
if(isset($_SESSION['email'])){
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM wishlist WHERE user_id= '".$user_id."'";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record[]=$rec;
  }
}
?>

<div class="container mt-5">
<div class="row m-0 p-0">
  <?php
    foreach($record as $data){
      $id=$data['product_id'];
      $card_id=$data['id'];
    
    $record1=alldata($id);
    foreach($record1 as $wishlist)
      {
          ?>
  <div class="col-md-6 mb-3">

    <div class="card">
      <div class="card-body wish_card">
       <div class="wish_image">
       	<img src="<?php  echo 'assets/products/'.$wishlist['Image'];?>" class="wishlist_cover_img">
       </div>

       <div class="wish_item mt-4 ml-3">
       	<h5><b> MINIMAL WOMAN COLLECTION </b></h5>
       	<h5 class="text-warning">Light Grey Top For Woman</h5>
       	<p><b>Discount:</b> <?php $wishlist['Discount'];?></p>
       	<h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $wishlist['Actual_Price'];?></h5>
       	<p class="text-danger"><b><?php $wishlist['Description'];?></b></p>
        <label for="favcolor">Select your favorite color:</label>
<input type="color" id="favcolor" value="#ff0000">

       </div>
       <div class="wish_button">
       	<a href="inner_page.php?uid=<?php echo $wishlist['id']; ?>"><button class="btn btn bg-success text-light p-2 mt-3">Buy Now</button></a>
       	<a href="wishlist_remove.php?id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
       </div>
       </div>
      </div>

    </div>
  <?php 
}
}
?>
</div>
</div>

<?php 
}
}
?>
<?php 
include('footer.php');
?>