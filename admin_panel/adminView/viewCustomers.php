<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center bg-dark">S.N.</th>
        <th class="text-center bg-dark">Username </th>
        <th class="text-center bg-dark">Email</th>
        <th class="text-center bg-dark">Password</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from register";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["user"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["password"]?></td>
    </tr>
    
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>