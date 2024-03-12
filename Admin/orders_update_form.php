<?php 
include('header.php');
?>


<?php
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM order_product where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>
<div id="page-wrapper">
<div class="container">
		 <?php
    foreach($record as $val)
    {
      ?>
<form action="order_update_action.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
<input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="order_date" value="<?php echo $val['order_date']; ?>"/>
    <label class="form-label" for="form4Example1">order Date</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="Size" value="<?php echo $val['Size']; ?>"/>
    <label class="form-label" for="form4Example1">Size</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="payment_type" value="<?php echo $val['payment_type']; ?>"/>
    <label class="form-label" for="form4Example1">payment_type</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="cancel_status" value="<?php echo $val['cancel_status']; ?>"/>
    <label class="form-label" for="form4Example1">cancel_status</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="Actual_Price" value="<?php echo $val['Actual_Price']; ?>"/>
    <label class="form-label" for="form4Example1">Actual_Price</label>
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