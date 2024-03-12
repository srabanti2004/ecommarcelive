<?php
include("header.php");
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container">
          <h3><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Categories</h3>
            <div class="row">
               <form method="post" action="sub_categorie_action.php">
                <div class="col-md-12">
              <div class="form-group">
               <select name="c_id" class="form-control" name="categorie" id="categorie">
                <option value="">Select Categorie---</option>
                <?php
                $catagorie=getAllCatagory();
                foreach($catagorie as $value){
                ?>
                <option value="<?php echo $value['id'];?>"><?php echo $value['categorie'];?></option>
<?php
}
?>
               </select>
              </div>
            </div>
              <div class="col-md-12 mx-auto mt-3">
                <label><h5 class="ml-3">Enter a Sub-Categorie:</h5></label>
<input type="text" placeholder=" Enter Categories" name="sub_categorie" id="sub_categorie" class="w-100 p-3">
</div>

<div class="col-md-11 text-center">
  <a href="#"><button class="btn btn w-75 background_button p-3 mt-4 justify-content-center ml-4" name="submit" onclick="return subcategorie_validation();">Add Sub-Categories</button></a>
  <div class="mb-4"></div>
</div>
</form>
</div>
</div>
</div>
</div>
 

 <script type="text/javascript">
  function subcategorie_validation(){
    var categorie=document.getElementById('categorie').value;
    var sub_categorie=document.getElementById('sub_categorie').value;

    if(categorie==''){
      alert('enter categorie');
      return false;
    }
     
    // else if(sub_categorie==''){
    //   alert('enter sub_categorie');
    //   return false;
    // }
    
    else{
      alert('successfully submit');
    }


  }
</script>
 <?php
 include('footer.php');
?>