<?php
session_start();
error_reporting(0);
include("navbar.php");

$loggedIn = isset($_SESSION['user']);

// Function to display the appropriate button based on login status
function displayButton($loggedIn) {
    if ($loggedIn) {
        echo '<button class="normal" type="submit" name="AddToCart">Add To Cart</button>';
    } else {
        echo '<button class="btn1 btn1-primary"><a href="registration.php">Login</a></button>';
    }
}

$logIn = isset($_SESSION['user']);

// Function to display the appropriate button based on login status
function displayButtonLoginLogout($logIn) {
    if ($logIn) {
        echo '<button class="btn1 btn1-primary"><a href="logout2.php">Logout</a></button>';
    } else {
        echo '<button class="btn1 btn1-primary"><a href="registration.php">Login</a></button>';
    }
}

?>

<section id="product1" class="section-p1" style="color:red;">
    <div class="">
        <div class=" mt-3 user d-flex justify-content-end">  
            <h2>
                <?php echo $_SESSION['user']; ?>
            </h2>
        </div>
        <div class=" mt-3 user d-flex justify-content-end">
            <?php displayButtonLoginLogout($logIn); ?>
        </div>
        <div class="col-xl-12 aproduct">
            <h1 class="title">ALL PRODUCTS</h1></b>
        </div>
    </div>
    
    <br>
    <div class="pro-container">
        <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
            <form action="manage_cart.php" method="POST">
                <img src="img/project1.jpeg">
                <div class="des">
                    <span>MUSCLE UP</span>
                    <h5> PROTEIN SHAKER BOTTLE</h5>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <div class="price">
                        <h4>&#8377; 200</h4><br>

                    </div>
                    <?php displayButton($loggedIn); ?>
                    <input type="hidden" name="Item_Name" value="PROTEIN SHAKER BOTTLE">
                    <input type="hidden" name="Price" value="200">
                    <?php
                        $_SESSION['buy1n']='protein_shaker';
                        $_SESSION['buy1p']='200';
                    ?>
            </form>
        </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/project3.jpg">
            <div class="des">
                <span>BODY GRIP</span>
                <h5>5 KG DUMB-BELL</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h4>&#8377; 1750</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="5 KG DUMB-BELL">
                <input type="hidden" name="Price" value="1750">

                <?php
                        $_SESSION['buy2n']='dumb_bell';
                        $_SESSION['buy2p']='1750';
                    ?>
        </form>
    </div>
    </div>

    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/exclusive.png">
            <div class="des">
                <span>COREBLAZE</span><br>
                <small>Exclusive Product </small>
                <h5> NUTRITION COMBO PACK</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 4000</h4><br>

                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="NUTRITION COMBO PACK">
                <input type="hidden" name="Price" value="4000">
                <?php
                        $_SESSION['buy3n']='combo pack';
                        $_SESSION['buy3p']='4000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/project4.jpg">
            <div class="des">
                <span>NXT NUTRITION</span>
                <h5>WEIGHT GAINER</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h4>&#8377; 1200</h4><br>

                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="WEIGHT GAINER">
                <input type="hidden" name="Price" value="1200">
                <?php
                        $_SESSION['buy4n']='weight_gainer';
                        $_SESSION['buy4p']='1200';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/thigs.png">
            <div class="des">
                <span>NAUTILUS</span>
                <h5>THIGH MACHINE</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 40,000</h4><br>

                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="THIGH MACHINE">
                <input type="hidden" name="Price" value="40000">
                <?php
                        $_SESSION['buy5n']='thigh_machine';
                        $_SESSION['buy5p']='40000';
                    ?>
        </form>

    </div>

    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/project6.jpg">
            <div class="des">
                <span>SPARNOD</span>
                <h5>TREAD-MILL</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 50,000</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="TREAD-MILL">
                <input type="hidden" name="Price" value="50000">
                <?php
                        $_SESSION['buy6n']='tread_mill';
                        $_SESSION['buy6p']='50000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/project7.jpg">
            <div class="des">
                <span>BOLDFIT</span>
                <h5>BALANCE BALL</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h4>&#8377; 1500</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="BALANCE BALL">
                <input type="hidden" name="Price" value="1500">
                <?php
                        $_SESSION['buy7n']='Balance_ball';
                        $_SESSION['buy7p']='1500';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/gym cycle.jpg">
            <div class="des">
                <span>POWER MAX</span>
                <h5>ACTION AIR BIKE</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 35,000</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="ACTION AIR BIKE">
                <input type="hidden" name="Price" value="35000">
                <?php
                        $_SESSION['buy8n']='Air_bike';
                        $_SESSION['buy8p']='35000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/gym bag.jpg">
            <div class="des">
                <span>PUMA</span>
                <h5> GYM-BAG</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 1400</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="THIGH MACHINE">
                <input type="hidden" name="Price" value="40000">
                <?php
                        $_SESSION['buy9n']='Thigh_machine';
                        $_SESSION['buy9p']='40000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/T-bar.jpg">
            <div class="des">
                <span>SF TECH</span>
                <h5>T-BAR</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 10000</h4><br>
                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="T-BAR">
                <input type="hidden" name="Price" value="10000">
                <?php
                        $_SESSION['buy10n']='T_bar';
                        $_SESSION['buy10p']='10000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/Rd.jpg">
            <div class="des">
                <span>TONE UP</span>
                <h5>CHEST MACHINE</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 50000</h4><br>

                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="CHEST MACHINE">
                <input type="hidden" name="Price" value="50000">
                <?php
                        $_SESSION['buy11n']='Chest_machine';
                        $_SESSION['buy11p']='50000';
                    ?>
        </form>
    </div>
    </div>
    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 pro">
        <form action="manage_cart.php" method="POST">
            <img src="img/punch bag.jpg">
            <div class="des">
                <span>SPEED UP</span>
                <h5>PUNCH-BAG</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>&#8377; 3500</h4><br>

                <div class="price"></div>
                <?php displayButton($loggedIn); ?>
                <input type="hidden" name="Item_Name" value="PUNCH-BAG">
                <input type="hidden" name="Price" value="3500">
                <?php
                        $_SESSION['buy12n']='Punch_bag';
                        $_SESSION['buy12p']='3500';
                    ?>
        </form>
    </div>
    </div>
    </div>
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div><br>
    </div>
</section>
<div class="brands">
    <div class="small-cotainer">
        <div class="row3">
            <div class="col-4">
                <img src="img/godrej.png">
            </div>
            <div class="col-4">
                <img src="img/oppo.png">
            </div>
            <div class="col-4">
                <img src="img/coco cola.png">
            </div>
            <div class="col-4">
                <img src="img/paypal.png">
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>