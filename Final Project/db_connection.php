<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_management_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Connection Failed". mysqli_error($conn));
}
else{

}
?>