<?php
    session_start();
    if (!isset( $_SESSION['email'])){
        header("Location:index.php");
        exit();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: azure;">
    <div class="headline">
        <h1>Welcome to the admin page<span><? $_SESSION['name'];?></span> !</h1>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>

</body>

</html>