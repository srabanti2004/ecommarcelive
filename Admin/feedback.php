<?php
include('header.php');
?>



<div id="page-wrapper">
<div class="container">
   
<form action="feedback_action.php" method="post" enctype="multipart/form-data">

  <div class="form-outline mb-4">
    <input type="text"  class="form-control"name="name" id="name"/>
    <label class="form-label" for="form4Example1">Name</label>
  </div>

  <div class="form-outline mb-4">
    <textarea type="text" class="form-control"name="description" id="description"></textarea>
    <label class="form-label" for="form4Example1">Description</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="file" class="form-control"name="image" id="image"/>

    <label class="form-label" for="form4Example2">Upload Image</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" onclick="return feedback_validation();">Upload feedback</button>
</form>
</div>
</div>

<script type="text/javascript">
  function feedback_validation(){
    var name=document.getElementById('name').value;
    var description=document.getElementById('description').value;
     var image=document.getElementById('image').value;
    
    if(name==''){
      alert('enter feedback name');
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