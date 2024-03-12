<!DOCTYPE html>
<html>
<head>
  <title>Accounts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/ecom.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  
<section class="h-90 bg-dark">
  <div class="container reg_back">
    <div class="row d-flex justify-content-center align-items-center h-70">
      <div class="col">
        <div class="card card-registration my-3">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/img4.webp" alt="Sample photo" class="reg_img"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">REGISTER HERE</h3>
                <form action="regaction.php" method="post"onsubmit="return validation_one();">
                <div class="row">

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text"  class="form-control form-control-lg" name="fname"id="fname" />
                      <label class="form-label" for="form3Example1m">First name <span class="text-danger">**</span></label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text"  class="form-control form-control-lg"name="lname" id="lname"/>
                      <label class="form-label" for="form3Example1n">Last name <span class="text-danger">**</span></label>
                    </div>
                  </div>
                </div>


                <div class="form-outline mb-4">
                  <input type="text"  class="form-control form-control-lg" name="email"  id="email" />
                  <label class="form-label" for="form3Example9">Email ID <span class="text-danger">**</span></label>
                </div>

                 <div class="form-outline mb-4">
                  <input type="password"  class="form-control form-control-lg"name="password" id="password"/>
                  <label class="form-label" for="form3Example8">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text"  class="form-control form-control-lg" name="phone"  id="phone"/>
                  <label class="form-label" for="form3Example9">Phone Number<span class="text-danger">**</span></label>
                </div>


                <div class="form-outline mb-4">
                  <textarea class="form-control" aria-label="With textarea" name="texts"id="address"></textarea>
                  <label class="form-label" for="form3Example99">Address</label>
                </div>

              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: &nbsp;</h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="gender1"
                      value="Female" />
                    <label class="form-check-label" for="femaleGender"> Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender"  id="gender2"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                </div>

                <div class="d-flex justify-content-center pt-3">
<button type="submit" class="btn btn bg-warning w-75 p-3" name="submit"><b>SAVE AND DELIVER HERE</b></button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
  function validation_one(){
    var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var phone=document.getElementById('phone').value;
    var address=document.getElementById('address').value;
  
    var gender1 = document.getElementById('gender1').checked;
    var gender2 = document.getElementById('gender2').checked;

    regx_email=/^[a-z][a-zA-Z0-9-/_/.]+[@][a-z]+[/.][a-z]{2,3}$/;

    if(fname==''){
      alert('enter your fname');
      return false;
    }
     else if(lname==''){
      alert('enter your lname');
      return false;
    }
    
    else if(email==''){
      alert('enter your email');
      return false;
    }
    else if(!email.match(regx_email))
        {
            alert('Your Email Pattren is wrong');
            document.getElementById("email").focus();
            return false;
        }
    else if(password==''){
      alert('enter your password');
      return false;
    }
    else if(password.length<8)
        {
            alert('Enter your  correct password thats length will be 8');
            document.getElementById("password").focus(); 
            return false;  
        }
    else if(phone==''){
      alert('enter your phone');
      return false;
    }
    else if(phone.length<10)
        {
            alert('Enter your phone number');
            document.getElementById("phone").focus(); 
            return false;  
        }
    else if(address==''){
      alert('enter your address');
      return false;
    }
    else if(gender1==false && gender2==false)
      {
        alert("Please checked your gender!");
        
        return false;
      }

    else{
      alert('successfully submit');
      return true;
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

   