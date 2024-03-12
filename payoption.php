<?php
include('header.php');

$id=$_GET['id'];
?>

<?php
if(isset($_SESSION['email'])){
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM payment WHERE user_id= '".$user_id."'";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query)){
    $record[]=$rec;
  }
}
?>
<!--order-form-->
<section class="">
  <div class="range_order mx-auto">
    <div class="form_nav">
      <div class="range_div mx-auto">
      <div class="circle_range1 backgrounds ml-2 text-light"><h6 class="text-center mt-1"><b>1</b></h6>
        <a href="address.php"><p class="text-dark">Address</p></a>
      </div>
      <div class="underline_range mt-4"></div>
     
      <div class="circle_range2 backgrounds mt-4 text-light"><h6 class="text-center mt-1"><b>2</b></h6>
      <a href="order_confirm.php"><p class="text-dark">Order</p></a>
      </div>
     <div class="underline_range mt-4"></div>
      <div class="circle_range3 bg-warning mt-4 text-light"><h6 class="text-center mt-1"><b>3</b></h6>
      <a href="payoption.php"><p class="text-dark">Payment</p></a>
      </div>
      </div>
    </div>
  </div>
</section>

<!--payment process-->
<section class="over">
<div class="container mt-5">
<div class="payment_process mx-auto border">
<div class="row">

<div class="col-md-12">
  <button class="accordion accro_button border-0"><h5 class="text-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  UPI(G pay/PhonePe/Paytm) </h5><i class="fa fa-plus accro_plus text-primary" aria-hidden="true"></i></button>
<div class="panel">
    <h6 class="text-danger mt-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Enter UPI ID <i class="fa fa-plus" aria-hidden="true"></i></h6>
</div>
<div class="mb-2"></div>
</div>

<div class="col-md-12">
  <button class="accordion accro_button border-0"><h5 class="text-primary"><i class="fa fa-credit-card" aria-hidden="true"></i>  Debit/Credit Card </h5><i class="fa fa-plus accro_plus text-primary" aria-hidden="true"></i></button>
<div class="panel">
    
  <h6 class="text-danger mt-2"><i class="fa fa-credit-card text-primary" aria-hidden="true"></i> ADD NEW CARD <i class="fa fa-plus" aria-hidden="true"></i></h6></div>
<div class="mb-2"></div>
</div>

<div class="col-md-12">
  <button class="accordion accro_button border-0"><h5 class="text-primary"><i class="fa fa-money" aria-hidden="true"></i>  Cash Delivery</h5><i class="fa fa-plus accro_plus text-primary" aria-hidden="true"></i></button>
<div class="panel">
  <?php
    // $alldata=payment();
    //   if(!empty($alldata)){
    //   foreach($alldata as $paymentitem)
    //   {
          ?>
   <form action="payment_action.php" method="post" id="payment_form" onsubmit="return payment_option();">
        <input type="radio" name="payment" id="payment" value="cash">&nbsp;

         <input type="hidden" value="<?php echo $paymentitem['id'];?>" name="id">
        <input type="hidden" value="<?php  echo $_SESSION['userid'];?>" name="user_id">
<?php
//  }
// }
?>

   <h6 class="text-danger"><i class="fa fa-money" aria-hidden="true"></i> Payment to CASH</h6>
 
</div>
<div class="mb-2"></div>
</div>
</div>
<div class="row m-0 p-0">
  <div class="col-md-12  light_background">
<div class="reseling_order">
  <div class="row">
    <div class="col-md-6">
  <h6 class="mt-3 text-danger">Reselling The Order?</h6>
  <p>Click on 'yes' to add Final Price</p>
</div>
<div class="col-md-6 p-0">
  <div class="confirm_button mt-4">
    <button class="btn btn bg-light rounded-pill text-danger"><b>YES</b></button>
    <button class="btn btn bg-light rounded-pill text-danger"><b>NO</b></button>
  </div>
  </div>
  </div>
</div> 
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="payment1">
      <h5 class="ml-3 text-dark"><i class="fa fa-inr" aria-hidden="true"></i>231</h5>
      <h6 class="text-danger ml-3">VIEW PRICE DETAILS</h6>
    </div>
    <div class="payment1">
       <a href="order.php?id=<?php echo $data['id'];?>&user_id=<?php echo $_SESSION['userid'];?>"><button type="submit"class="btn btn rounded text-light bg-danger w-75 p-3 place_button mt-4" id="payment" name="submit">Order Now</button></a>

<script type="text/javascript">
    $(document).ready (function (){  
 $('#payment_form').submit (function (e) {  
    e.preventDefault();  

    var payment=$('#payment').val();

    if($('input[name=payment]:checked').length<=0){

      alert("Check your payment option");
    }
    
    else{
      alert("Successfull");
    }
  });
});

</script>
     </div>
   </div>
 </div>
</form>
   </div>
 </div>
</div>
</div>
<div class="mb-4"></div>
</div>
</section>

 <?php
 include('footer.php');
?>