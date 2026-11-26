<?php
$db1 = "messages";
$servername = "localhost";
$username ="root";
$password= "";

$link = mysqli_connect($servername, $username, $password, $db1);

if (!($link)) {
    die("Connection Failed:" .mysqli_connect_error());
   }

echo "";
?>