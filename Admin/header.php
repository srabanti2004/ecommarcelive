<?php
include("datastore.php");
include('function.php');
?>

<?php
//  session_start();
// if(!isset($_SESSION['user_id'])){
//   echo "<script>alert('Plaese Login...');window.location.href='login.php';</script>";
//}
?>

<?php 
session_start();
if (isset($_SESSION['name'])){
  $udata=explode(" ",$_SESSION['name']);
  $udata=$udata[0];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/admin.css">
   <!--<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">-->
  <!-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css"> -->
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  
  <!-- <link rel="stylesheet" href="assets/css/owlcarousle.css"> -->
  <!-- ====== Data Table Pagination CSS ============ -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="../assets/js/jquery-3.6.4.min.js"></script>
</head>
<body>
<!--=================== Header =======================-->
        <header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 p-3">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5 nav_text" href="#"><h2><b>Shop<span class="text-warning">Wo</span>rld</b></h2></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success bg-success">10</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul class="dropdown-menu-over list-unstyled">
                      <li class="header-ul text-center">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu list-unstyled">
                          <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="../assets/img/SM.png" class="rounded-circle  " alt="User Image">
                            </div>
                            <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning">10</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <ul class="dropdown-menu-over list-unstyled">
                    <li class="header-ul text-center">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu list-unstyled">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">View all</a></li>
                  </ul>
                </div>
              </li>

  <div class="dropdown d-inline" id="dropdown_nav">
   <a href="javascript:void(0);" class=" btn btn border-0 dropdown-toggle drop_text" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/img/SM.png" class="user-image" alt="User Image" > <b> <?php echo (!isset($_SESSION['name']))?'Account':$udata;?></b></a>

<div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton" id="menu">
    <?php if (!isset($_SESSION['email'])) { ?>
    <a class="dropdown-item" href="account.php"><b>Register</b></a>
    <a class="dropdown-item" href="login.php"><b>Login</b></a>
<?php 
  } else{
    ?>
    <a class="dropdown-item" href="profile.php"><b>Profile</b></a>
    <a class="dropdown-item" href="#"><b>Password Change</b></a>
    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
<?php
}?>

</div>

</li>
</ul>
</div>
</nav>
</header>
  
      <script type="text/javascript">
$(document).ready(function(){

      $("#dropdown_navbars").click(function(){
      $("#menus").toggle();
      });

    });
</script>
      <div class="main">


        <aside class="sidebar left">
          <div>
            <div class="user-panel">
              <div class="pull-left image">
                <img src="../assets/img/SM.png" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Srabanti Dhar</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar">
              <li class="p-3"> <a href="dashbord.php" data-toggle="collapse" data-target="#dashboard" class="collapsed" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">

                <li><a href="#">Customers</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Delivery District</a></li>
                <li><a href="#">Orders</a></li>

              </ul>
            </li>
            <li class="p-3 list_full"> <a href="customer.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="nav-label">Customer</span></a> </li>

            <li class="p-3"> <a href="product.php"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="nav-label">Products</span></a>
      </li>
        <li class="p-3"> <a href="Categorie.php" data-toggle="collapse" data-target="#catagorie" class="collapsed"><i class="fa fa-table" aria-hidden="true"></i><span class="nav-label"> Categories </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="catagorie">
              <li class="active"><a href="categorie_add.php">Add category</a></li>
              <li><a href="sub_categorie.php">Add sub Category</a></li>
              <li><a href="manage_categorie.php">Manage categorie</a></li>
              </ul>
            </li>
        <li class="p-3"> <a href="slider.php"><i class="fa fa-sliders" aria-hidden="true"></i> <span class="nav-label">Slider</span></a>
      </li>
      <li class="p-3"> <a href="feedback_table.php"><i class="fa fa-commenting" aria-hidden="true"></i><span class="nav-label">Feedback</span></a>
      </li>
      
      <li class="p-3"> <a href="orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="nav-label">Orders</span></a>
      </li>

      <li class="p-3"> <a href="delivary_address_table.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="nav-label">Delivary Address</span></a>
      </li>

      <li class="p-3"> <a href="Forms.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="nav-label"> Forms</span></a>
      </li>
      <li class="p-3"> <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="nav-label">  Logout</span></a>
      </li>
    </ul>
    </div>
    </aside>