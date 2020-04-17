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

<form action="temp.php" method="post">
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

            <!--slider-->
            <div class="container">
                <!--row 1-->
                <div class="row">

                    <!--col 1-->
                    <div class="col-md-4">
                        <div class="card card-cascade narrower" style="height: 350px; width: 350px">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image1?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i> <?php echo "".$name1?></h4><h6><?php echo "price :".$price1." rs"?></h6>
                            </div>

                            <!-- Card footer -->

                                <div class="card-footer text-muted text-center">
                                    <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_1" >
                                </div>

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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image2?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name2?></h4><h6><?php echo "price :".$price2." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_2" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image3?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name3?></h4><h6><?php echo "price :".$price3." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_3" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image4?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name4?></h4><h6><?php echo "price :".$price4." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_4" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image5?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name5?></h4><h6><?php echo "price :".$price5." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_5" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image6?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name6?></h4><h6><?php echo "price :".$price6." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_6" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image7?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name7?></h4><h6><?php echo "price :".$price7." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_7" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image8?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name8?></h4><h6><?php echo "price :".$price8." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_8" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image9?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name9?></h4><h6><?php echo "price :".$price9." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_9" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image10?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name10?></h4><h6><?php echo "price :".$price10." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_10" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image11?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name11?></h4><h6><?php echo "price :".$price11." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_11" >
                            </div>
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
                                <img class="card-img-top" style="height: 250px" src="images/<?php echo "".$image12?>">
                                <a><div class="mask rgba-white-slight"></div></a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h4 class="black-text pb-2 pt-1"></i><?php echo "".$name12?></h4><h6><?php echo "price :".$price12." rs"?></h6>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted text-center">
                                <input  class="btn btn-unique" type="submit" value="Add to Cart" name="add_12" >
                            </div>
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
</form>
</body>
</html>

