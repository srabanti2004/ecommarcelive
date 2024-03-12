<?php 
include('header.php');
?>


<?php
$id=$_GET['u_id'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM delivary_address where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>

<div id="page-wrapper">
<div class="container">
  <div class="delivary_address_update mx-auto mb-5">
    <div class="delivary_address_update_2 mx-auto mb-3">
    <h3 class="text-info text-center mt-3"><b>Delivary Address Update</b></h3>
		 <?php
    foreach($record as $val)
    {
      ?>
<form action="delivary_address_update_action.php" method="post" enctype="multipart/form-data" class="mt-5">
  <!-- Name input -->
<input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">
<input type="hidden" name="prd_id" value="<?php echo $prd_id?>">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="name" value="<?php echo $val['name']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Name*</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="phone" value="<?php echo $val['phone']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Phone*</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="pin" value="<?php echo $val['pin']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">pin*</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="locality" value="<?php echo $val['locality']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Locality*</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="city" value="<?php echo $val['city']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">City*</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="address" value="<?php echo $val['address']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Address*</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="road" value="<?php echo $val['road']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">Road*</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="state" value="<?php echo $val['state']; ?>"/>
    <label class="form-label text-danger" for="form4Example1">State*</label>
  </div>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-5 p-3 w-75 mx-auto" name="submit">Save Delivary address</button>
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