<?php
    session_start();
    if(isset($_SESSION['cart'])&& ($_SESSION['cart'])>0);
    
?>
<?php
include("navbar.php"); 
?>

<div class="container orderContainer mt-2">
  <form action="Cart.php" method="POST">
    <div class="row orderRow">
      <div class="col-12">
        <h3>Billing Address</h3>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="fname" class="d-flex orederLable"><i class="fa fa-user orderIcon"></i> Full Name</label>
        <input type="text" id="fname" name="fname" placeholder="Enter Your first name" required class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="cname" class="orederLable">Last Name</label>
        <input type="text" id="cname" name="lname" placeholder="Enter last name" required class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="email" class="d-flex orederLable"><i class="fa fa-envelope orderIcon"></i> Email</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="ccnum" class="orederLable">Mobil No.</label>
        <input type="text" id="ccnum" name="mobil" placeholder="Enter Mobile number" required minlength="10" maxlength="10"
          class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="adr" class="d-flex orederLable"><i class="fa fa-address-card-o orderIcon"></i> Address</label>
        <input type="text" id="adr" name="address1" placeholder="Address 1" required class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="expmonth">Address 2</label>
        <input type="text" id="expmonth" name="address2" placeholder="Address 2" required
          class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="city" class="d-flex orederLable"><i class="fa fa-institution orderIcon"></i> City</label>
        <input type="text" id="city" name="city" placeholder="City" required class="orderInput">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="expyear" class=" orederLable">Product Name</label>
          <?php           
            if(isset($_POST['submit'])){
              echo "<input name='product_name' type='text' id='p1' class='orderInput' readonly value=".$_SESSION['buy1n']." >";
            }
            else if(isset($_POST['submit'])){
              echo "<input name='product_name' type='text' id='p2'class='orderInput'  readonly value=".$_SESSION['buy2n'].">";
            }
            // else if(isset($_POST['submit3'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy3n'].">";
            // }
            // else if(isset($_POST['submit3'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy3n'].">";
            // }
            // else if(isset($_POST['submit4'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy4n'].">";
            // }
            // else if(isset($_POST['submit5'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy5n'].">";
            // }
            // else if(isset($_POST['submit6'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy6n'].">";
            // }
            // else if(isset($_POST['submit7'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy7n'].">";
            // }
            // else if(isset($_POST['submit8'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy8n'].">";
            // }
            // else if(isset($_POST['submit9'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy9n'].">";
            // }
            // else if(isset($_POST['submit10'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy10n'].">";
            // }
            // else if(isset($_POST['submit11'])){
            //   echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy11n'].">";
            // }
                          
            else{
              echo "<input name='product_name' type='text' id='expyear' class='orderInput'  readonly value=".$_SESSION['buy1n'].">";
            }
          ?>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="state" class=" orederLable">State</label>
            <input type="text" id="state" name="state" placeholder="State" required class="orderInput">
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="zip" class=" orederLable">Pin-code</label>
            <input type="text" id="zip" name="zip" placeholder="Pin-code" required class="orderInput">
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="expyear" class="orederLable" >Product Price</label>
        <?php
          if(isset($_POST['submit']))
          {
            echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy1p'].">";
          }
          else if(isset($_POST['submit'])){
            echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy2p'].">";
          }
          // else if(isset($_POST['submit3'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy3p'].">";
          // }
          // else if(isset($_POST['submit4'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy4p'].">";
          // }
          // else if(isset($_POST['submit5'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy5p'].">";
          // }
          // else if(isset($_POST['submit6'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy6p'].">";
          // }
          // else if(isset($_POST['submit7'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy7p'].">";
          // }
          // else if(isset($_POST['submit8'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy8p'].">";
          // }
          // else if(isset($_POST['submit9'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy9p'].">";
          // }
          // else if(isset($_POST['submit10'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy10p'].">";
          // }
          // else if(isset($_POST['submit11'])){
          //   echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy11p'].">";
          // }
          else{
            echo "<input type='text' id='expyear' name='product_price' class='orderInput'  readonly value=".$_SESSION['buy2p'].">";
          }
        ?>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input name="ordered" type="submit" value="Continue to checkout" class="btn orderbtn">
      </div>
    </div>
  </form>
</div>