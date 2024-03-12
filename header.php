<?php
session_start();
include('datastore.php');
include('function.php');
?>

<?php
if (isset($_SESSION['fname'])){
  $udata=explode(" ",$_SESSION['fname']);
  $udata=$udata[0];
}
?>

<?php
if (isset($_SESSION['uname'])){
  // $update=explode("",$_SESSION['uname']);
  // $update=$update[1];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-Comarce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/ecom.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.css">

<!-- owl carousel link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="manifest" href="site.webmanifest">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/carausel.js"></script>  -->

</head>
<body>
<header>
<!--top navbar-->
<section class="over">
<div class="container-fluid">
  <div class="row top_header">
    <div class="col-md-12 text-center text-light">
      <h6 class="animate-charcter mt-2"><b>EXTRA 5% INSTANT DISCOUNT FOR ALL ONLINE PAYMENTS. FREE DELIVERY.</b></h6>
    </div>
  </div>
</div>
</section>

<!--navbar-->
<section class="background1"id="myHeader">
  <div class="row nav_shadow m-0 p-0">
    <div class="col-md-6">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-warning" href="#"><h2><b>Shop<span class="text-light">Wo</span>rld</b></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav1">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link nav_fonts item3 text-light" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link nav_fonts item3 text-light" href="collection.php">Women</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link nav_fonts item3 text-light" href="collection_man_product.php">Man</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_fonts item3 text-light"href="collection.php">collection</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link nav_fonts item3 text-light"href="brand.php">Brands</a>
        </li>
          <li class="nav-item ">
          <a class="nav-link nav_fonts item3 text-light"href="collection_shoes_product.php">Shoes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>


    <div class="col-md-6 search_bar">
      <form class="form-inline">
    <span><input type="search" placeholder="search product.brands..."class="ml-2 input_nav p-0 mt-3 rounded" id="input_box" aria-describedby="btnGroupAddon2" autocomplete="off"><button type="button" class="btn bg-warning mb-1" style="height:35px;position: relative;right:-3px;">
    <i class="fa fa-search"></i></button>
    <div class="result_box" style="width: 300px;background-color:white;z-index: -1;position:fixed;top:73px;height:0px;"></div>
</form>

      <script>
        let availableoption=[
          'Men',
          'Women',
          'Makeup',
          'One pice',
          'shirt',
          'psnts',
          'top',
          'saree',
          'Nikers',
          'Boot',
        ];
        const resultbox=document.querySelector(".result_box");
        const inputbox=document.getElementById("input_box");
        inputbox.onkeyup=function(){
          let result=[];
          let input = inputbox.value;
          if(input.length){
            result=availableoption.filter((keyword)=>{
              return keyword.toLowerCase().includes(input.toLowerCase());
            });
            console.log(result);
          }
          display(result);
        }
        function display(result){
          const content=result.map((list)=>{
            return "<li onclick=selectInput(this)>"+list+"</li>";
          });
          resultbox.innerHTML="<ul>"+content.join('')+"</ul>";
        }
        
        function selectInput(list){
          inputbox.value=list.innerHTML;
          resultbox.innerHTML='';
        }
        </script>
           

   <div class="dropdown show d-inline" id="dropdown_nav">
   <a href="javascript:void(0);" class=" btn btn background1 border-0 dropdown-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <b> <?php echo (!isset($_SESSION['fname']))?'Account':$udata ;?></b>
  </a>
<div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton" id="menu">
    <?php if(!isset($_SESSION['email'])){ ?>
    <a class="dropdown-item" href="account.php"><b>Register</b></a>
    <a class="dropdown-item" href="login.php"><b>Login</b></a>
<?php 
  } else{
    ?>
    <a class="dropdown-item" href="profile.php"><b>Profile</b></a>
    <a class="dropdown-item" href="reset_password.php?uid=<?php echo $_SESSION['userid'];?>"><b>Password Change</b></a>
    <a class="dropdown-item" href="myorder.php?uid=<?php echo $_SESSION['userid'];?>"><b>My Orders</b></a>
    <a class="dropdown-item" href="userlogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
<?php
}
?>

</div>
<?php
if(isset($_SESSION['email']))
{
$wishlist=countwhish($_SESSION['userid']);
$addtocart=countaddtocart($_SESSION['userid']);
}
else
{

}
?>
    <a href="wishlist.php" class="text-light mt-2 nav_fonts1 ml-4"><i class="fa fa-gratipay text-light" aria-hidden="true"></i></a><span class="text-light bg-success rounded" style="width:50px;height:30px;border:1px solid black;border-radius: 60%;background-color: greenyellow;border:1px solid black;"><?php if(isset($_SESSION['email'])){ echo  $wishlist;} else{} ?></span>

<?php


?>
   <a href="addtocart.php"class="text-light ml-3 mt-2 nav_fonts1" id=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> <span class="text-light bg-success rounded" style="width:50px;height:30px;border:1px solid black;border-radius: 60%;background-color: greenyellow;border:1px solid black;"><?php if(isset($_SESSION['email'])){ echo  $addtocart;} else{} ?></span>

  <buton><a href="savefor_later_product.php" class="text-light nav_fonts1 ml-5"><i class="fa fa-bars" aria-hidden="true"id="btn1"></i></a></buton>
  <div class="mb-3"></div>
</div>
</div>
</section>


<script type="text/javascript">
$(document).ready(function(){

      $("#dropdown_nav").click(function(){
      $("#menu").toggle();
      });

    });
</script>


<span onclick="openNav()"></span>
  </div>
</section>


<script type="text/javascript">

function openNav() {
  document.getElementById("mySidenav").style.width = "348px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "348px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}
</script>
