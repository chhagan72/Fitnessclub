<?php
include("regiNavbar1.php");
?>
<?php
  require("dbconnect.php");
?>
<div class="wrapper1">
    <div class="container adminContainer">
      <div class="col-left ">
        <div class="login-text">
          <h2>Welcome Back</h2><br>
          <p>ADMIN PANEL LOGIN</p>
        </div>
      </div>
      <div class="col-right">
        <div class="login-form">
          <h2>Login</h2>
          <form method="POST" action="admin_panel\index.php">
            <p>
              <label>Admin Name<span>*</span></label>
              <input type="text" placeholder="Admin Name" required name="AdminName">
            </p>
            <p>
              <label>Password<span>*</span></label>
              <input type="password" placeholder="Password" required name="AdminPassword">
            </p>
            <p>
              <button type="submit" name="login" class="btn">LOG IN</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
        if(isset($_POST['login']))
        {
            $query="SELECT * FROM `users` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password` ='$_POST[AdminPassword]'";
           $result=mysqli_query($conn,$query);
           if(mysqli_num_rows($result)==1)
           {
             
             
             header('location:admin_panel/index.php');
           }
           else
           {
              echo"<script>alert('Incorrect Password');</script>";
           }
        }

        ?>