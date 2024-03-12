<?php
include('header.php');
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container-fluid">
          <h3><i class="fa fa-user-circle-o"></i> <b>Customer Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM customers";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['fname']."</td>";
          echo "<td>".$data['lname']."</td>";
          echo "<td>".$data['email']."</td>";
          echo "<td>".$data['texts']."</td>";
          echo "<td>".$data['gender']."</td>";
          echo "<td>".$data['phone']."</td>";
          
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <a href="customer_update_form.php? uid=<?php echo $data['id']; ?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
        <a href="customer_delete.php? uid=<?php echo $data['id'];?>"><button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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