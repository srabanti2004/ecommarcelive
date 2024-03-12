<?php
include('header.php');
?>
  <div class="container background">
          <h3><i class="fa fa-user-circle-o"></i> <b>Customer Details</b></h3>
  <table class="table table-striped mt-3">
      <thead>
        <tr border="1">
          <th>name</th>
          <th>email</th>
          <th>password</th>
          <th>address</th>
          <th>phone</th>
          <th>update</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM entey";
        $result=mysqli_query($con,$sql);
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$data['name']."</td>";
          echo "<td>".$data['email']."</td>";
          echo "<td>".$data['password']."</td>";
          echo "<td>".$data['address']."</td>";
          echo "<td>".$data['phone']."</td>";
        ?>
        <td><button name="submit" class=" btn btn rounded bg-success border-0" style="width:90px;height:37px;">Update</button></td>
        <td><button name="submit" class=" btn btn rounded bg-danger border-0" style="width:90px;height:37px;">Delete</button></td>
        <?php 

          echo "</tr>";
        }
        ?>

      </tbody>
    </div>
  </table>
<?php
include('footer.php');
?>

