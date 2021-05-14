<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BazzNest.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once './include/header.php';
    echo "<br> <span class='main>Welcome to $appname,";

    if ($loggedin) echo "$user, you are logged in.";
    else echo ' please sign up and/or log in to join in.';
    ?>
    </span> <br><br>
</body>
</html>