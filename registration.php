<?php 
session_start();
include("regiNavbar1.php");
?>


<?php
        include ("dbconnect.php");

        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email_search = " select * from register where email='$email' ";
            $query = mysqli_query($conn,$email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);

                $db_pass = $email_pass['password'];

                $_SESSION['user'] = $email_pass['user'];


                $pass_decode= password_verify($password,$db_pass);

                if($pass_decode){
                    echo "login sucessful";
                    ?>
<script>
    location.replace("Product.php");
</script>
<?php

                }else{
                echo "password incorrect";
                }
            }else{
                echo "invalid email";
            }

        }
    ?>
<div class="continer">


    <div class="hero d-flex justify-content-center align-item-center">
        <div class="form-box ">
            <div class="button-box d-flex">
                <div id="btn"></div>
                <button type="button" class="toogle-btn" onclick="login()">LOG IN</button>
                <button type="button" class="toogle-btn" id="b1" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="img/fb.png">
                <img src="img/tw.png">
                <img src="img/gp.png">
            </div>
            <form id="login" class="input-group" method="POST"
                action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="email" class="input-field" placeholder="Enter Email" required>
                <input type="text" name="password" class="input-field" placeholder="ENTER PASSWORD" required>
                <input type="checkbox" class="chech-box"><span class="regiLogSpan">Remember Password</span>
                <button type="submit" name="login" class="btn rounded-pill submit-btn ">LOG IN</button>


            </form>
            <?php
                   
                $server_name="localhost";
                $username="root";
                $password="";
                $database_name="gym";
                $conn=mysqli_connect($server_name,$username,$password,$database_name);

                if(!$conn)
                {
                        die("Connect Failed :".mysqli_connect_error());

                }
                if(isset($_POST['login']))
                {
                    
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        

                    $sql_query = "SELECT * FROM register WHERE email = '$email' ";
                    $pass = "SELECT * FROM register WHERE password = '$password' ";
                    $name="SELECT user FROM register WHERE email='$email'";
                    $result=$conn->query($name);
                    if(!$result){
                        die("Query failed:".$conn->error);
                    }
                    while($row=$result->fetch_assoc()){
                        $user=$row['user'];
                    }
                        $query=mysqli_query($conn,$sql_query);
                        $p_pass=mysqli_query($conn,$pass);

                    
                    $email_count=mysqli_num_rows($query);
                    $p_count=mysqli_num_rows($p_pass);
                    
                    if($email_count){
                            $email_pass=mysqli_fetch_assoc($query);
                            if($p_count){
                                
                                $_SESSION['username']=$user;
                                echo"<script>
                                    alert('Login Successful. Welcome');
                                    window.location.href = 'Product.php';
                                </script>";
                            }else{
                                $alert = "<script>alert('Invalid Password');</script>";
                            echo $alert;
                            }
                        }else{
                            $alert = "<script>alert('Invalid Email');</script>";
                            echo $alert;
                    }
                        mysqli_close($conn);
                }
       
       
   
            
            ?>

            <form id="register" class="input-group" id="b1" method="POST" action="">
                <input type="text" class="input-field" name="user" placeholder="User ID" required>
                <input type="email" class="input-field" name="email" placeholder="Email ID" required>
                <input type="text" class="input-field" name="password" placeholder="ENTER PASSWORD" required>
                <input type="checkbox" class="chech-box"><span class="regiLogSpan">I Agree to the Terms &
                    Conditions</span>
                <button name="submit" type="submit" class="btn rounded-pill submit-btn" id="b1">Register</button>
            </form>
        </div>
        <?php
           $server="localhost";
           $username="root";
           $password="";
           $database="gym";
           $conn=mysqli_connect($server,$username,$password,$database);
           if(!$conn)
           {
                die("connection failed:".mysql_connect_error());
           }

           if(isset($_POST['submit']))
           {
            $name=$_POST['user'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql_query="INSERT INTO register(user,email,password)VALUES ( '$name','$email','$password')";
            if(mysqli_query($conn,$sql_query))
            {
                $alert ="<script>alert('Register Successfully');</script>";
                echo $alert;
                // header('location:index.php ');
            }else{
                echo "error" .$sql."". mysqli_error($conn);
            }

            mysqli_close($conn);

           }
        
        ?>
    </div>
</div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>
</body>

</html>