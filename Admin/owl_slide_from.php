<?php
include('header.php');
?>

<div id="page-wrapper">
<div class="container">
   
<form action="owl_slide_insert.php" method="post" enctype="multipart/form-data">

  <div class="form-outline mb-4">
    <input type="text" id="" class="form-control"name="staus"/>
    <label class="form-label" for="form4Example1">Status</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="type" class="form-control"name="type">
    <label class="form-label" for="form4Example1">Type</label>
  </div>
<!--description-->
<div class="form-outline mb-4">
    <input type="text" id="description" class="form-control"name="description"/>
    <label class="form-label" for="form4Example1">description</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="file" id="image" class="form-control"name="image"/>

    <label class="form-label" for="form4Example2">Upload Image</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" onclick="return owl_slider_validation();">Upload slider</button>
</form>
</div>
</div>


<script type="text/javascript">
  function owl_slider_validation(){
    var type=document.getElementById('type').value;
    var description=document.getElementById('description').value;
    var image=document.getElementById('image').value;
    
    if(type==''){
      alert('enter type');
      return false;
    }
     else if(description==''){
      alert('enter description');
      return false;
    }
    else if(image==''){
      alert('enter image');
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