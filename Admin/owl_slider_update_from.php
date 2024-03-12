<?php
include('header.php');
?>

<?php
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM owl_slide where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>

<div id="page-wrapper">
<div class="container">
   <?php
    foreach($record as $val)
    {
      ?>
<form action="owl_slide_update_action.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
  <input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="status" value="<?php echo $val['staus']; ?>"/>
    <label class="form-label" for="form4Example1">Status</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="type" value="<?php echo $val['type']; ?>">
    <label class="form-label" for="form4Example1">Type</label>
  </div>
<!--description-->
<div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="description" value="<?php echo $val['description']; ?>"/>
    <label class="form-label" for="form4Example1">description</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="file" id="form4Example2" class="form-control"name="image"/>
    <input type="hidden" name="old_image" value="<?php echo $val['image'];?>">
    <img src="<?php echo $val['image'];?>" width="100px"height="100px">

    <label class="form-label" for="form4Example2">Upload Image</label>
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