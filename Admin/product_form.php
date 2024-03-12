<?php
include('header.php');
?>

    <!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container">
          <div class="table-responsive">
  <div class="container mt-4">
<div class="row">
  <div class="col-md-6 mx-auto  border-primary">
  
    <form action="product_insert.php" method="post" enctype="multipart/form-data">
  <!-- 2 column grid layout with text inputs for the first and last names -->

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="col">
      <div class="form-outline">
        <select class="select mt-4 rounded" style="width: 200px;height: 50px;"name="Categorie" id="category">
  <option value="">Select a catagory</option>
  <?php
  $categorie=getAllCatagory();
  foreach ($categorie as $value) {
  ?>
    <option value="<?php echo $value['id']; ?>"><?php echo $value['categorie'];?></option>
  <?php
  }
  ?>
  </select>
        <br>
         <label class="form-label" for="form6Example1">Category</label>
      </div>
</div>

    </div>
    <div class="col-md-6">
   <div class="col">
      <div class="form-outline">
       
        <select class="select mt-4 rounded" style="width: 156px;height: 50px;"name="Sub_Category" id="subcategory">
  <option value="">Select a subcatagory</option>
  </select>
        <br>
         <label class="form-label" for="form6Example1"> sub_Category</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example3">Product Name</label>
    <input type="text" id="name" class="form-control" name="Name" />

  </div>

  <!-- Email input -->
  <div class="row">
  <div class="col-md-6">
  <div class="form-outline mb-2">
  <label class="form-label" for="form6Example5">Actual_Price</label>
    <input type="Actual_Price" class="form-control"name="Actual_Price" id="Actual_price" onkeyup="discount_value();"/>
  </div>
</div>

  <!-- Number input -->
  <div class="col-md-6">
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example6">Discount</label>
  <input type="Actual_Price" class="form-control"name="Discount"onkeyup="discount_value();"id="discount" />
  </div>
</div>
</div>

  <!-- Message input -->
  <div class="form-outline mb-2">
        <label class="form-label" for="form6Example7">Discount_Price</label>
      <input type="Actual_Price" id="discount_price" class="form-control"name="Discount_Price" />
      
  </div>
  <div class="row">
   <div class="col-md-6">
      <div class="form-outline">
      
        <div class="row">
          <div class="col-md-1"><label>4</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="4" id="size">
          </div>
          <div class="col-md-1"><label>6</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="6" id="size">
          </div>
          <div class="col-md-1"><label>7</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="7" id="size">
          </div>
          <div class="col-md-1"><label>9</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="9" id="size">
          </div>
        </div>
       
        
         <label class="form-label" for="form6Example1">Size</label>
      </div>
</div>

<div class="col-md-6">
  <label class="form-label" for="form6Example7">Type</label>
  <input type="type" id="type" class="form-control"name="type" />
  </div>
</div>
<div class="col-md-12">
<div class="form-outline mb-2">
        <label class="form-label" for="form6Example7">Image</label>
        <input type="file" id="image" class="form-control"name="Image" />
      
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
    <textarea class="form-control" id="description" rows="6" name="Description" value="" style="width:100%;">
  </textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" onclick="return product_validation();">ADD PRODUCTS</button>
</form>

  </div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#category').on('change',function(){
      let c_id=$(this).val();
      $.ajax({
        url: 'ajux_catagory.php',
        type: 'post',
        data: {Category:c_id},
        // dataType: 'json',
        success: function(result) {
          $('#subcategory').html(result);
          
        }
      });
    });
});
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

<!--calculation of price of product-->
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
  function product_validation(){
    var category=document.getElementById('category').value;
    var subcategory=document.getElementById('subcategory').value;
    var name=document.getElementById('name').value;
    var Actual_price=document.getElementById('Actual_price').value;
    var discount=document.getElementById('discount').value;
    var discount_price=document.getElementById('discount_price').value;
    var size=document.getElementById('size').value;
    var type=document.getElementById('type').value;
    
    var image=document.getElementById('image').value;
    var img_file=document.getElementById('img_file').value;
     var description=document.getElementById('description').value;


    if(category==''){
      alert('enter category');
      return false;
    }
    //  else if(subcategory==''){
    //   alert('enter subcategory');
    //   return false;
    // }
    else if(name==''){
      alert('enter name');
      return false;
    }
    else if(Actual_price==''){
      alert('enter Actual_price');
      return false;
    }
    else if(discount==''){
      alert('enter discount');
      return false;
    }
    else if(discount_price==''){
      alert('enter discount_price');
      return false;
    }
    else if(size==''){
      alert('enter size');
      return false;
    }
    else if(type==''){
      alert('enter type');
      return false;
    }
    else if(image==''){
      alert('enter image');
      return false;
    }
    else if(img_file==''){
      alert('enter img_file');
      return false;
    }
    else if(description==''){
      alert('enter description');
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