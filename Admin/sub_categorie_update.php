<?php
include('header.php');
?>

<?php
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM sub_categorie where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>

<div id="page-wrapper">
<div class="container">
	 <?php
    foreach($record as $val)
    {
      ?>
<form action="sub_categorie_update_action.php" method="post" enctype="multipart/form-data">
  <!-- Name input -->
  <input type="hidden" name="u_id" value="<?php echo $val['id']; ?>">

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="c_id" value="<?php echo $val['c_id']; ?>"/>
    <label class="form-label" for="form4Example1">Categorie</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control"name="Sub_Category" value="<?php echo $val['Sub_Category']; ?>"/>
    <label class="form-label" for="form4Example1">sub_categorie</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Update Now</button>
  <?php
}
?>
</form>
</div>
</div>

<?php
include('footer.php');
?>