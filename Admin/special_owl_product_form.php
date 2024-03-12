<?php
include('header.php');
?>



<div id="page-wrapper">
<div class="container">

<form action="special_owl_product_insert.php" method="post" enctype="multipart/form-data">

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="status">
    <label class="form-label" for="form4Example1">status</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="type" class="form-control"name="type"/>
    <label class="form-label" for="form4Example1">Type</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="description" class="form-control"name="Description"/>
    <label class="form-label" for="form4Example1">Description</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="file" id="image" class="form-control"name="image"/>
    <label class="form-label" for="form4Example2">Upload Image</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" onclick="return special_owl_validation();">Upload slider</button>

</form>
</div>
</div>

<script type="text/javascript">
  function special_owl_validation(){
    var type=document.getElementById('type').value;
    var image=document.getElementById('image').value;
    var description=document.getElementById('description').value;

    if(type==''){
      alert('enter type');
      return false;
    }
     
    else if(image==''){
      alert('enter image');
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