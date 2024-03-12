
<?php 
if (isset($_SESSION['name'])){
  $udata=explode(" ",$_SESSION['name']);
  $udata=$udata[0];
}
?>
<?php
include('header.php');
?>

<!---- ======== End Sidebar ====== ---->
<div id="page-wrapper">
   
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="../assets/img/SM.png"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h3 class="mb-2 text-dark"><?php echo $_SESSION['fname']; ?></h3>
            <p class="text-muted mb-4">@Admin <span class="mx-2">|</span> <a
                href="#!"><?php echo $_SESSION['email']; ?></a></p>
            <div class="mb-4 pb-2">
              <button type="button" class="btn btn-outline-primary btn-floating rounded-circle p-2">
                <i class="fa fa-facebook-f fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating rounded-circle p-2 ml-3">
                <i class="fa fa-twitter fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating rounded-circle p-2 ml-3">
                <i class="fa fa-skype fa-lg"></i>
              </button>
            </div>
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Now
            </button>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">8471</p>
                <p class="text-muted mb-0">Wallets Balance</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">8512</p>
                <p class="text-muted mb-0">Income amounts</p>
              </div>
              <div>
                <p class="mb-2 h5">4751</p>
                <p class="text-muted mb-0">Total Transactions</p>
              </div>
            </div>
                <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
                <div class="mb-4"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</div>
<?php
include('footer.php');?>
