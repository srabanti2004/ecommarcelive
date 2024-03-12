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
          <th>Order Date</th>
          <th>Size</th>
          <th>Payment Type</th>
          <th>Cancel_Status</th>
          <th>Actual_Price </th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM order_product";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['order_date']."</td>";
          echo "<td>".$data['Size']."</td>";
          echo "<td>".$data['payment_type']."</td>";
          echo "<td>".$data['cancel_status']."</td>";
          echo "<td>".$data['Actual_Price']."</td>";

          
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <a href="orders_update_form.php? uid=<?php echo $data['id']; ?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
        <a href="order_delete.php? uid=<?php echo $data['id'];?>"><button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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