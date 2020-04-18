<?php
include "backend.php";

if(isset($_POST['buy']))
{
    ?>
    <style type="text/css">
        #d2
        {
            display: none;
        }
    </style>
    <?php
    $cartid=$_POST['mycart_id'];
}
if(isset($_POST['remove']))
{
    ?>
    <style type="text/css">
        #d1
        {
            display: none;
        }
    </style>
    <?php
    $cartid=$_POST['mycart_id'];
    $sql = "DELETE FROM cart where id=$cartid";
    mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>Online Shoes Shopping</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-green.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>



</head>
<body>
<form method="post">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title"><a href="index.php" style="color: black">Welcome to Shoes Site</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span><input class="form-control mr-sm-2" type="search" placeholder="Search" style="width: 500px" aria-label="Search"></span>
                <span><a class="btn btn-light " href="mycart.php" style="height: 40px">Search</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a class="btn btn-light fas fa-shopping-cart " href="mycart.php" style="height: 39px">&nbsp;&nbsp;Cart <?php echo "".$cart_no; ?></a></span>
                <span><a class="btn btn-light " href="mycart.php" style="height: 40px">Sigin in</a></span>
            </div>
        </header>
        <div class="mdl-layout__drawer" style="background: #f7f7f7">
            <span class="mdl-layout-title"><a href="index.php"><img src="" height="150px" width="150px">Add logo Image</a></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">item 1</a>
                <a class="mdl-navigation__link" href="">itme 2</a>
                <a class="mdl-navigation__link" href="">item 3</a>
                <a class="mdl-navigation__link" href="">item 4</a>
            </nav>
        </div>

        <main class="mdl-layout__content" style="background: #b7e3ff; height: 100%">
            <div class="winter-neva-gradient color-block mb-3 mx-auto z-depth-1-half" >
                <br>

                <br>

                <center>

                    <div id="d1" class="winter-neva-gradient color-block mb-3 z-depth-1-half"  style="width: 650px;">
                        <br>
                        <h1>Payment Processing . . .</h1>
                        <hr>
                        <h2>Cart Id is -> <?php echo "".$cartid?></h2>
                        <br>
                    </div>
                </center>
                <br>

                <center>
                    <div id="d2" class="winter-neva-gradient color-block mb-3 z-depth-1-half"  style="width: 650px;">
                        <br>
                        <h1>Remove Item Successfully From Cart</h1>
                        <hr>
                        <h2>Cart Id is -> <?php echo "".$cartid?></h2>
                        <br>
                    </div>
                </center>
                <br>


            </div>
        </main>
    </div>
</form>
</body>
</html>