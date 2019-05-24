<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
<h1> Hello!  </h1>
<?php
$un = $_GET["login"];
$pw = $_GET["pass"];

if ($un == "benjamkey" && $pw == "Hello212121")
    echo "<h2>Good day user <b> " . $un. "</b>!</h2>";
else 
echo "<h2>You shall not pass! </h2>"

 ?>
 

    
</body>