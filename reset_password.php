<?php 
include('header.php');
?>
<div class="container">
  <div class="reset_password mx-auto mt-4">
 <div class="card login-form">
  <div class="card-body">
    <h3 class="card-title text-center text-danger">Change Password</h3>

    <?php
$id=$_GET['uid'];
?>

<?php
global $con;
$record=array();
$sql="SELECT * FROM customers where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>

 <?php
    foreach($record as $val)
    {
      ?>


    <div class="card-text">
      <form action="reset_password_action.php" method="post" onsubmit ="return check_password();">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Hlo user!</strong> You Can Change your Password Than Put your Strong Password !!
  <a class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </a>
</div>
        <div class="form-group">
          <input type="hidden" value="<?php echo $id;?>" name="uid">
          <label><b>Your Old Password</b></label>
          <input type="text" value="<?php echo $val['password'];?>" name="password" class="form-control form-control-sm">
          <label for="exampleInputEmail1" class="text-success"><b>Your new password</b></label>
          <input type="password"  name="newpassword" class="form-control form-control-sm" id="new_password">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-primary"><b>Confirm password</b></label>
          <input type="password" name="newpassword" class="form-control form-control-sm" id="confirm_password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block submit-btn">Confirm</button>
      </form>
    </div>
    <?php 
  }
    ?>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
  function check_password(){
  var new_password=document.getElementById('new_password').value;
  var confirm_password=document.getElementById('confirm_password').value;

if(new_password!=confirm_password)
{
  alert('check your new password');

}
else{
  alert('correct');
}
}
</script>