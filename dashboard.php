<?php
    require('db.php');
    include("auth.php"); //include auth.php file on all secure pages
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Secured Page</title>
        <link rel="stylesheet" href="css/style.css" />

        <style media="screen">
        a,p {
          font-family: "Times New Roman", Georgia, Serif;
        }
        body{
          background-image:linear-gradient(to right, #9980FA, #fbc2eb);
          list-style: none;
          background-color: white;
          font-family: "Times New Roman", Georgia, Serif;
          font-size: 25px;
          color: white;
        }
        </style>
    </head>
    <body>
        <div class="form">
            <p style="font-size: 30px; padding-top: 50px;">Welcome to Dashboard</p>
            <hr>

            <p><a href="final.html">Kidslib.com</a><p>
            <!-- <p><a href="index.php">Home</a><p> -->
            <p><a href="insert.php">Insert New Record</a></p>
            <p><a href="view.php">View Records</a><p>
            <p><a href="logout.php">Logout</a></p>

            <br /><br /><br /><br />

        </div>
    </body>
</html>
