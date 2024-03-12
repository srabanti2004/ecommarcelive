
<?php
include('header.php');
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container-fluid">
          <h3><i class="fa fa-user-circle-o"></i> <b>Delivary Address Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Pin</th>
          <th>City</th>
          <th>Address</th>
          <th>Road</th>
          <th>State</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM delivary_address";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['name']."</td>";
          echo "<td>".$data['phone']."</td>";
          echo "<td>".$data['pin']."</td>";
          echo "<td>".$data['city']."</td>";
          echo "<td>".$data['address']."</td>";
          echo "<td>".$data['road']."</td>";
          echo "<td>".$data['state']."</td>";
          
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <a href="delivary_address_update_form.php? uid=<?php echo $data['id']; ?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
        <a href="delivary_address_delete.php? uid=<?php echo $data['id'];?>"><button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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



