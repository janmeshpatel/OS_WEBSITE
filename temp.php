<?php
include "connection.php";

$sql = "SELECT * FROM cart";
$result = mysqli_query($con,$sql);
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
    if (mysqli_query($con, $Sql)) {
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
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
        echo "Updated Successfully ";
    } else {
        echo 'Try Again';
    }

}




