<?php
 include('header.php');
?>
<!--collection pages-->
<section class="over">
   <div class="container-fluid">
  <div class="row mt-1">
    <div class="col-md-3 collection_sec ">
      <h3 class="text-secondary"><b>Refined By</b></h3>
      <div class="row">
        <div class="col-md-12">
           <div class="under_border mt-4 mx-auto">
        <h6 class="text-danger ml-3"><i class="fa fa-spinner " aria-hidden="true"></i>  Spin</h6></div>

         <button class="accordion accro_button border-0 bg-light mt-3"><h6 class="text-dark">Catagory </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> Dress</h6>
        <h6><input type="checkbox"> Shirts,Top,Frock</h6>
         <h6><input type="checkbox"> Kurta</h6>
        <h6><input type="checkbox"> Shirts</h6>
</div>
<div class="mb-2"></div>
        </div>

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Price </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> Below Rs.500(3)</h6>
        <h6><input type="checkbox"> Rs.500-1000(124)</h6>
         <h6><input type="checkbox"> Rs.1001-1500(398)</h6>
        <h6><input type="checkbox"> Rs.2001-2500(299)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Brands </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> Casual(825)</h6>
        <h6><input type="checkbox"> Evening(124)</h6>
         <h6><input type="checkbox"> Occasion(183)</h6>
        <h6><input type="checkbox"> Special Occasion(8)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Occasion </h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> Casual(825)</h6>
        <h6><input type="checkbox"> Evening(124)</h6>
         <h6><input type="checkbox"> Occasion(183)</h6>
        <h6><input type="checkbox"> Special Occasion(8)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Discount</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> 0-20%(741)</h6>
        <h6><input type="checkbox"> 21-30%(269)</h6>
         <h6><input type="checkbox"> 31-40%(263)</h6>
        <h6><input type="checkbox"> 41-50%(359)</h6>
        <h6><input type="checkbox"> 51-80%(854)</h6>
</div>
<div class="mb-2"></div>
       </div> 

        <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Colors</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> Red(14)</h6>
        <h6><input type="checkbox"> Yellow(91)/h6>
         <h6><input type="checkbox"> Green(97)</h6>
        <h6><input type="checkbox"> Blue(82)</h6>
</div>
<div class="mb-2"></div>
       </div> 

       <div class="col-md-12">
        <button class="accordion accro_button border-0 bg-light mt-1"><h6 class="text-dark">Size & Fit</h6><i class="fa fa-plus accro_plus text-dark" aria-hidden="true"></i></button>
<div class="panel">
        <h6><input type="checkbox"> S(14,90)</h6>
        <h6><input type="checkbox"> M(9,8541)/h6>
         <h6><input type="checkbox"> L(9,07)</h6>
        <h6><input type="checkbox"> XS(820)</h6>
</div>
<div class="mb-2"></div>
       </div>

       <div class="col-md-12">
        <h6 class="text-warning">More Filters...</h6>
       </div> 
      </div>
</div>

<div class="col-md-9 collection_scroll_border ">
    <div class="col-md-12 mt-4">
       <select name="sort" id="price_sort" class="p-2">
        
                        <option value="relevanc">DEFAULT</option>
                        <option value="price--low to high">price--High to Low</option>
                        <option value="price--high to low">price--Low to High</option>
             </select>
    </div>

<div class="row mt-3" id="fashion_item_row">

<?php
    $alldata=product_collection_girl();
      if(!empty($alldata)){
      foreach($alldata as $collection_girl_item)
      {
          ?>
  <div class="col-md-4 mb-3" id="collection_item_row">

    <div class="collection_img">
      <div class="overflow" data-price="">
<a href="inner_page.php?uid=<?php echo $collection_girl_item['id'];?>"><img src="<?php echo 'assets/products/'.$collection_girl_item['Image'];?>"></a>
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

<script type="text/javascript">
    $(document).ready(function(){
      $("#price_sort").on('change',function(){
        let ordrer=$(this).val();
        $("#fashion_item_row").html('Please Wait....');
        $.ajax({
          url:'collection_filter.php',
          type:'post',
          data:{ordrer:ordrer},
          success: function(result){
            $("#fashion_item_row").html(result);
          }
        });
 });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $("#product_sort").on('change',function(){
        let ordrers=$(this).val();
        $("#fashion_item_filter").html('Please Wait....');
        $.ajax({
          url:'all_product_filter.php',
          type:'post',
          data:{ordrers:ordrers},
          success: function(result){
            $("#fashion_item_filter").html(result);
          }
        });
 });
});
</script>
<?php
include('footer.php');
?>