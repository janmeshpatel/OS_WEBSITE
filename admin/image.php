<?php
include "connection.php";

if(isset($_POST['submit']))
{
$brand_name=$_POST['name'];

    if($brand_name=="Nike")
    {
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $image =$_POST['image'];

        $Sql="UPDATE  nike set price='$price',name='$brand',image='$image' where id='$id'";
        if(mysqli_query($con,$Sql))
        {
            echo "Updated Successfully";
        }
        else
        {
            echo 'Try Again';
        }
    }
    elseif($brand_name=="Reebok")
    {
            $brand=$_POST['brand'];
            $price=$_POST['price'];
            $id=$_POST['id'];
            $image =$_POST['image'];

            $Sql="UPDATE  reebok set price='$price',name='$brand',image='$image' where id='$id'";
            if(mysqli_query($con,$Sql))
            {
                echo "Updated Successfully";
            }
            else
            {
                echo 'Try Again';
            }
    }
    elseif($brand_name=="Skechers")
    {
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $image =$_POST['image'];

        $Sql="UPDATE  skechers set price='$price',name='$brand',image='$image' where id='$id'";
        if(mysqli_query($con,$Sql))
        {
            echo "Updated Successfully";
        }
        else
        {
            echo 'Try Again';
        }
    }
    elseif($brand_name=="Puma")
    {
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $image =$_POST['image'];

        $Sql="UPDATE  puma set price='$price',name='$brand',image='$image' where id='$id'";
        if(mysqli_query($con,$Sql))
        {
            echo "Updated Successfully";
        }
        else
        {
            echo 'Try Again';
        }
    }
    elseif($brand_name=="Sparx")
    {
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $image =$_POST['image'];

        $Sql="UPDATE  spark set price='$price',name='$brand',image='$image' where id='$id'";
        if(mysqli_query($con,$Sql))
        {
            echo "Updated Successfully";
        }
        else
        {
            echo 'Try Again';
        }
    }
    elseif($brand_name=="Adidas")
    {
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $id=$_POST['id'];
        $image =$_POST['image'];

        $Sql="UPDATE  adidas set price='$price',name='$brand',image='$image' where id='$id'";
        if(mysqli_query($con,$Sql))
        {
            echo "Updated Successfully";
        }
        else
        {
            echo 'Try Again';
        }
    }
    else
    {
        echo "select brand ";
    }


}





