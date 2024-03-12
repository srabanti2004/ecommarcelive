<!DOCTYPE html>
<html>
<head>
  <title>E-Comarce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../assets/css/ecom.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap-grid.min">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.css">

<!-- owl carousel link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="manifest" href="site.webmanifest">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/carausel.js"></script> 

</head>
<body>

	<section class="overl">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
  <img src="../assets/img/admin.gif"class="login_image">
</div>
<div class="col-md-6 login_page">
  <div class="form mx-auto bg-light">
    <div class="form1 mx-auto">
    	<form action="action.php" method="post">
    <div class="row">
      <div class="col-md-12 mt-5">
    
        <input type="email" class="form-control p-4 mt-5" placeholder="Email/Mobile Number"name="email" id="email">
        <div class="mb-3"></div>

        <input type="password" class="form-control inputs p-4" placeholder="password"name="password" id="password">
        <div class="mb-3"></div>

        <a href="index.php"><button class="btn btn bg-warning w-100 text-light p-3"name="submit" onclick="return login_admin();">LOGIN</button></a>
        <div class="mb-4"></div>
        <h6 class="text-center">Forgot Your Password?</h6>
        <div class="mb-3"></div>
      </div>
    </div>
  </div>
</form>
  </div>
</div>
</div>
</div>
</section>

<script type="text/javascript">
  function login_admin(){
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    
    if(email==''){
      alert('enter email');
      return false;
    }
     else if(password==''){
      alert('enter password');
      return false;
    }
    else{
      alert('successfully submit');
    }


  }
</script>


<script type="text/javascript" src="assets/js/main2.js"></script>
<script type="text/javascript" src="assets/js/carausel.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
