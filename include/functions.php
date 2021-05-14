<?php
$dbhost = 'localhost';
$dbname = 'bazznest';
$dbuser = 'root';
$dbpass = '';
$appname = "Bazz Nest";

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname); // initiates a connection to our database
if ($connection->connect_error) die($connection->connect_error); // outputs error message if connection fails

// function i will be using to create tables in our database
function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}

// function i will be using to query bazznest database
function queryMysql($query)
{
    global $connection;
    $result = $connection->query($query);
    if(!$result) die($connection->error);
    return $result;
}

// funtion i will be using to destroy sessions
function destroySession()
{
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

// funtion i will be using to sanitize user inputs to reduce the chances of sql injection
function sanitizeString($var)
{
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

// function i will be using to display users profile
function showProfile($user)
{
    if (file_exists("$user.jpg"))
        echo "<img src='$user.jpg' style='float:left;'>";
        $result = queryMysql("SELECT * FROM profiles WHERE user='user' ");

        if ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
        }
}

?>