<?php
include('header.php');
// include('function.php');

?>
<!--collection pages-->
<section class="over">
   <div class="container-fluid">
  <div class="row mt-1">
    <div class="col-md-3 collection_sec">
      <h3 class="text-secondary"><b>Refined By</b></h3>
      <div class="row">
        <div class="col-md-12">
           <div class="under_border mt-4 mx-auto">
        <h6 class="text-danger ml-3"><i class="fa fa-spinner " aria-hidden="true"></i>  Spin</h6></div>

         <button class="accordion accro_button border-0 bg-light mt-3"><h6 class="text-dark">Catagory </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Dress</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Shirts,Top,Frock</h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> Kurta</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Shirts</h6>
</div>
<div class="mb-2"></div>
        </div>

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Price </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Below Rs.500(3)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Rs.500-1000(124)</h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> Rs.1001-1500(398)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Rs.2001-2500(299)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Brands </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Casual(825)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Evening(124)</h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> Occasion(183)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Special Occasion(8)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Occasion </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Casual(825)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Evening(124)</h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> Occasion(183)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> Special Occasion(8)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Discount</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> 0-20%(741)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> 21-30%(269)</h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> 31-40%(263)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> 41-50%(359)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> 51-80%(854)</h6>
</div>
<div class="mb-2"></div>
       </div> 

        <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Colors</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o bg-danger " aria-hidden="true"></i> Red(14)</h6>
        <h6><i class="fa fa-square-o bg-warning" aria-hidden="true"></i> Yellow(91)/h6>
         <h6><i class="fa fa-square-o bg-success" aria-hidden="true"></i> Green(97)</h6>
        <h6><i class="fa fa-square-o bg-primary" aria-hidden="true"></i> Blue(82)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Size & Fit</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><i class="fa fa-square-o  " aria-hidden="true"></i> S(14,90)</h6>
        <h6><i class="fa fa-square-o " aria-hidden="true"></i> M(9,8541)/h6>
         <h6><i class="fa fa-square-o" aria-hidden="true"></i> L(9,07)</h6>
        <h6><i class="fa fa-square-o" aria-hidden="true"></i> XS(820)</h6>
</div>
<div class="mb-2"></div>
       </div>

       <div class="col-md-12">
        <h6 class="text-warning">More Filters...</h6>

       </div> 
      </div>
</div>


<div class="col-md-9 collection_scroll_border ">

<div class="row mt-5">
<?php
    $alldata=product_collection_men();
      if(!empty($alldata)){
      foreach($alldata as $product_collection_man)
      {
          ?>
 <div class="col-md-4 mb-3">
    <div class="collection_img">
      <div class="overflow">
<a href="inner_page.php?uid=<?php echo $product_collection_man['id'];?>"><img src="<?php echo 'assets/products/'.$product_collection_man['Image'];?>"></a>
  </div>
  <div class="collection_text text-center mt-2">
    <h6><?php echo $product_collection_man['Description'];?></h6>
    <h5 class="text-danger"><b><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_collection_man['Actual_Price'];?></b>
    <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $product_collection_man['Discount'];?></strike></h5>
  </div>
    </div>
</div>

  <?php
}
}
 ?>

</div>
</h6>
</div>
</div>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php
include('footer.php');
?>