<?php                   
include('header.php');
?>

	<section class="overl">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 login_image">
<div class="login_stikar mx-auto">
  <img src="assets/img/img.jpg"class="stikar_img">
  <h2 class=" text-center mt-3"><a href="home.php"class="text-warning"><b>Shop<span class="text-light">Wo</span>rld</b></a></h2>
</div>
</div>
<div class="col-md-6 login_page">
  <div class="form mx-auto bg-light">
    <div class="form1 mx-auto">
    	<form action="user_loginaction.php" method="post" >
    <div class="row">
      <div class="col-md-12 mt-5">
        <input type="email" class="form-control p-4" id="email" placeholder="Email/Mobile Number"name="email">
        <div class="mb-3"></div>

        <input type="password" class="form-control inputs p-4" id="password" placeholder="password"name="password">
        <div class="mb-3"></div>

        <button class="btn btn bg-warning w-100 text-light p-3"name="submit" onclick="return validation_login();">LOGIN</button>
        <div class="mb-4"></div>

        <a href=""><h6 class="text-center">Forgot Your Password?</h6></a>
        <div class="mb-5"></div>
        <button class="btn btn bg-warning w-100 text-light p-3">LOGIN WITH OTP</button>
        <div class="mb-5"></div>
        
        <div class="mb-5"></div>
        <div class="account text-center">
        <a href="account.php" class="text-center">Create new Account?</a>
      </div>
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
  function validation_login(){
    
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    if(email=='') {
      alert('enter your email');
      return false;
    }
     else if(password=='') {
      alert('enter your password');
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