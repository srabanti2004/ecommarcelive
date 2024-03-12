<?php 
include('header.php');
?>


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

<div id="page-wrapper">
<div class="container">
  <div class="delivary_address_update mx-auto mb-5">
    <div class="delivary_address_update_2 mx-auto">
    <h2 class="text-info text-center mt-3"><b>Delivary Address Update</b></h2>
     <?php
    foreach($record as $val)
    {
      ?>
<form action="profile_update_action.php" method="post" enctype="multipart/form-data" class="mt-5">
  <!-- Name input -->
<input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="fname" value="<?php echo $val['fname']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">First Name</label>
  </div>

   <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="lname" value="<?php echo $val['lname']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Last Name</label>
  </div>


    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="phone" value="<?php echo $val['phone']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">phone</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="email" value="<?php echo $val['email']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Email</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="texts" value="<?php echo $val['texts']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Address</label>
  </div>

<div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="gender" value="<?php echo $val['gender']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Gender</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-5 w-75 mx-auto p-3" name="submit">Save Delivary address</button>
    <div class="form_bottom"></div>
  <div class="mb-5"></div>
   <?php
}
?>
</form>
</div>
</div>
</div>
</div>

<?php
include('footer.php'); 
?>