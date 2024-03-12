<?php
include("header.php");
?>


<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container bg-light">
                  <div class="table-responsive mt-4">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL NO</th>
          <th>Categorie_id</th>
          <th>Sub-Category</th>
          <th>Action</th>
</tr>
</thead>
<tbody>
  <?php
  global $con;
  $sql="SELECT sub_categorie.*,categorie.categorie FROM sub_categorie,categorie WHERE sub_categorie.c_id=categorie.id";
  $query=mysqli_query($con,$sql);
  $sl=1;
  while($data=mysqli_fetch_assoc($query))
  {
    echo "<tr>";
    echo "<td>".$sl++."</td>";
    echo "<td>".$data['categorie']."</td>";
    echo "<td>".$data['Sub_Category']."</td>";
  ?>

  <td>
    <span style="width: 80px;display: block;">
          <a href="sub_categorie_update.php? uid=<?php echo $data['id'];?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
         <a href="sub_categorie_delete.php? uid=<?php echo $data['id'];?>"><button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
        </span>
  </td>
  <?php
  echo "</tr>";
}
  ?>
</tbody>
</table>
</div>
</div>
</div>

<?php
include('footer.php');
?>