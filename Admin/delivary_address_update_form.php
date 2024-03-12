<?php 
include('header.php');
?>


<?php
$id=$_GET['uid'];
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
		 <?php
    foreach($record as $val)
    {
      ?>
<form action="delivary_address_update_action.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
<input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="name" value="<?php echo $val['name']; ?>"/>
    <label class="form-label" for="form4Example1">Name</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="phone" value="<?php echo $val['phone']; ?>"/>
    <label class="form-label" for="form4Example1">phone</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="pin" value="<?php echo $val['pin']; ?>"/>
    <label class="form-label" for="form4Example1">pin</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="locality" value="<?php echo $val['locality']; ?>"/>
    <label class="form-label" for="form4Example1">locality</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="city" value="<?php echo $val['city']; ?>"/>
    <label class="form-label" for="form4Example1">city</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="address" value="<?php echo $val['address']; ?>"/>
    <label class="form-label" for="form4Example1">address</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="road" value="<?php echo $val['road']; ?>"/>
    <label class="form-label" for="form4Example1">Road</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="state" value="<?php echo $val['state']; ?>"/>
    <label class="form-label" for="form4Example1">state</label>
  </div>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Upload Delivary address</button>
   <?php
}
?>
</form>
</div>
</div>

<?php
include('footer.php'); 
?>