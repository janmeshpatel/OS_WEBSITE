<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "osw";

$con = mysqli_connect($host, $user, $pass, $db_name);
if ($con)
{
    echo "Connection !....";
}
else
    echo "Connection error !....";

?>