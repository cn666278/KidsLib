<?php
    include("auth.php"); //include auth.php file on all secure pages
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Home</title>
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
        }
        </style>
    </head>
    <body>
        <div class="form">
            <p style="padding: 50px; font-size: 40px;">Welcome <?php echo $_SESSION['username']; ?>!</p>
            <p style="padding: 50px; font-size: 30px;">This is secure area.</p>
            <p><a href="dashboard.php">Dashboard</a></p>
            <a href="logout.php">Logout</a>


            <br /><br /><br /><br />
        </div>
    </body>
</html>
