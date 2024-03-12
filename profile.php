<?php
include('header.php');
?>

  <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
      <button id="openFileButton"  class=" container-fluid border-0  " style="position: relative;">
      <img src="assets/img/SM.png" class="img_upload_size mt-3" onclick="show()" id="image-show">
      <input type="file" id="fileInput" style="display: none;" onchange="readURL(this);">
    <i class="fa fa-camera" aria-hidden="true"style="position: absolute; top: 100px;color:black;left:189px;"></i>
    <input type="file" id="fileInput" style="display: none;" onchange="readURL(this);">
    <pre id="fileContent"></pre>
  </button>
   <?php
    $alldata=customerdetails($_SESSION['userid']);
      foreach($alldata as $value)
      {
          ?>
            <h5 class="my-3"><?php echo $value['fname'];?></h5>
            <p class="text-muted mb-1">User </p>
            <p class="text-muted mb-4"><?php echo $_SESSION['texts'];?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1 ml-1">Message</button>
            </div>
          </div>
        </div>

        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
            </ul>
          </div>
        </div>
      </div>

  <script type="text/javascript">
  function readURL(input)
  {
    if(input.files&&input.files[0])
    {
      var reader=new FileReader();
      reader.onload=function(e)
      {
        $('#image-show')
        .attr('src',e.target.result)
        .width(115)
        .height(115)
      };
      reader.readAsDataURL(input.files[0]);
      }
  }
</script>


   
      <div class="col-lg-8">
        <div class="card mb-5">
          <div class="edit_icon mt-2">
          <a href="profile_update.php?uid=<?php echo $_SESSION['userid'];?>"><i class="fa fa-edit"></i></a>
        </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-center"><i class="fa fa-user-circle" aria-hidden="true"></i> Full Name</p>
              </div>
              <div class="col-sm-9">
                <p><?php echo $value['fname'].' '.$value['lname'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-center"><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
              </div>
              <div class="col-sm-9">
                <p><?php echo $value['email'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-center"><i class="fa fa-phone" aria-hidden="true"></i> Phone</p>
              </div>
              <div class="col-sm-9">
                <p><?php echo $value['phone'];?></p>
              </div>
            </div>
            <hr>
          
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-center"><i class="fa fa-home" aria-hidden="true"></i> Address</p>
              </div>
              <div class="col-sm-9">
              <p><?php echo $value['texts'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-center"><i class="fa fa-venus" aria-hidden="true"></i> Gender</p>
              </div>
              <div class="col-sm-9">
              <p><?php echo $value['gender'];?></p>
              </div>
            </div>
          </div>
        </div>
        <?php 
      }
    
      ?>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Website Markup
                </p>
                <p class="mb-1" style="font-size: .77rem;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Process</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"> <i class="fa fa-check-square-o" aria-hidden="true"></i>Shopping</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
    
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Feedback
                </p>
                <p class="mb-1" style="font-size: .77rem;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Product</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Style</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Bag</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--image file-->
<script type="text/javascript">
  function show() {
 document.getElementById('openFileButton').addEventListener('click', function () {
  // Trigger click event on the hidden file input element
  document.getElementById('fileInput').click();
});

document.getElementById('fileInput').addEventListener('change', function (event){
  const file = event.target.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = function (e) {
    const content = e.target.result;
    document.getElementById('fileContent').textContent = content;
  };
  // reader.readAsText(file);
});
}
</script>

<?php
include('footer.php');
?>

