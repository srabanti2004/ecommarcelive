<?php
include("header.php");
?>


<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
	 <div class="container-fluid">
         <span>
           <h6><i class="fa fa-sliders" aria-hidden="true"></i> <b>Slider List</b><a href="owl_slide.php"><button class="btn btn-outline-primary p-3 ml-4">Destination of Image</button></a>
            <a href="special_owlproducts.php"><button class="btn btn-outline-success p-3 ml-4">Special_products</button></a>
  <div class="table-responsive mt-4">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL No</th>
          <th>Type</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM slider";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
         echo "<td>".$sl++."</td>";
        echo "<td>".$data['type']."</td>";
        ?>
         <td><img src="<?php echo'../assets/slider/'.$data['image'];?>" width="170px" height="100px"></td>
        <td>
          
          <span style="width: 80px;display: block;">
            <a href="slider_form.php? uid=<?php echo $data['id']; ?>">
          <button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
          <a href="slider_delete.php? uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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
	</div>


<?php
include("footer.php");
?>

