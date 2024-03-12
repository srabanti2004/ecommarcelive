<?php
include('header.php');
connection();
?>

    <div class="result_box text-light bg-light" style="list-style-type: none; width:310px;height:auto;z-index: 9!important;">

      </div>
<!--carausel-->
<section class="over">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="z-index:-9px;">
      <div class="carousel-inner">
<?php
$alldata=getAllSlider();
if(!empty($alldata)){
  foreach($alldata as $key=> $slider_item){

?>
    <div class="carousel-item <?php echo $key==0?'active':''; ?>">
      <img src="<?php echo 'assets/slider/'.$slider_item['image'];?>" class="d-block w-100 carousel_slide" alt="...">
    </div>

  <?php
}
}

?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
  <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
  <span class="visually-hidden"></span>
  </button>
</div>
</section>

<!--production image-->
<section class="over">
  <div class="container mt-3">
    <h2 class="text text-center mt-4"><b>DEALS YOU DON'T WANT TO MISS</b></h2>
  <div class="row mt-4">
    <?php
    $alldata=uniqueproduct();
      if(!empty($alldata)){
      foreach($alldata as $uniqueitem)
      {
          ?>
  <div class="col-md-3 col-sm-6 col-sm-6 text-center">
  <img src="<?php echo 'assets/products/'.$uniqueitem['Image'];?>"class="executive_dress_size">
      <div class="mb-4"></div>
    </div>
       <?php 
     }
   }
       ?>
  </div>
  </div>
</section>


<!--owl carausel1-->
<section class="over background">
<div class="row mt-5">
  <div class="col-md-12 text-center">
    <h3><b>HOTTEST DISCOUNTS OF THE SEASON</b></h3>
    <h5 class="text-danger">Shop from our handpicked selects</h5>
  </div>
  </div>
<div class="container images">
   <div class="container mt-5">
  <div class="company_carousel_main owl-carousel">
    <?php
    $alldata= getOwlslider();
      if(!empty($alldata)){
        foreach($alldata as $key=> $owl_item){
    ?>
          <!-- first -->
              <div class="col-md-12 company_carousel_card bg-light">
                  <div class="col-md-12 mx-auto shadow">
                    <a href="collection.php"><img src="<?php echo 'assets/slider/'.$owl_item['image'];?>" class="owl_image">
                    <p class="text-center"><b><?php echo $owl_item['description']?></b></p></a>
                  </div>
            </div>
  <?php
   }
   } 
   ?>  
  </div>
</div>
<div class="mb-4"></div>
</div>
</section>
<!--girls dress addvatishments-->
<section class="over bg-light">
  <div class="container mt-3">
  <div class="row"data-aos="fade-right" data-aos-delay="0">
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad1.png"class="girls_ad">
      
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad4.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad5.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad2.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad3.png"class="girls_ad">

      <div class="mb-4"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad8.png"class="girls_ad">

      <div class="mb-4"></div>
    </div>
    
  </div>
  </div>
</section>

<!-- girls dress scroll-->
<section class="over background">
  <div class="container-fluid">
      <div class="row m-0 p-0">
    <div class="col-md-12 text-danger mt-3">
      <h2><b>Latest Products For Girl's</b></h2>
    </div>
  </div>

<div class="scroll-container mt-2"data-aos="fade-right" data-aos-delay="0">
  <?php
    $alldata=latestproduct();
      if(!empty($alldata)){
      foreach($alldata as $val)
      {
          ?>
    <ul class="image_show">
  <li class="image_show"><a href="inner_page.php?uid=<?php echo $val['id']; ?>"><img src="<?php echo 'assets/products/'.$val['Image'];?>" alt="..."class="img_slide"></a>   
  </li>
  <?php
}
}
  ?>
</ul>
  </div>
  <div class="mb-5"></div>
</div>
</section>

<!--boys dress addvatishments-->
<section class="over bg-light">
  <div class="container mt-3">
  <div class="row"data-aos="fade-right" data-aos-delay="0">
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ab1.png"class="girls_ad">
      
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ab2.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ab3.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ab4.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ab5.png"class="girls_ad">

      <div class="mb-4"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/ad7.jpg" style="border-radius: 30%!important;" class="girls_ad">

      <div class="mb-4"></div>
    </div>
    
  </div>
  </div>
</section>

<!--boys decoration dress-->
<section class="over background">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 text-danger mt-3"data-aos="fade-right" data-aos-delay="0">
      <h2><b>Brands Product Visible Insite</b></h2>
      <h5 class="text-dark">Trending This Collection's Are Mostly Available Now... </h5>
    </div>
  </div>
<div class="scroll-container mt-3"data-aos="fade-right" data-aos-delay="0">
   <?php
    $alldata=collectionproduct();
      if(!empty($alldata)){
      foreach($alldata as $menitem)
      {
          ?>
    <ul class="image_show">
    <li class="image_show">
    <div class="scroll_img1">
    <a href="inner_page.php?uid=<?php echo $menitem['id']; ?>"><img src="<?php echo 'assets/products/'.$menitem['Image'];?>" alt="..."class="boy_collection"></a>
      <div class="boys_dress_rate text-dark text-center">
        <h6 class=" text-primary"><?php echo $menitem['Name']; ?></h6>
         <h6><b> <?php echo $menitem['Description'];?></b></span></h6>
      <span class="text-danger"><b> <?php echo $menitem['Discount'];?>off</b></span>

</div></div></li></a>
<?php
}
}
?>
</ul>
  </div>
  <div class="mb-5"></div>
</div>
</section>

<!--beauty products addvatishments-->
<section class="over bg-light">
  <div class="container mt-3">
  <div class="row"data-aos="fade-right" data-aos-delay="0">
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be6.webp"class="beauty_ad">
            <h5>Nail dezine</h5>
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be5.webp"class="beauty_ad">
            <h5>Nail art</h5>
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be4.webp"class="beauty_ad">
            <h5>Freshner</h5>
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be3.webp"class="beauty_ad">
            <h5>Perfume</h5>
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be2.webp"class="beauty_ad">
      <h5>Nailpolish</h5>
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/be1.webp"class="beauty_ad">
            <h5>Nail color</h5>
      <div class="mb-4"></div>
    </div>
  </div>
  </div>
</section>

<!--beauty product scroll advatishment-->
<section class="over background">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 text-danger mt-3">
      <h2><b>Brands Product Visible Insite</b></h2>
    </div>
  </div>
<div class="scroll-container mt-2"data-aos="fade-right" data-aos-delay="0">
  <?php
    $alldata=brandproduct();
      if(!empty($alldata)){
      foreach($alldata as $makeupitem)
      {
          ?>
    <ul class="image_show">
  <a href="inner_page.php?uid=<?php echo $makeupitem['id']; ?>"><li class="image_show"><img src="<?php echo 'assets/products/'.$makeupitem['Image'];?>" alt="..."class="img_slide">   
  </li></a>
  <?php
}
}
  ?>
</ul>
  </div>
  <div class="mb-5"></div>
</div>
</section>


<!--boys shoes-->
<section class="over background">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 text-danger">
      <h2><b>Brands Product Visible Insite</b></h2>
      <h5 class="text-dark">Trending This Collection's Are Mostly Available Now... </h5>
    </div>
  </div>
<div class="scroll-container mt-3"data-aos="fade-right" data-aos-delay="0">
  <?php
    $alldata=popularproduct();
      if(!empty($alldata)){
      foreach($alldata as $popitem)
      {
          ?>
    <ul class="image_show">
       <a href="#"><li class="image_show">
        <div class="g_shoe1">
          <a href="inner_page.php?uid=<?php echo $popitem['id']; ?>"><img src="<?php echo 'assets/products/'.$popitem['Image'];?>"class="girl_shoes_size"></a>
          <div class="sale_shoe text-light text-center">
            <h5 class="mt-2">New</h5>
          </div>
          <div class="shoes_rate mx-auto text-dark">
            <h6><?php  echo $popitem['Description'];?></h6>
            <h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $popitem['Actual_Price'];?><span class="text-danger shoes_icon">  <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span></h5>
            <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> 1600 Price 10%off</strike>
          </div>
        </div></li></a>
        <?php
      }
    }
        ?>
  </ul>
</div>
</div>
</section>

<!--Shoes addvatishments-->
<section class="over bg-light">
  <div class="container mt-3">
  <div class="row"data-aos="fade-right" data-aos-delay="0">
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe1.png"class="girls_ad">
      
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe2.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
        <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe3.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe4.png"class="girls_ad">
        
      <div class="mb-4"></div>
    </div>
      <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe5.png"class="girls_ad">

      <div class="mb-4"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-sm-6 text-center">
      <img src="assets/img/shoe6.png" style="border-radius: 30%!important;" class="girls_ad">

      <div class="mb-4"></div>
    </div>
    
  </div>
  </div>
</section>
<!--girls shoes-->
<section class="over background">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 text-danger">
      <h2><b>Brands Product Visible Insite</b></h2>
      <h5 class="text-dark">Trending This Collection's Are Mostly Available Now... </h5>
    </div>
  </div>
<div class="scroll-container mt-3"data-aos="fade-right" data-aos-delay="0">
  <?php
    $alldata=collectproduct();
      if(!empty($alldata)){
      foreach($alldata as $shoeitem)
      {
          ?>
    <ul class="image_show">
       <a href="#"><li class="image_show">
        <div class="g_shoe1">
          <a href="inner_page.php?uid=<?php echo $shoeitem['id']; ?>"><img src="<?php echo 'assets/products/'.$shoeitem['Image'];?>"class="girl_shoes_size"></a>
          <div class="sale_shoe text-light text-center">
            <h5 class="mt-2">New</h5>
          </div>
          <div class="shoes_rate mx-auto text-dark">
            <h6><?php  echo $shoeitem['Description'];?></h6>
            <h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $shoeitem['Actual_Price'];?><span class="text-danger shoes_icon">  <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span></h5>
            <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> 1600 Price 10%off</strike>
          </div>
        </div></li></a>
        <?php
      }
    }
        ?>
  </ul>
</div>
</div>
</section>


<!--girls and boys dress-->
<section class="over background">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 text-danger">
      <h2><b>Brands Product Visible Insite</b></h2>
      <h5 class="text-dark">Trending This Collection's Are Mostly Available Now... </h5>
    </div>
  </div>
<div class="scroll-container mt-3"data-aos="fade-right" data-aos-delay="0">
   <?php
    $alldata=specialproduct();
      if(!empty($alldata)){
      foreach($alldata as $specialitem)
      {
          ?>
    <ul class="image_show">
       <li class="image_show">
        <div class="g_shoe1">
          <a href="inner_page.php?uid=<?php echo $specialitem['id']; ?>"><img src="<?php echo 'assets/products/'.$specialitem['Image'];?>"class="girl_shoes_size"></a>
          <div class="sale_shoe text-light text-center">
            <h5 class="mt-2">New</h5>
          </div>
          <div class="shoes_rate mx-auto text-dark">
            <h6><b><?php echo $specialitem['Description'] ?> </b></h6>
            <h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $specialitem['Actual_Price'] ?> <span class="text-danger shoes_icon">  <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span></h5>
            <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $specialitem['Discount'] ?></strike>
          </div>
        </div></li></a>
<?php
}
}
?>
  </ul>
</div>
</div>
</section>

<!--video-->
<section class="over background">
<div class="row">
   <?php
    $alldata=Advatisement();
      if(!empty($alldata)){
      foreach($alldata as $Advatisements)
      {
          ?>
  <div class="col-md-5 video_div">
  
          <img src="<?php echo 'assets/products/'.$Advatisements['Image'];?>">
    </div>
    <div class="col-md-6">
      <div class="video_text_big mx-auto">
        <h2><b><?php echo $Advatisements['Description'] ?></b></h2>
      <button class="btn btn border border-danger express_button mt-3"><b>SHOP NOW</b></button>
      </div>
    </div>
</div>
<?php
}
}
?>
 </section>


<!--important links accrodian-->

<section class="over background">
  <div class="row">
    <div class="footer_top mx-auto">
      <div class="row">
        
          <div class="col-md-6 mx-auto">
          <div class="sunscribe bg-light" >
          
          </div>
        </div>
        <div class="col-md-6">
          <div class="sub_button bg-danger text-light text-center rounded" type="button"><h5 class="mt-3">SUBSCRIBE</h5></div>
        </div>
          <div class="col-md-10 text-center mt-3">
            <ul class="text-dark ml-3">
              <li class="image_show"><a href="#"class="text-dark"><b>USA</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Spen</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>japan</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>America</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Canada</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Australia</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Brajil</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Bejin</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Tokio</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Chaina</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Lndon</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Newyork</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Rashia</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Maleshia</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Asia</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Europ</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Brajil</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Bejin</b></a></li>
              <li class="image_show"><a href="#"class="text-dark"><b>Tokio</b></a></li>
            </ul>
            <div class="mb-5"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
include('footer.php');
?>