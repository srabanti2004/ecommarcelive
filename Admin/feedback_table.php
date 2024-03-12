<?php
include('header.php');
?>



<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
	 <div class="container-fluid">
         <span>
           <h6><i class="fa fa-sliders" aria-hidden="true"></i> Feedback</h6>
  <div class="table-responsive mt-4">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL No</th>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM feedback";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
        echo "<tr>";
        echo "<td>".$sl++."</td>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['description']."</td>";
        ?>
         <td><img src="<?php echo'../assets/feedback/'.$data['image'];?>" width="50px" height="50px"></td>
        <td>
          
          <span style="width: 80px;display: block;">
            <a href="#">
          <button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
          <a href="#"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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
include('footer.php');
?>