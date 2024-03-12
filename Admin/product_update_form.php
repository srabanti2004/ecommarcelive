<?php
include('header.php');
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM product where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>



    <!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container">
          <div class="table-responsive">
  <div class="container mt-4">
<div class="row">
  <div class="col-md-6 mx-auto  border-primary">
    <?php
    foreach($record as $val)
    {
      ?>
    <form action="product_update.php" method="post" enctype="multipart/form-data">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <input type="hidden" name="uid" value="<?php echo $val['id']; ?>">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="form-outline">
  <label class="form-label" for="form6Example1">Categorie</label>
  <select class="select_product" name="Catagory">
  <option value="<?php echo $val['Catagory']; ?>"></option>
  <option value="MEN">MEN</option>
  <option value="WOMEN">WOMEN</option>
  <option value="KID">KID</option>
</select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
<input type="text" id="form6Example3" class="form-control" name="Sub_Category" value="<?php echo $val['Sub_Category']; ?>">
    <label class="form-label" for="form6Example3"></label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example3">Product Name</label>
    <input type="text" id="form6Example3" class="form-control" name="Name" value="<?php echo $val['Name']; ?>" />

  </div>

  <!-- Email input -->
  <div class="row">
  <div class="col-md-6">
  <div class="form-outline mb-2">
  <label class="form-label" for="form6Example5">Actual_Price</label>
    <input type="Actual_Price" id="Actual_price" class="form-control"name="Actual_Price"  value="<?php echo $val['Actual_Price']; ?>" onkeyup="discount_value();"/>
  </div>
</div>

  <!-- Number input -->
  <div class="col-md-6">
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example6">Discount</label>
  <input type="Actual_Price" id="discount" class="form-control"name="Discount" value="<?php echo $val['Discount']; ?>" onkeyup="discount_value();" />
  </div>
</div>
</div>

  <!-- Message input -->
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example7">Discount_Price</label>
      <input type="Actual_Price" class="form-control"name="Discount_Price" value="<?php echo $val['Discount_Price']; ?>" />
  </div>
  <div class="row">
    <div class="col-md-6">
  <div class="form-outline mb-2">
<!-- <label class="form-label" for="form6Example1">Size</label><br>
  <select class="select_product" name="Size">
  <option value="">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XLL">XLL</option>
</select> -->

<div class="form-outline">
      
        <div class="row">
          <div class="col-md-1"><label>M</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['Size']; ?>" />
          </div>
          <div class="col-md-1"><label>L</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['Size']; ?>" />
          </div>
          <div class="col-md-1"><label>XL</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['Size']; ?>" />
          </div>
          <div class="col-md-1"><label>XLL</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['Size']; ?>" />
          </div>
        </div>
       
        
         <label class="form-label" for="form6Example1">Size</label>
      </div>


  </div>
</div>
<div class="col-md-6">
  <label class="form-label" for="form6Example7">Type</label>
  <input type="type" id="form6Example5" class="form-control"name="type" value="<?php echo $val['type']; ?>" />
  </div>
</div>
<div class="col-md-12">
<div class="form-outline mb-2">
      <label class="form-label" for="form6Example7">Image</label>
      <input type="hidden" name="old_img" value="<?php echo $val['Image']; ?>">
      <input type="file" id="form6Example5" class="form-control"name="Image" />
      <img src="<?php echo '../assets/products/'.$val['Image'];  ?> " width="200px" height="200px">
  </div>
</div>

<div class="col">
      <div class="form-outline">
        <input type="file" multiple="multiple" name="product_sub_image[]" id="img_file" onchange="readURLMoreImage(this);" required="required">
        <label class="form-label" for="form6Example2"> Multiple Image</label>
      </div>
      <div class="row">
      <div class="form-outline  w-100 mx-auto" id="ShowMoreImage"></div>
    </div>
</div>

<!-- Text input -->
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example4">Description</label>
    <textarea class="form-control" id="form6Example7" rows="4" name="Description" value="">
    <?php echo $val['Description']; ?></textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">ADD PRODUCTS</button>
</form>
<?php
}
?>
  </div>
</div>
</div>
</div>
</div>
</div>


!--calculation of price of product-->
<script type="text/javascript">
  function discount_value()
  {
    let a=parseInt($('#Actual_price').val());
    let b=parseInt($('#discount').val());
    if(isNaN(a)){
      a=0;
    }
    if(isNaN(b)){
      b=0;
    }
    let c=a*b/100;
    let d=a-c;

    let x=Math.round(d);  
  $('#discount_price').val(x);
   }
</script>


<script type="text/javascript">
      function readURLMoreImage(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage').html(moreimg);
        }


 }
</script>

<?php
  include('footer.php');
  ?>

