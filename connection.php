<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "osw";

$con = mysqli_connect($host, $user, $pass, $db_name);
if ($con)
{

}
else
    echo "Connection error !....";

?>