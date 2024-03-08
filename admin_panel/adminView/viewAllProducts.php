<div >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center bg-dark">S.N.</th>
        <th class="text-center bg-dark">Product Name</th>
        <th class="text-center bg-dark">Unit Price</th>
      </tr>
    </thead>
    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "gym";

$conn = mysqli_connect($host,$username,$password,$database);

        //create connection
        $conn=mysqli_connect($host,$username,$password,$database);

        //Check Connection

        if(!$conn){
            die("Connection Failed:" . mysqli_connect_error());
        }

        //query

        $sql ="CREATE DATABASE IF NOT EXISTS $database";

        //execute query

        if(mysqli_query($conn,$sql)){

        $conn=mysqli_connect($host,$username,$password,$database);

        //sql to create new table
               $sql ="CREATE TABLE IF NOT EXISTS producttb
               (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
               product_name VARCHAR(25) NOT NULL,
               product_price FLOAT,
               product_image VARCHAR(100)
               );";

               if(!mysqli_query($conn,$sql)){
                echo "Error creating table:".mysqli_error($conn);

               }

                }

                
            

            //get product from the database

          
                $sql="SELECT * FROM producttb";
                $result =$conn->query($sql);
                $count=1;
                if ($result-> num_rows > 0){
                while ($row=$result->fetch_assoc()){
           
               
                  
               ?>

                

   <tr>
      <td><?=$count?></td>
      <td><?=$row["product_name"]?></td>
      <td><?=$row["product_price"]?></td>
    
    </tr>
    
    <?php
            $count=$count+1;
           
        }
    }
  
    ?>
  </table>

  
  

  