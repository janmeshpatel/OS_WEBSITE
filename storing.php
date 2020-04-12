<?php
include "connection.php";

if(isset($_POST['nike']))
{
    $name="Nike";
    $price="10000";
    $image="nike.png";
}
if(isset($_POST['puma']))
{
    $name="Puma";
    $price="10000";
    $image="puma.png";
}
if(isset($_POST['adidas']))
{
    $name="Adidas";
    $price="10000";
    $image="adidas.png";
}
if(isset($_POST['reebok']))
{
    $name="Reebok";
    $price="10000";
    $image="reebok.png";
}
if(isset($_POST['skechers']))
{
    $name="Skecher";
    $price="10000";
    $image="skechers.jpg";
}
if(isset($_POST['spark']))
{
    $name="Sparks";
    $price="10000";
    $image="sparx.jpg";
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


<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"><a href="index.html" style="color: black">Welcome to Shoes Site</a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span><input class="form-control mr-sm-2" type="search" placeholder="Search" style="width: 500px" aria-label="Search"></span>
            <span><button class="btn btn-light" type="submit" style="height: 39px">Search</button></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span><button class="btn btn-light fas fa-shopping-cart " style="height: 39px" type="submit"> Cart</button></span>
            <span><button class="btn btn-light" type="submit" style="height: 39px">Sign in</button></span>
        </div>
    </header>
    <div class="mdl-layout__drawer" style="background: #f7f7f7">
        <span class="mdl-layout-title"><a href="index.html"><img src="" height="150px" width="150px">Add logo Image</a></span>
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

            <!--slider-->
            <div class="container">
                <!--row 1-->
                <div class="row">

                    <!--col 1-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 2-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 3-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 4-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 5-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 6-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 7-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 8-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 9-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 10-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 11-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->

                    <!--col 12-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name?></h4><h6><?php echo "price :".$price." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <a href="">
                                <div class="card-footer text-muted text-center">
                                    Add to Cart
                                </div>
                            </a>
                        </div>
                        <br>
                        <!-- Card Narrower -->
                    </div>
                    <!--End-->


                </div>
            </div>





        </div>
    </main>
</div>
</body>
</html>

