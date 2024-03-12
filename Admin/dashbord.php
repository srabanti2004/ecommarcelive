<?php
include('header.php');
?>

<?php
if(!isset($_SESSION['email'])){
  echo "<script>alert('please Login first...');window.location.href='login.php';</script>";
} 
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
<div class="container-fluid">
          
  <div class="row" id="main">
  <div class="col-sm-4 rounded">
    <a href="dashbord.php"><div class="card text-center text-light">
      <div class="card-body card_body bg-warning rounded">
        <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-th-large"></i> Dashbord</h4>
      </div>
    </div></a>
    <div class="mb-5"></div>
  </div>

  <div class="col-sm-4">
        <a href="customer.php"><div class="card">
      <div class="card-body card_body bg-danger text-center rounded">
        <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Customer</h4>
      </div>
    </div></a>
    <div class="mb-5"></div>
  </div>

  <div class="col-sm-4">
    <a href="product.php"><div class="card">
      <div class="card-body card_body bg-success rounded">
      <h4 class="card-title text-light text-center pt-3 pb-2 mt-3"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</h4>
      </div>
    </div></a>
  </div>

  <div class="col-sm-4">
    <a href="Categorie.php"><div class="card">
      <div class="card-body card_body bg-primary rounded">
    <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-table" aria-hidden="true"></i> Categories</h4>
      </div>
    </div></a>
    <div class="mb-5"></div>
  </div>

  <div class="col-sm-4">
    <a href="slider.php"><div class="card">
      <div class="card-body card_body bg-warning rounded">
      <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-sliders" aria-hidden="true"></i>  Slider</h4>
      </div>
    </div></a>
    <div class="mb-5"></div>
  </div>

  <div class="col-sm-4">
    <a href="feedback_table.php"><div class="card">
      <div class="card-body card_body bg-danger rounded">
      <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-commenting" aria-hidden="true"></i> Feedback</h4>
      </div>
    </div></a>
    <div class="mb-5"></div>
  </div>
  
  <div class="col-sm-4">
    <a href="orders.php"><div class="card">
      <div class="card-body card_body bg-primary rounded">
    <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order</h4>
      </div>
    </div></a>
    <div class="mb-2"></div>
  </div>

  <div class="col-sm-4">
    <a href="delivary_address_table.php"><div class="card">
      <div class="card-body card_body bg-warning rounded">
    <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-user" aria-hidden="true"></i> Delivary table</h4>
      </div>
    </div></a>
    <div class="mb-2"></div>
  </div>

  <div class="col-sm-4">
    <a href="profile.php"><div class="card">
      <div class="card-body card_body bg-warning rounded">
    <h4 class="card-title text-light text-center pt-3 pb-2 mt-4"><i class="fa fa-user" aria-hidden="true"></i> Admin Profile</h4>
      </div>
    </div></a>
    <div class="mb-2"></div>
  </div>

<div class="col-md-5">
<div class="main-container mb-4 mt-3">
    <div class="year-stats">
      <div class="month-group">
        <div class="bar h-100"></div>
        <p class="month">Jan</p>
      </div>

      <div class="month-group">
        <div class="bar h-50"></div>
        <p class="month">Feb</p>
      </div>

      <div class="month-group">
        <div class="bar h-75"></div>
        <p class="month">Mar</p>
      </div>

      <div class="month-group">
        <div class="bar h-25"></div>
        <p class="month">Apr</p>
      </div>

      <div class="month-group selected">
        <div class="bar h-100"></div>
        <p class="month">May</p>
      </div>

      <div class="month-group">
        <div class="bar h-50"></div>
        <p class="month">Jun</p>
      </div>

      <div class="month-group">
        <div class="bar h-75"></div>
        <p class="month">Jul</p>
      </div>

      <div class="month-group">
        <div class="bar h-25"></div>
        <p class="month">Aug</p>
      </div>

      <div class="month-group">
        <div class="bar h-50"></div>
        <p class="month">Sep</p>
      </div>

      <div class="month-group">
        <div class="bar h-75"></div>
        <p class="month">Oct</p>
      </div>

      <div class="month-group">
        <div class="bar h-25"></div>
        <p class="month">Nov</p>
      </div>

      <div class="month-group">
        <div class="bar h-100"></div>
        <p class="month">Dez</p>
      </div>
    </div>

    <div class="stats-info">
      <div class="graph-container">
        <div class="percent">
      <svg viewBox="0 0 36 36" class="circular-chart">
      <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
      <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
      <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
      <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
      </svg>
      </div>
      <p>Total: $2075</p>
</div>
</div>
</div>
</div>

<div class="col-md-7 mt-3">
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>

  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>