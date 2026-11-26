<?php
   include_once("conn.php");

   session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
     $("#successMsg").hide().fadeIn(800);
  });
  </script>

<style>
  #successMsg{
        background:#d4edda;
        color:#155724;
        padding:20px;
        border-radius:8px;
        border:1px solid #c3e6cb;
        width:400px;
        margin:100px auto;
        text-align:center;
        font-size:18px;
        font-family:Arial;
  }
</style>

</head>

<?php

  
   $surnameU = $_POST["surname"];
   $fnameU = $_POST["fname"];
   $streetU = $_POST["street"];
   $countryU = $_POST["country"];
   $cityU = $_POST["city"];
   $telU = $_POST["tel"];
   $emailU = $_POST["email"];
   $messageU = $_POST["message"];

   $email = isset($_POST['email']) ? trim($POST['email']) : '';

   if (empty($email)) {
      $_SESSION['errors']['email'] = "Email address is required.";
   }

   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['errors']['email'] = "Please enter a valid email address (eg name@example.com).";
   }

   if (!empty($_SESSION['errors'])) {
     header("Location: " . $_SERVER['HTTP_REFERER']);
     exit();
   }
   
  
   $query = "INSERT INTO `contact` (`surname`,`fname`,`street`,`country`,`city`,`tel`,`email`,`message`) VALUES ('$surnameU','$fnameU','$streetU','$countryU','$cityU','$telU','$emailU','$messageU')";

    if(mysqli_query($link, $query)){
        echo '<div id="successMsg">Application Sent Successfully. We\'ll get back to you shortly.</div>';
    }else{

        echo '<div id="successMsg">Error Processing</div>';
    }

  
   ?>