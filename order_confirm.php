<?php
include('header.php');
?>
<?php 
$prd_id=$_GET['prd_id'];
$empty=countaddtocart($_SESSION['userid']);
if($empty=='')
{
?>

  <div class="search_option mx-auto">
    <img src="assets/img/search1.gif"class="search_loading mx-auto">
  </div>

<?php
}
else{
  ?>
<?php
if(isset($_SESSION['email'])){
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM addtocart WHERE user_id='".$user_id."' AND status=1";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record[]=$rec;
  }
}
?>

<!--order-form-->
<section>
<form action="order_action.php" method="post">
  <input type="hidden" value="<?php echo $user_id; ?>" name="userid">
  <input type="hidden" value="<?php echo $prd_id; ?>" name="Id">
  

  <input type="hidden" value="<?php echo $delivary_date; ?>" name="delivary_date">
  <input type="hidden" value="<?php echo $order_date; ?>" name="order_date">
  <input type="hidden" value="<?php echo $cancel_status; ?>" name="cancel_status">
  <input type="hidden" value="<?php echo $delivary_id; ?>" name="delivary_id">
  

  <div class="range_order mx-auto">
    <div class="form_nav">
      <div class="range_div mx-auto">
      <div class="circle_range1 backgrounds ml-2 text-light"><h6 class="text-center mt-1"><b>1</b></h6>
        <a href="address.php"><p class="text-dark">Address</p></a>
      </div>
      <div class="underline_range mt-4"></div>
     
      <div class="circle_range2 bg-warning mt-4 text-light"><h6 class="text-center mt-1"><b>2</b></h6>
      <a href="order_confirm.php"><p class="text-dark">Order</p></a>
      </div>
      </div>
    </div>
  </div>
</section>

<!--payment process-->
<section class="over">
  <div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-12 backgrounds p-2 rounded mt-4">
    <div class="row">
          <div class="col-md-1">
        <div class="circle_range1 bg-light ml-2 mt-2"><h6 class="text-center mt-1"><b>3</b></h6></div></div>
        <div class="col-md-9 text-light">
        <h5 class="mt-2">ORDER SUMMERY</h5>
      </div>
      </div>
  </div>
  <div class="col-md-11 mx-auto light_background mt-2">
    <div class="row">
          <div class="col-md-9">
            <h6 class="mt-2">Payment Process Using SuperCoins</h6>
            <p>Balance <i class="fa fa-compass text-warning" aria-hidden="true"></i>  15</p>
            <p class="text-success">Save <i class="fa fa-inr" aria-hidden="true"></i> Using 15 Super Coins</p>
          </div>
      <div class="col-md-3">
      <button class="delivary_address rounded text-light border-0 mt-3" data-toggle="modal" data-target="#exampleModalCenter">Delivary Address</button>
      </div>
    </div>
  </div>
    <div class="payment_correction mx-auto mb-5">
    <div class="row mt-3 payment_summary mb-5">
    <?php
    foreach($record as $data){
      $id=$data['product_id'];
      $card_id=$data['id'];
    $record1=alldata($id);
    foreach($record1 as $addtocart)
      {

    ?>

    <div class="col-md-4 bg-light">
      <div class="payment_img text-center mt-2">
        <img src="<?php  echo 'assets/products/'.$addtocart['Image'];?>"class="payment_dress">

      </div>
      <div class="payment_text mt-2 w-75 mx-auto">
      </div> 
    </div>
    <div class="col-md-4 bg-light">
      <p>Beautiful dress and a good quality product, as shown as in the picture</p>
      <h5 class="text-success">
        <input type="hidden" value="<?php echo $addtocart['Actual_Price'];?>" name="Actual_Price">
        <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $addtocart['Actual_Price'];?>.00<span class="text-danger shoes_icon">  <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span></h5>
      <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $addtocart['Discount'];?></strike>
      <p class="text-success">SIZE: <?php echo $data['size'];?></p>
      <input type="hidden" value="<?php echo  $data['size'];?>" name="size">
      <button type="button" class="button_btn border-0">QTY </button>
    <div class="btn-group" role="group">
<button type="button" class="btn d-flex shadow-none border-0" aria-expanded="false">
<span class="oredr_qty-in_or_de mr-2" id="orderminus"><i class="fa fa-minus" aria-hidden="true"></i></span>
<span id="orderoutput">1</span>

<span class="oredr_qty-in_or_de ml-2" id="orderplus" ><i class="fa fa-plus" aria-hidden="true"></i></span>
</button>
</div>

    </div>
    <div class="col-md-4 bg-light">
       <div class="form-check form-switch">
<!-- Modal -->

</div>
  </div>
<?php 
 $discount_price=0;
 
 $real_price=0;
 
 // echo $total;

   $real_price=$real_price+$addtocart['Actual_Price'];
  $discount_price=$discount_price+(int)$addtocart['Discount_Price'];
}
}
 $total_profit=$real_price-$discount_price;
 $discount_parsent=round(($total_profit/$real_price)*100);
?>
  </div>
</div>
</div>

</div>
<div class="col-md-3 mt-5">
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
      <div class="col-md-12">

 
    <h5 class="text-primary"><i class="fa fa-money" aria-hidden="true"></i>  Cash Delivery</h5>
     <?php
    // $alldatas=payment();
    //   if(!empty($alldatas)){
    //  foreach($alldatas as $paymentitem)
    //  {
          ?>
        <input type="radio" name="payment_type" id="payment" value="cash" required>&nbsp;
<?php
//   }
// }
?>
  <input type="hidden" value="<?php echo $paymentitem['id'];?>" name="id">
  <input type="hidden" value="<?php  echo $_SESSION['userid'];?>" name="user_id">

<div class="mb-2"></div>
<div class="price_items p-3 text-success">
      <button type="submit" name="submit" class="btn btn-warning w-100 p-2" onsubmit="return payment_option();" ><b>ORDER NOW</b></button>
      </div>
  </div>

  <div class="mb-5"></div>
  
</div>
</section>

<?php 
}
?>

 <?php
    $alldata=delivary_address($_SESSION['userid']);
      if(!empty($alldata)){
          ?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
       foreach($alldata as $key => $orderdetails)
      { ?>
        <div>
      
          <h5>Delivery Address <?php echo ++$key;?></h5>
          <h6>Name: <?php echo $orderdetails['name'];?></h6>
        <h6>Address: <?php echo $orderdetails['address'];?></h6>
        <h6>state: <?php echo $orderdetails['state'];?></h6>
        <h6>Road: <?php echo $orderdetails['road'];?></h6>
        <h6>Phone: <?php echo $orderdetails['phone'];?></h6>
        </div>
    <?php } ?>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="delivary_address_update.php?u_id=<?php echo $orderdetails['id'];?>"><button type="button" class="btn btn-primary">Save changes</button></a>
      </div>
    </div>
  </div>
  <?php 
}
?>
</div>


<script type="text/javascript">
const plus=document.querySelector("#orderplus"),
minus=document.querySelector("#orderminus"),
num=document.querySelector("#orderoutput");
let a=1;
plus.addEventListener("click",()=>{a++;a=(a>6)?+a:a;
num.innerHTML=a;})
minus.addEventListener("click",()=>{if(a>1){a--;a=(a>6)?+a:a;
num.innerHTML=a}})
</script>

<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</section>
</form>
<?php
include('footer.php');
?>
