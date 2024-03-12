
<?php
include('header.php');
?>

  
<div class="container mt-5">
<div class="row m-0 p-0 order_show">
  <?php
  $orderdata=ordershows($_SESSION['userid']);
    foreach($orderdata as $prd_id)
      {
        $p_id=$prd_id['p_id'];
        $call=product_inner($p_id);
        foreach($call as $val)
        {
          ?>
          
  <div class="col-md-6 mb-3">
    <div class="card">
      <div class="card-body order_card">
       <div class="wish_image">
        <img src="<?php  echo 'assets/products/'.$val['Image'];?>" class="wishlist_cover_img">
       </div>
       <div class="wish_item mt-4 ml-3">
        <h5><b> MINIMAL WOMAN COLLECTION </b></h5>
        <h5 class="text-warning">Light Grey Top For Woman</h5>
        <p><b>SIZE:<?php echo $val['Size'];?></b> </p>
        <p><b>Payment Type:</b><?php echo $prd_id['payment_type'];?></p>
        <h5>Price: <i class="fa fa-inr" aria-hidden="true"></i><?php echo $val['Actual_Price'];?></h5>
        <h5>Discount: <i class="fa fa-inr" aria-hidden="true"></i><?php echo $val['Discount'];?></h5>
        <p class="text-success">Order Date: <b><?php echo $prd_id['order_date'];?></b></p>
       </div>
         <a href="order_delete.php?uid=<?php echo $prd_id['id'];?>"><button class="bg-danger p-3 border-0 w-75 mx-auto mb-3 text-light mt-3 mx-auto">Order Cancel</button></a>
      </div>

    </div>
         
    </div>
          <?php
      }
      } 
      ?>
</div>
</div>

