<?php
include('header.php');
?>

<!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container-fluid">
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
			<thead>
				 <tr class="bg_table_head_custom">
				<th>SL No</th>
				<th>Type</th>
				<th>Description</th>
				<th>Image</th>
				<th>Acion</th>
			</tr>
		</thead>
		<tbody>
			<?php
			global $con;
			$sql="SELECT * FROM owl_slide";
			$query=mysqli_query($con,$sql);
			$sl=1;
			while($data=mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo "<td>".$sl++."</td>";
				echo "<td>".$data['type']."</td>";
				echo "<td>".$data['description']."</td>";

			
			?>
			<td><img src="<?php echo '../assets/slider/'.$data['image']; ?>" width="80px" height="80px"></td>
			<td>
			<span style="width: 80px;display: block;">
          	<a href="owl_slider_update_from.php? uid=<?php echo $data['id'];?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
        	<a href="owl_slider_delete.php? uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"><i class="fa fa-trash"></i></button></span>
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
include("footer.php");
?>