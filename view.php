<?php
    require('db.php');
    include("auth.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Records</title>
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
          font-size: 22px;
        }
        </style>
    </head>
    <body>
        <div class="form">
            <p style="font-size: 18px;"><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
            <h2>View Records</h2>
            <table width="100%" border="1" style="border-collapse:collapse;">
                <thead>
                    <tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
                </thead>
                <tbody>
                    <?php
                    $count=1;
                    $sel_query="Select * from new_record ORDER BY id desc;";
                    $result = mysqli_query($con,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
                    <?php $count++; } ?>
                </tbody>
            </table>

            <br/><br/><br/><br/>
        </div>
    </body>
</html>
