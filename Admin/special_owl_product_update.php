<?php
include('header.php');
?>

<?php
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM owl_newslide where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>

<div id="page-wrapper">
<div class="container">
	 <?php
    foreach($record as $val)
    {
      ?>
<form action="special_owl_product_update_action.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
  <input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="status" value="<?php echo $val['status']; ?>"/>
    <label class="form-label" for="form4Example1">status</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="type" value="<?php echo $val['type']; ?>"/>
    <label class="form-label" for="form4Example1">Type</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="Description" value="<?php echo $val['Description']; ?>"/>
    <label class="form-label" for="form4Example1">Description</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="file" id="form4Example2" class="form-control"name="image"/>
    <input type="hidden" name="old_image" value="<?php echo $val['image'];?>">
    <img src="<?php echo '../assets/slider/'.$val['image'];?>" width="100px"height="100px">

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