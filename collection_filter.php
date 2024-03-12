<?php

include('datastore.php');
session_start();
include ('function.php');
$order=$_POST['ordrer'];
if($order=='price--low to high'){
    $order='ASC';
}
else{
    $order='DESC';
}
$call=displayproductWithFitter($order);
?> 
<div class="row mt-5" id="fashion_item_row">

<?php
      foreach($call as $collection_girl_item)
      {
          ?>
  <div class="col-md-4 mb-3">
    <div class="collection_img">
      <div class="overflow" data-price="">
<a href="inner_page.php?uid=<?php echo $collection_girl_item['id']; ?>"><img src="<?php echo 'assets/products/'.$collection_girl_item['Image'];?>"></a>
  </div>
  <div class="collection_text text-center mt-2">
    <h6><?php echo $collection_girl_item['Description'];?> </h6>
    <h5 class="text-danger"><b><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $collection_girl_item['Actual_Price'];?></b>
    <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $collection_girl_item['Discount'];?></strike></h5>
  </div>
    </div>
</div>
  <?php
}
 ?>
</div>