<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Up Database</title>
</head>

<body>
    <h3>Setting Up...</h3>
    <?php

    require_once './include/functions.php';

    createTable(
        'member',
        'user VARCHAR(16), 
        pass VARCHAR(16), 
        INDEX(user(6))'
    );
    createTable(
        'messages',
        'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                auth VARCHAR(16),
                recip VARCHAR(16),
                pm CHAR(1),
                time INT UNSIGNED,
                message VARCHAR(4096),
                INDEX(auth(6)),
                INDEX(recip(6))'
    );
    createTable(
        'friends',
        'user VARCHAR(16),
                friend VARCHAR(16),
                INDEX(user(6)),
                INDEX(friend(6))'
    );
    createTable(
        'profiles',
        'user VARCHAR(16),
                text VARCHAR(4096),
                INDEX(user(6))'
    );

    ?><br>

    <p>...done.</p>
</body>

</html>