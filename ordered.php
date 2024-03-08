<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "gym";

$conn = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error()){
    echo"<script>
        alert('cannot connect to database');
        window.location.href='Cart.php';
        </script>";
        exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['ordered']))
    {
        $query1="INSERT INTO `order_details`( `fname`, `lname`, `email`, `mobil`, `address1`, `address2`, `city`, `state`, `zip`, `pname`, `pprice`) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[mobil]','$_POST[address1]','$_POST[address2]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[pname]','$_POST[pprice]')";
        if(mysqli_query($conn,$query1))
        {
            $Order_Id=mysqli_insert_id($conn);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES ('?','?','?','?')";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='index.php';
                </script>";
            }
        }
        else
        {
            echo"<script>
            alert('SQL Error');
            window.location.href='Cart.php';
            </script>";
        }
    }

}  
?>