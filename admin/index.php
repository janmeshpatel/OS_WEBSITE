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
<form action="image.php" method="post">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title"><a href="index.php" style="color: black">Welcome to Shoes Site</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span><input class="form-control mr-sm-2" type="search" placeholder="Search" style="width: 500px" aria-label="Search"></span>
                <span><button class="btn btn-light" type="submit" style="height: 39px">Search</button></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span><button class="btn btn-light fas fa-shopping-cart " style="height: 39px" type="submit"> Cart</button></span>
                <span><button class="btn btn-light" type="submit" style="height: 39px">Sign in</button></span>
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
<br>


                    <select class="mdl-textfield__input" style="width: 300px" name="name">
                        <option style="alignment: center">- - Select Brand First - -</option>
                        <option>Nike</option>
                        <option>Reebok</option>
                        <option>Skechers</option>
                        <option>Puma</option>
                        <option>Sparx</option>
                        <option>Adidas</option>
                    </select>
                <br>



                <!-- Default input -->
                <input type="text"  class="form-control" style="width: 300px" name="id" placeholder="ID">
                <br>

                <!-- Default input -->
                <input type="file"  style="width: 300px" name="image">
                <br>

                <!-- Default input -->
                <input type="text"  class="form-control" style="width: 300px" name="price" placeholder="PRICE">
                <br>

                <!-- Default input -->
                <input type="text"  class="form-control" style="width: 300px" name="brand" placeholder="Brand">
                <br>

                <!-- Default input -->
                <input type="Submit"   name="submit" value="Submit">


            </div>
        </main>
    </div>
</form>
</body>
</html>
