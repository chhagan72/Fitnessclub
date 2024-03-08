<?php
 session_start();
 include("navbar.php");
?>

<div class="container">
  <div class="row cartRow ">
    <div class="col-12 text-center border rounded bg-light my-5">
      <b>
        <h1 style="color:deeppink;">MY CART</h1>
      </b>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
      <table class="table text-center">
        <thead>
          <tr>
            <b>
              <th scope="col">Serial No.</th>
            </b>
            <b>
              <th scope="col">Item Name</th>
            </b>
            <b>
              <th scope="col">Item Price</th>
            </b>
            <b>
              <th scope="col">Quantity</th>
            </b>
            <b>
              <th scope="col">Total</th>
            </b>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                    $sr=$key+1;
                    
                    echo"
                        <tr>
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                            <td>
                                <form action='manage_cart.php' method='POST'>
                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='9'>
                                    <input type='hidden' name='Item_Name' value= '$value[Item_Name]'>
                                </form>
                            </td>
                            <td class='itotal'></td>
                            <td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                            <input type='hidden' name='Item_Name' value= '$value[Item_Name]'>
                            </form>
                            </td>
                        </tr>
                    ";
                            $string1=implode($value); 
                            $_SESSION['order1']=$string1;
                            $_SESSION['order2']='150';
                            
                            
                    }
                }
            ?>
        </tbody>
      </table>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mb-2 ">
        <div class="border bg-light rounded p-3 d-flex flex-column justify-content-center ">
          <h4>Grand Total:</h4>
          <h5 class="text-left" id="gtotal"></h5>
          <form action="Order.php" method="POST">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
              </label>
            </div>
            <br>
            <?php
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                {
              ?>
            <button type="submit" class="btn-sm btn-primary btn-primary1 btn-block" style=color:black;>Make Purchase</button>
            <input type="hidden" name="Item_Name" value="$value[Item_Name]">
            <?php
                }
              ?>



        </div>
      </div>
  </div>
</div>


<script>

var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');

function subTotal() {
  gt = 0;
  for (i = 0; i < iprice.length; i++) {
    itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
    gt = gt + (iprice[i].value) * (iquantity[i].value);
  }
  gtotal.innerText = gt;
}

subTotal();

</script>