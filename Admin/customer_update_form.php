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
		 <?php
    foreach($record as $val)
    {
      ?>
<form action="customer_update.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
<input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="fname" value="<?php echo $val['fname']; ?>"/>
    <label class="form-label" for="form4Example1">Fname</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="lname" value="<?php echo $val['lname']; ?>"/>
    <label class="form-label" for="form4Example1">Lname</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="email" value="<?php echo $val['email']; ?>"/>
    <label class="form-label" for="form4Example1">Email</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="password" value="<?php echo $val['password']; ?>"/>
    <label class="form-label" for="form4Example1">password</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="phone" value="<?php echo $val['phone']; ?>"/>
    <label class="form-label" for="form4Example1">Phone</label>
  </div>

    <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="texts" value="<?php echo $val['texts']; ?>"/>
    <label class="form-label" for="form4Example1">Address</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="gender" value="<?php echo $val['gender']; ?>"/>
    <label class="form-label" for="form4Example1">Gender</label>
  </div>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Upload slider</button>
   <?php
}
?>
</form>
</div>
</div>

<?php
include('footer.php'); 
?>