<?php
include "connection.php";

$sql = "SELECT * FROM cart";
$result = mysqli_query($con,$sql);
$cart_no=mysqli_num_rows ( $result );
$count=mysqli_num_rows ( $result );

if(isset($_POST['add_1']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','1')";
    if (mysqli_query($con, $Sql))
    {
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_2']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','2')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_3']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','3')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_4']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','4')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_5']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','5')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_6']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','6')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_7']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','7')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_8']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','8')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_9']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','9')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_10']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','10')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_11']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','11')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

}
if(isset($_POST['add_12']))
{
    $count+=1;
    $sql = "SELECT * FROM action";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $brand_name=$row['name'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $sql = "SELECT * FROM $brand_name where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }


    $Sql = "INSERT INTO cart (id,item_name,item_price,image_name,brand_name,item_id) VALUES ('$count','$name','$price','$image','$brand_name','12')";
    if (mysqli_query($con, $Sql)) {
        
    } else {
        echo 'Try Again';
    }

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

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>



</head>
<body>
<form action="" method="post">

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

        <center><a href="index.php" class="btn btn-unique" style="height: 115px; width:500px; font-size: 30px" name="add_new_item" >Add New Item <br>to Cart</a></center>
<br>
        <center><a href="mycart.php" class="btn btn-unique" style="height: 115px; width:500px; font-size: 30px" name="add_new_item" >Go to Cart</a></center>
<br>


    </div>
</main>
</div>
</body>
</html>




