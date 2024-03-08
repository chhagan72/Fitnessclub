<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center bg-dark">S.N.</th>
        <th class="text-center bg-dark">fname </th>
        <th class="text-center bg-dark">lname </th>
        <th class="text-center bg-dark">email</th>
        <th class="text-center bg-dark">Product_name</th>
        <th class="text-center bg-dark">product_price</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from order_details";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["fname"]?></td>
      <td><?=$row["lname"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["pname"]?></td>
      <td><?=$row["pprice"]?></td>
    </tr>
    
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>