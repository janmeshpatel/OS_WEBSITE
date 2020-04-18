<?php
include "backend.php";
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
    #dive1{
        margin-left: 20px;
        float: left;
    }
    #dive2{
        margin-left: 20px;
        float: left;
    }
</style>

</head>
<body>
<form action="payment.php" method="post">

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

        <main class="mdl-layout__content" style="background: #b7e3ff;padding-left: 10px; height: 100%">
            <div id="dive1" class="winter-neva-gradient color-block mb-3 z-depth-1-half"  style="width: 650px;">
                <br>
                <center>
                    <table id="table_1">
                        <tr><td>
                        <?php
                        $sql = "SELECT * FROM cart";
                        $retval = mysqli_query($con,$sql);
                        if(mysqli_num_rows($retval) > 0)
                        {
                            while($row = mysqli_fetch_assoc($retval))
                            {
                                ?>
                                <table id="table_2" border="1" style="border-color: black">
                                    <tr>
                                        <td rowspan="6" style="width: 175px; height:100px"><img style="width: 175px; height:175px" src="images/<?php echo $row["image_name"];?>"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 300px; height:35px">&nbsp;&nbsp;Cart Id :<?php echo $row["id"];?></td>
                                    </tr>
                                    <tr>
                                        <td style="height:35px">&nbsp;&nbsp;Brand Name :<?php echo $row["brand_name"];?></td>
                                    </tr>
                                    <tr>
                                        <td style="height:35px">&nbsp;&nbsp;Item Name :<?php echo $row["item_name"];?></td>
                                    </tr>
                                    <tr>
                                        <td style="height:35px">&nbsp;&nbsp;Item Price :<?php echo $row["item_price"];?></td>
                                    </tr>
                                    <tr>
                                        <td style="height:35px">&nbsp;&nbsp;Item Id :<?php echo $row["item_id"];?></td>
                                    </tr>
                                </table>

                                <br>

                                <?php
                            } //end of while
                        }
                        else
                        {
                            echo "Empty Cart Item ";
                        }
                        ?>
                            </td>
                        </tr>

                    </table>
                </center>
            </div>
            <br>
            <div id="dive2" class="winter-neva-gradient color-block mb-3 z-depth-1-half"  style="width: 650px;">
            <table>
                <tr>
                    <td><input  class="btn btn-unique" style="width: 150px" type="submit" value="Buy Item" name="buy" ></td>
                    <td rowspan="2"><input class="form-control mr-sm-2" type="text" name="mycart_id"  placeholder="Enter Cart Id for Buy or Remove Item" style="width: 400px; height: 60px" aria-label="Search" pattern="[0-9][9-0]" erro required></td>
                </tr>
                <tr>
                    <td><input  class="btn btn-unique" style="width: 150px" type="submit" value="Remove Item" name="remove" ></td>
                </tr>
            </table>
            </div>


        </main>
    </div>
</form>
</body>
</html>



