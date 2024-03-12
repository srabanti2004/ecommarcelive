<?php
include("header.php");
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container">
          <h3><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Categories</h3>
          <div class="sub_categorie mx-auto mt-5">
            <form method="post" action="add_categorie_insert_action.php">
            <div class="row">
              <div class="col-md-11 mx-auto mt-3">
                <label><h5 class="ml-3">Enter a Categorie:</h5></label>
<input type="text" placeholder=" Enter Categories" name="categorie"id="categorie" class="w-100 p-3">
</div>

<div class="col-md-11 text-center">
  <a href="#"><button class="btn btn w-75 background_button p-3 mt-4 justify-content-center ml-4" name="submit" onclick="return categorie_select();">Add-Categories</button></a>
  <div class="mb-4"></div>
</div>
</div>
</form>
        </div>
      </div>
    </div>
          </div>
        </div>

<script type="text/javascript">
  function categorie_select(){
    var categorie=document.getElementById('categorie').value;
    

    if(categorie==''){
      alert('enter your categorie');
      return false;
    }
    else{
      alert('successfully submit');
      return true;
    }


  }
</script>


<?php
include('footer.php');
?>
