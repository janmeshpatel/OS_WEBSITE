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

<?php
            $sql = "SELECT * FROM cart";
            $retval = mysqli_query($con,$sql);

            echo "<center><table>";
            if(mysqli_num_rows($retval) > 0)
            {
                while($row = mysqli_fetch_assoc($retval))
                {
                    echo "<tr>";
                        echo "<table border='1'>";
                            echo "<tr>";
                                echo "<td rowspan='6' style='width: 200px; height:200px'>".$row['image_name'];
                            echo "<tr>";
                                echo "<td style='width: 300px'>&nbsp;&nbsp;Cart Id :".$row['id'];
                                echo "<td rowspan='2'><input  class=\"btn btn-unique\" style='width: 150px' type=\"submit\" value=\"Buy Item\" name=\"nike\" >";
                            echo "<tr>";
                                echo "<td>&nbsp;&nbsp;Brand Name :".$row['brand_name'];
                            echo "<tr>";
                                echo "<td>&nbsp;&nbsp;Item Name :".$row['item_name'];
                            echo "<tr>";
                                echo "<td>&nbsp;&nbsp;Item Price :".$row['item_price'];
                                echo "<td rowspan='2'><input  class=\"btn btn-unique\" style='width: 150px' type=\"submit\" value=\"Remove Item\" name=\"nike\" >";
                            echo "<tr>";
                                echo "<td>&nbsp;&nbsp;Item Id :".$row['item_id'];
                            echo "</tr>";
                        echo "</table>";
                        echo "<br>";
                    echo "</tr>";
                } //end of while
            }
            else
            {
                echo "Not Found";
            }
            echo "</table></center>";
?>





        </div>
    </main>
</div>
</body>
</html>



