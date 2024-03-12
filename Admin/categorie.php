<?php
include("header.php");
?>


<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container bg-light">
          <h2><i class="fa fa-table" aria-hidden="true"></i> <b>Categorie List</b></h2>
          <div class="row mt-5">
            <div class="col-md-3">
              <a href="categorie_add.php"><div class="card background_button text-center" style="width: 100%;height:100px;">
  <div class="card-body">
    <h4 class="pt-4 pb-3"><i class="fa fa-plus" aria-hidden="true"></i>ADD Catagory</h4>
  </div>
</div></a>
            </div>
            <div class="col-md-3">
              <a href="sub_categorie.php"><div class="card background_button text-center" style="width: 100%;height:100px;">
  <div class="card-body">
    <h4 class="pt-4 pb-3"><i class="fa fa-plus" aria-hidden="true"></i> Add sub-Catagory</h4>

  </div>
</div></a>
            </div>

            <div class="col-md-3">
              <a href="manage_categorie.php"><div class="card background_button text-center" style="width: 100%;height:100px;">
  <div class="card-body">
    <h4 class="pt-4 pb-3"><i class="fa fa-plus" aria-hidden="true"></i>  Manage Categorie</h4>

  </div>
</div></a>
            </div>
          </div>
          <div class="table-responsive mt-4">
          </div>
        </div>
      </div>


<?php
include('footer.php');
?>















        