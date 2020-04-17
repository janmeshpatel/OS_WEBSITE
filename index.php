<?php
include "backend.php";
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>MotoFit</title>
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
<form action="storing.php" method="post">

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"><a href="index.php" style="color: black">Welcome to Shoes Site</a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span><input class="form-control mr-sm-2" type="search" placeholder="Search" style="width: 500px" aria-label="Search"></span>
            <span><a class="btn btn-light " href="mycart.php" style="height: 40px">Search</a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a class="btn btn-light fas fa-shopping-cart " href="mycart.php" style="height: 40px">&nbsp;&nbsp;Cart <?php echo "".$cart_no; ?></a></span>
            <span><a class="btn btn-light " href="mycart.php" style="height: 40px">Sigin in</a></span>
        </div>
    </header>
    <div class="mdl-layout__drawer" style="background: #b7e3ff">
        <span class="mdl-layout-title"><a href="index.php"><img src="" height="150px" width="150px">Add logo Image</a></span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">item 1</a>
            <a class="mdl-navigation__link" href="">itme 2</a>
            <a class="mdl-navigation__link" href="">item 3</a>
            <a class="mdl-navigation__link" href="">item 4</a>
        </nav>
    </div>
    <main class="mdl-layout__content" style="background:#b7e3ff; height: 100%">
        <!--Home Tab-->

        <div class="winter-neva-gradient color-block mb-3 mx-auto z-depth-1-half">

<br><br>

        <div class="container">
            <!--row 1-->
            <div class="row">

                <!--col 1-->
                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" style="height: 250px" src="images/nike.png">
                                 
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Nike</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers NIKE brand products in six Categories, including running , jordan brand, football, and sportswear.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="nike" >

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>

                <!--col 2-->
                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" style="height: 250px" src="images/reebok.png">
                                 
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Reebok</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers Rebbok brand and offers fitness, running, and crossfit sportswear including clothing and footwear.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="reebok">

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>


                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/sparx.jpg" style="height: 250px">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Spark</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers SPARK shoes , sandals, casual shoes, running shoes. Also you can get some limited discount if you have Axis bank credit card.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="spark">

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>
            </div>
<br><br>
            <!--row 2-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/adidas.png" style="height: 250px">

                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Adidas</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers Adidas product. For example, Adidas Originals, Running shoes, Superstars,Football,Tennis and Trainning etc.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="adidas">

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/puma.png" style="height: 250px">

                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Puma</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers PUMA brand products in six Categories, including running , jordan brand, football, and sportswear.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="puma">

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/skechers.jpg" style="height: 250px; width: 330px">

                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h4 class="black-text pb-2 pt-1"></i>Skechers</h4>
                            <!-- Description -->
                            <p class="card-text">This website offers Skechers brand products in six Categories, including running , jordan brand, football, and sportswear.</p>
                            <!-- Button -->
                            <input  class="btn btn-unique" type="submit" value="SEE MORE..." name="skechers">

                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-muted text-center">
                            Limited Addition
                        </div>

                    </div>
                    <!-- Card Narrower -->
                </div>
        </div>
        </div>



            <br><br><br>
        </div>
    </main>
</div>
</form>
</body>
</html>
