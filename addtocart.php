<?php
include('header.php');
?>
<?php
if(!isset($_SESSION['email']))
{
?>

<div class="search_option mx-auto">
    <img src="assets/img/4041.webp"class="search_loading mx-auto">
  </div>

    <div class="text-center button">
  <a href="login.php"><button class="btn btn bg-warning" style="width:140px;height:50px;position: relative;top:-90px;"><b>Login Now</b></button></a>
</div>


<?php
}
else
{
$empty=countaddtocart($_SESSION['userid']);
if($empty=='')
{
?>
  <div class="search_option mx-auto">
    <img src="assets/img/4041.webp"class="search_loading mx-auto">
  </div>
  <div class="text-center button">
  <a href="index.php"><button class="btn btn bg-warning" style="width:140px;height:50px;position: relative;top:-90px;"><b>Shopping Now</b></button></a>
  </div>
<?php
}
else{

  $user_id=$_SESSION['userid'];
  global $con;
  $record_rc=array();
  $result="SELECT * FROM addtocart WHERE user_id='".$user_id."' AND status=1";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record_rc[]=$rec;
  }
?>
<?php
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM addtocart WHERE user_id= '".$user_id."' AND  status=1";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record[]=$rec;
  }

?>

<div class="container mt-5">
<div class="row m-0 p-0">
  <?php 
 $discount_price=0;
 
 $real_price=0;
 
 // echo $total;
 ?>
  <?php
  $prd_id=array();
    foreach($record as $data){
      $id=$data['product_id'];
      $prd_id[]=$data['product_id'];
      $card_id=$data['id'];
    $record1=alldata($id);
    foreach($record1 as $addtocart)
      {
          ?>
  <div class="col-md-6 mb-3">

    <div class="card">
      <div class="card-body wish_card">
       <div class="wish_image">
       	<img src="<?php  echo 'assets/products/'.$addtocart['Image'];?>" class="wishlist_cover_img">
       </div>
       <div class="wish_item mt-4 ml-3">
       	<h5><b> MINIMAL WOMAN COLLECTION </b></h5>
       	<h5 class="text-warning">Light Grey Top For Woman</h5>
       	<p><b>SIZE:<?php echo $data['size'];?></b> </p>
       	<p><b>Discount:</b><?php echo $addtocart['Discount'];?></p>
       	<h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $addtocart['Actual_Price'];?></h5>
       	<p class="text-danger"><b><?php $addtocart['Description'];?></b></p>
       </div>
       <div class="wish_button">
        <a href="savefor_later.php?u_id=<?php echo $card_id;?>"><button class="btn btn bg-success text-light p-2 mt-3">Save For later</button></a>
       	<a href="addtocart_remove.php?id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
        
       </div>
       </div>
      </div>
    </div>
  <?php 
   $real_price=$real_price+$addtocart['Actual_Price'];
  $discount_price=$discount_price+(int)$addtocart['Discount_Price'];
}
}
$prd_id_str=implode(',',$prd_id);
 $total_profit=$real_price-$discount_price;
 $discount_parsent=round(($total_profit/$real_price)*100);
?>
  </div>
</div>

<div class="row mb-5 m-0 p-0">
 
 
  <div class="col-md-7 mx-auto">
    <div class="price_details mt-4">
      <div class="prices border p-3">
        <h5>PRICE DETAILS</h5>
      </div>
      <div class="price_items border p-3">
        <h6>Price(1Item) <i class="fa fa-inr" aria-hidden="true"></i><?php echo  $real_price;  ?> </h6>
        <h6 class="text-warning"></h6>
      </div>
      <div class="price_items border p-3">
        <h6>Discount:  <?php echo  $discount_parsent;?>%</h6>
        <h6 class="text-warning"></h6>
      </div>
      <div class="price_items border p-3">
        <h6>TOTAL PAYABLE <i class="fa fa-inr" aria-hidden="true"></i> <?php echo  $discount_price;  ?></h6>
      </div>
       <div class="price_items p-3 text-success">
      <a href="#" data-toggle="modal" data-target="#exampleModal"><button type="button" class="btn btn-warning w-100 p-2" ><b>ORDER NOW</b></button></a>
      </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel"><b>ADDRESS DELIVERY</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="order_form border">
      <div class="order-form-under mx-auto">
      <form action="delivary_address_action.php"method="post"enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-4"></div>
            <div class="input-group mb-3">
              <input type="hidden" value="<?php echo $prd_id_str; ?>" name="prd_id">
              <input type="hidden"value="<?php echo $_SESSION['userid'];?>" name="customer_id">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Username" aria-label="Name" name="name" aria-describedby="basic-addon1" id="name">
          </div>
          <div class="mb-4"></div>
          </div>

           <div class="col-md-12">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Username" aria-label="10 digit Phone no" name="phone" aria-describedby="basic-addon1" id="phone">
          </div> 
          <div class="mb-4"></div>
          </div>

           <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-thumb-tack" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="PIN Code" aria-label="Username" name="pin" aria-describedby="basic-addon1" id="pin">
          </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Locality" aria-label="Username" name="locality" aria-describedby="basic-addon1" id="locality">
          </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-12">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="City" aria-label="Address" name="city" aria-describedby="basic-addon1" id="city">
          </div>
          <div class="mb-4"></div>
          </div>

            <div class="col-md-12">
            <div class="input-group">
            <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <textarea class="form-control" name="address" aria-label="With textarea" id="address"></textarea>
            </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-road" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Road" aria-label="Address" name="road" aria-describedby="basic-addon1" id="road">
          </div>
          <div class="mb-4"></div>
          </div>

                    <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-road" aria-hidden="true"></i></span>
            <input type="date" class="form-control p-2" aria-label="Address" name="date" aria-describedby="basic-addon1" id="date">
          </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-12">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
            <select class="p-2 w-75" name="state" id="state" required>
              <option>Select State</option>
              <option>West Bengal</option>
              <option>Mursidabad</option>
              <option>Mumbai</option>
              <option>Delhi</option>
            </select>
          </div>
          <div class="mb-4"></div>
          </div>

<div class="col-md-6">
<a href="order_confirm.php?id=<?php echo $data['id'];?>&user_id=<?php echo $_SESSION['userid'];?>"><button type="submit" class="btn btn bg-warning w-100 p-2" name="submit" onclick="return validation_delivary();"> DELIVER HERE</button></a>
<div class="mb-4"></div>
</div>
        </div>
      </form>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>
</div>
<?php 
}
}
?>


<script type="text/javascript">
  function validation_delivary(){
    var name=document.getElementById('name').value;
    var phone=document.getElementById('phone').value;
    var pin=document.getElementById('pin').value;
    var locality=document.getElementById('locality').value;
    var city=document.getElementById('city').value;
    var address=document.getElementById('address').value;
    var road=document.getElementById('road').value;
     var date=document.getElementById('date').value;
    var state=document.getElementById('state').value;


    if(name==''){
      alert('enter your name');
      return false;
    }
     else if(phone==''){
      alert('enter your phone');
      return false;
    }
    else if(pin==''){
      alert('enter your pincode');
      return false;
    }
    else if(locality==''){
      alert('enter your locality');
      return false;
    }
    else if(city==''){
      alert('enter your city');
      return false;
    }
    else if(address==''){
      alert('enter your address');
      return false;
    }
    else if(road==''){
      alert('enter your road');
      return false;
    }
    else if(state==''){
      alert('enter your state');
      return false;
    }
    else{
      alert('successfully submit');
    }


  }
</script>
<?php 
include('footer.php');
?>