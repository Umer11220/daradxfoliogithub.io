<?php

$servername ="localhost";
$username="root";
$password ="";
$databasename="CMS";

$conn = mysqli_connect('localhost','root','','CMS');

if($conn)
{
    echo "connection successfully";
}
else
{
    echo "connection faild";
}


?>