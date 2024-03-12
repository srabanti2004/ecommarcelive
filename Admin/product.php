<?php
include('header.php');
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container-fluid">
          <h3><i class="fa fa-product-hunt" aria-hidden="true"></i> <b>Products Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
        	<th>SL No.</th>
        	<th>Catagory</th>
        	<th>Sub_Category</th>
        	<th>Name</th>
        	<th>Description</th>
        	<th>Actual_Price</th>
        	<th>Discount</th>
        	<th>Discount_Price</th>
        	<th>Size</th>
          <th>Type</th>
        	<th>Image</th>
        	<th>Action</th>
        </tr>
    </thead>
    <tbody>
    	 <?php
        global $con;
        $sql="SELECT * FROM product";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['Catagory']."</td>";
          echo "<td>".$data['Sub_Category']."</td>";
          echo "<td>".$data['Name']."</td>";
          echo "<td>".$data['Description']."</td>";
          echo "<td>".'<i class="fa fa-inr" aria-hidden="true"></i>'.$data['Actual_Price']."</td>";
          echo "<td>".$data['Discount']."</td>";
          echo "<td>".$data['Discount_Price']."</td>";
          echo "<td>".$data['Size']."</td>";
          echo "<td>".$data['type']."</td>";
          
        ?>
        <td><img src="<?php echo '../assets/products/'.$data['Image'];?>" width="50px" height="50px"></td>
        <td>
          <span style="width: 80px;display: block;">
            <a href="product_update_form.php? uid=<?php echo $data['id']; ?>">
          <button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
        <a href="product_delete.php? uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></a>
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