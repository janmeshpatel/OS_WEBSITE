<?php
include "connection.php";

$sql = "SELECT * FROM cart";
$result = mysqli_query($con,$sql);
$cart_no=mysqli_num_rows ( $result );

if(isset($_POST['nike']))
{

    //inserted action
    $sql ="UPDATE action set name='nike'";
    $retval = mysqli_query($con,$sql);



    //--1--
    $sql = "SELECT * FROM nike where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM nike where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM nike where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM nike where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM nike where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM nike where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM nike where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM nike where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM nike where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM nike where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM nike where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }








}
if(isset($_POST['puma']))
{
    //inserted action
    $sql ="UPDATE action set name='puma'";
    $retval = mysqli_query($con,$sql);

    //--1--
    $sql = "SELECT * FROM puma where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    $sql = "SELECT * FROM puma where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM puma where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM puma where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM puma where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM puma where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM puma where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM puma where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM puma where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM puma where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM puma where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM puma where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }
}
if(isset($_POST['adidas']))
{
    //inserted action
    $sql ="UPDATE action set name='adidas'";
    $retval = mysqli_query($con,$sql);

    //--1--
    $sql = "SELECT * FROM adidas where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    $sql = "SELECT * FROM adidas where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM adidas where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM adidas where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM adidas where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM adidas where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM adidas where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM adidas where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM adidas where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM adidas where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM adidas where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM adidas where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }
}
if(isset($_POST['reebok']))
{
    //inserted action
    $sql ="UPDATE action set name='reebok'";
    $retval = mysqli_query($con,$sql);


    //--1--
    $sql = "SELECT * FROM reebok where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    $sql = "SELECT * FROM reebok where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM reebok where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM reebok where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM reebok where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM reebok where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM reebok where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM reebok where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM reebok where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM reebok where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM reebok where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM reebok where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }
}
if(isset($_POST['skechers']))
{
    //inserted action
    $sql ="UPDATE action set name='skechers'";
    $retval = mysqli_query($con,$sql);


    //--1--
    $sql = "SELECT * FROM skechers where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    $sql = "SELECT * FROM skechers where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM skechers where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM skechers where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM skechers where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM skechers where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM skechers where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM skechers where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM skechers where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM skechers where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM skechers where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM skechers where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }
}
if(isset($_POST['spark']))
{
    //inserted action
    $sql ="UPDATE action set name='spark'";
    $retval = mysqli_query($con,$sql);


    //--1--
    $sql = "SELECT * FROM spark where id =1";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name1=$row['name'];
            $price1=$row['price'];
            $image1=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--2--
    $sql = "SELECT * FROM spark where id =2";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name2=$row['name'];
            $price2=$row['price'];
            $image2=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--3--
    $sql = "SELECT * FROM spark where id =3";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name3=$row['name'];
            $price3=$row['price'];
            $image3=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--4--
    $sql = "SELECT * FROM spark where id =4";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name4=$row['name'];
            $price4=$row['price'];
            $image4=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--5--
    $sql = "SELECT * FROM spark where id =5";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name5=$row['name'];
            $price5=$row['price'];
            $image5=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--6--
    $sql = "SELECT * FROM spark where id =6";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name6=$row['name'];
            $price6=$row['price'];
            $image6=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--7--
    $sql = "SELECT * FROM spark where id =7";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name7=$row['name'];
            $price7=$row['price'];
            $image7=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--8--
    $sql = "SELECT * FROM spark where id =8";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name8=$row['name'];
            $price8=$row['price'];
            $image8=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--9--
    $sql = "SELECT * FROM spark where id =9";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name9=$row['name'];
            $price9=$row['price'];
            $image9=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--10--
    $sql = "SELECT * FROM spark where id =10";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name10=$row['name'];
            $price10=$row['price'];
            $image10=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--11--
    $sql = "SELECT * FROM spark where id =11";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name11=$row['name'];
            $price11=$row['price'];
            $image11=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }

    //--12--
    $sql = "SELECT * FROM spark where id =12";
    $retval = mysqli_query($con,$sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row = mysqli_fetch_assoc($retval))
        {
            $name12=$row['name'];
            $price12=$row['price'];
            $image12=$row['image'];
        } //end of while
    }
    else
    {
        echo "Not Found";
    }
}

