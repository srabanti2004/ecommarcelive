<?php
include('header.php');

$id=$_GET['uid'];
$cal=product_more_image($id);
?>

  <?php
    $alldata=product_inner($id);
      if(!empty($alldata)){
          foreach($alldata as $val)
           $type=$val['type'];
      {
          ?>

<!--images details and zooms-->
<section class=" mt-4">
  <div class="container bg-light">
    <div class="row mt-4">
       <div class="col-md-7">
        <div class="row">
          <div class="col-md-2">
            <div class="part_image p-2 mx-auto mr-3">
<?php 
if($cal!=''){
foreach($cal as $more_value){
?>

        <div class="part1 mt-5">
           <img src="<?php  echo $more_value['more_image'];?>"class="part_imgs rounded small_img mt-2">
        </div>
      
<?php }
} 
?> 

        <script type="text/javascript">
        $(document).ready(function(){
    $(".small_img").click(function(){
    $(".big_img").attr('src',$(this).attr('src'));
});
});
</script>

      </div>
          </div>
          <div class="col-md-10">
        <div class="img-zoom-container">
          <div class="image_tag text-danger ml-3 text-center ">
           <div class="heart-container" title="Like">
           <input type="checkbox" class="checkbox" id="Give-It-An-Id">
            <div class="svg-container">
                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                </svg>
                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                    </path>
                </svg>
                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="10,10 20,20"></polygon>
                    <polygon points="10,50 20,50"></polygon>
                    <polygon points="20,80 30,70"></polygon>
                    <polygon points="90,10 80,20"></polygon>
                    <polygon points="90,50 80,50"></polygon>
                    <polygon points="80,80 70,70"></polygon>
                </svg>
            </div>
</div>
          </div>
          
          <script>
    const circle = 'fa-heart-o'
    const check = 'fa-heart'
    let icons=document.querySelectorAll(".wish_icon");
    for(let i=0;i < icons.length; i++)
    {
        icons[i].addEventListener("click",function(){
            this.classList.toggle(circle);
            this.classList.toggle(check);
        });
  }
</script>
          
  <img  src="<?php  echo 'assets/img/'.$val['Image'];?>" class="main_picture rounded big_img" alt="...">

        <?php
      }
    }
        ?>
        <script src="assets/js/zoomsl.min.js"></script>
        <script>
  $(document).ready(function(){
    $('.big_img').imagezoomsl({
      zoomrange: [4,4]
    });
});
</script>

      <h6 class="ml-4 text">The Wind offers Products Demandable</h6>
      </div>
    </div>
  </div>
<h3 class="mt-4"><i class="fa fa-star text-warning" aria-hidden="true"></i> <span class="text-danger">Ratings</span></h5>
<div class="progress bg-light mt-3">
   <h6>Poor &nbsp; </h6><div class="progress-bar progress-bar-striped rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
</div>
  <div class="mb-3"></div>
<div class="progress bg-light">
   <h6>Avarage &nbsp;</h6><div class="progress-bar progress-bar-striped bg-success rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<div class="mb-3"></div>
<div class="progress bg-light">
   <h6>Good &nbsp;</h6><div class="progress-bar progress-bar-striped bg-info rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<div class="mb-3"></div>
<div class="progress bg-light">
  <h6>Very Good &nbsp;</h6><div class="progress-bar progress-bar-striped bg-warning rounded" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
<div class="mb-3"></div>
<div class="progress bg-light">
 <h6>Exce..  &nbsp;</h6><div class="progress-bar progress-bar-striped bg-danger rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
</div> 
<div class="mb-2"></div>

      </div>
      <div class="col-md-5 mt-4">

        <h5 class="text mt-3"><b>MINIMAL WOMAN COLLECTION</b></h5>
        <h2><b><?php echo $val['Description'];?></b></h2>
        <p><strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i> 560</strike><span class="text-danger"><b>(70% OFF)</b></span></p>
        <h3><b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $val['Actual_Price'];?></b></h3>
      
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
         <div class="col-md-5 col-sm-12">
            <?php
          
            if(isset($_SESSION['userid']))
            {
              // echo "<script>alert('you are login first');</script>";
              $buttonDisabled=false;
            }
            else
            {
               // echo "<script>alert('you are login ');</script>";
              $buttonDisabled=true;
            }
            ?>
            <?php 
            if(isset($_SESSION['userid']))
            {
              ?>
             <a href="wishlist_action.php?user_id=<?php echo $_SESSION['userid'];?>&p_id=<?php echo $val['id'];?>">
              <button class="btn btn bg-secondary text-light wish_button rounded"<?php  $buttonDisabled ;?>><i class="fa fa-heart-o" aria-hidden="true"></i> WISHLIST</button></a>
              <?php
          }
          else
          {
          ?>
          <a href="#">
              <button class="btn btn bg-secondary text-light wish_button rounded"<?php  $buttonDisabled ;?>><i class="fa fa-heart-o" aria-hidden="true"></i> WISHLIST</button></a>
          <?php 
        }
          ?>
            <div class="mb-3"></div>
          </div>
        
        <h5 class="letter_space"><b>SELECT SIZE</b></h5>
        <div class="size mt-4">

        <form action="addtocart_action.php" method="post">
          <input type="radio" name="size" id="S" value="S" required>S
          <input type="radio" name="size" id="M" value="M" required>&nbsp;M&nbsp;
          <input type="radio" name="size" id="L" value="L" required>&nbsp;L&nbsp;
        <input type="radio" name="size" id="XL" value="XL" required>&nbsp;XL&nbsp;
        <input type="radio" name="size" id="XLL" value="XXL" required>&nbsp;XXL&nbsp;
        <h6 class="mt-2 text-success">Only Applicable of Shoes</h6>
        <input type="radio" name="size" id="4" value="4" required>&nbsp;4&nbsp;
        <input type="radio" name="size" id="5" value="5" required>&nbsp;5&nbsp;
        <input type="radio" name="size" id="7" value="7" required>&nbsp;7&nbsp;
        <input type="radio" name="size" id="9" value="9" required>&nbsp;9&nbsp;

        <input type="radio" name="size" id="None" value="None" required>&nbsp;None&nbsp;


         <input type="hidden" value="<?php echo $id;?>" name="p_id">

         <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" name="user_id"> 
          <p class="ml-2 text-danger mt-2"><b>SLOT</b></p>
        </div>
        <div class="row mt-5">
          
        
          <div class="col-md-6 col-sm-12 ">
            <?php 
            if(isset($_SESSION['userid']))
            {
              ?>
            <a href="#"><button type="submit" class="btn-btn text-light wish_button rounded"name="addtocart" <?php  $buttonDisabled ;?>><i class="fa fa-shopping-cart" aria-hidden="true" ></i> ADD TO CART</button></a>
            <?php
          }
          else
          {
          ?>
          <a href="#"><button type="button" class="btn-btn text-light wish_button rounded"name="addtocart"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> ADD TO CART</button></a>
          <?php 
        }
          ?>

</div> 
</form>
        

<!--- Modal -->
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
            <input type="hidden"value="<?php echo $_SESSION['userid'];?>" name="customer_id">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Username" aria-label="Name" name="name" id="name" aria-describedby="basic-addon1" required>
          </div>
          <div class="mb-4"></div>
          </div>

           <div class="col-md-12">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Username" aria-label="10 digit Phone no" name="phone" aria-describedby="basic-addon1" id="phone" required>
          </div> 
          <div class="mb-4"></div>
          </div>

           <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-thumb-tack" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="PIN Code" aria-label="Username" name="pin" aria-describedby="basic-addon1" id="pin" required>
          </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Locality" aria-label="Username" name="locality" aria-describedby="basic-addon1" id="locality" required>
          </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-12">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="City" aria-label="Address" name="city" aria-describedby="basic-addon1" id="city" required>
          </div>
          <div class="mb-4"></div>
          </div>

            <div class="col-md-12">
            <div class="input-group">
            <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <textarea class="form-control" name="address" aria-label="With textarea" id="address" required></textarea>
            </div>
          <div class="mb-4"></div>
          </div>

          <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-road" aria-hidden="true"></i></span>
            <input type="text" class="form-control p-2" placeholder="Road" aria-label="Address" name="road" aria-describedby="basic-addon1" id="road" required>
          </div>
          <div class="mb-4"></div>
          </div>

            <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-road" aria-hidden="true"></i></span>
            <input type="date" class="form-control p-2" aria-label="Address" name="date" aria-describedby="basic-addon1" id="date" required>
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
<button type="submit" class="btn btn bg-warning w-100 p-2" name="submit"> DELIVER HERE</button></a>
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
            <div class="mb-3"></div>
          </div>
        </div>
        <h6 class="text letter_space mt-3"><b>PRODUCT DETAILS</b></h6>
        <h5>Light Grey Solid Top Has A Boat Neek, 3/4 Slevers</h5>
        <h6>Materials Card</h6>
        <ul class="ml-3">
          <li><b>Cotton</b></li>
          <li><b>Machine Wash</b></li>
          <li><b>Aquars</b></li>
          <li><b>Slik</b></li>
        </ul>
        <p class="letter_space"><b>SLOD BY PRODUCT</b></p>
        <h5 class="text"><b>Wind It Sloat Store StillWear</b></h5>
        <ul class="ml-3">
          <li><b>90% Product Feedback</b></li>
          <li><b>63 Products</b></li>
          <li><b>All products sell in offer</b></li>
          <li><b>Material products</b></li>
        </ul>
        <h4 class="text mt-3"><b>Silver Tulle Sequin Gown</b></h4>
 <p>A silver tulle holographic sequinned gown, transitioning into oyster with enhancing waist and a oyster dupatta.
Comes with seperate can-canThis a Two piece look.
Jewellery: Manish Malhotra Jewellery by Raniwala 1881.</p>
<ul class="ml-3">
<li>Product colour may slightly vary due to photographic lighting sources.</li>
<li>For further queries, mail us at orders@manishmalhotra.in or WhatsApp Us</li>
</ul>
      </div>
    </div>
  </div>
  </section>

<!--feedback-->
<section class="">
  <div class="container mt-3">
    <h2 class="text"><b>Feedback of this products</b></h2>
    <h6>Customer's Reviews are most important in our website.</h6>

   <div class="owl-carousel  mt-5" id="feedback_owl_carousel">
        <?php
    $alldata= feedbacknote();
      if(!empty($alldata)){
        foreach($alldata as $feedback_value){
    ?>                  
                   <div class="item col-md-12 col-sm-12">
                     <div class="owl_img mx-auto">
                      <img src="<?php echo 'assets/feedback/'.$feedback_value['image'];?>" class="owl_img">
                     </div>
                     <div class="owl_text mx-auto text-center mt-3 placement">
                        <h4 class="text-center text-danger"><b><?php echo $feedback_value['name'];?></b></h4>
                        <p><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo $feedback_value['description'];?><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                        <p class="text-success"><i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                     </div>
                     </div>
                     <?php 
        }
      }
          ?>
          </div>
          
       </div>
       </section>
  

<script type="text/javascript">
  
  
       $("#feedback_owl_carousel").owlCarousel({
           loop: true,
           margin: 50,
           autoplay: true,
           nav: true,
           autoplayTimeout: 2000,//2000 ms=2 sec
           autoplayHoverPause: true,
           responsive:{
               0:{
                   items:1,
                   nav:false
               },
               767:{
                   items:2,
                   nav:false,
                   margin: 20
               },
               1000:{
                   items:3,
                   nav:true
               } 
       }
       });
</script>

  <!--related products-->     
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
    $alldata=productshows($type);
      if(!empty($alldata)){
      foreach($alldata as $allproduct)
    
      {
          ?>
    <ul class="image_show">
       <a href="inner_page.php?uid=<?php echo $allproduct['id']; ?>"><li class="image_show">
        <div class="g_shoe1">
          <img src="<?php echo 'assets/products/'.$allproduct['Image'];?>"class="girl_shoes_size">
          
          <div class="shoes_rate mx-auto text-dark">
            <h6><b><?php echo $allproduct['Description'];?></b></h6>
            <h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $allproduct['Actual_Price'];?><span class="text-danger shoes_icon">  <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span></h5>
            <strike class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $allproduct['Discount'];?></strike>
          </div>
        </div></li></a>       
  </ul>
  <?php 
}
}
  ?>
</div>
</div>
</section>




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
