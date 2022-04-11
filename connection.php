<?php
# we try as we can to connect to database but if we can not connect go to catch and print the error
try {
    $db_Server = "localhost";
    $db_Name = "mock_data";
    $db_User = "root";
    $db_Pass = "";
    $dsn = "mysql:host=$db_Server;dbname=$db_Name"; # type of the database coding / server name / database name 
    $conn = new PDO($dsn, $db_User, $db_Pass); # Introduction the Information to pdo function
    return $conn;
} catch (PDOException $error) { # put type of the PDOException error in $error variable
    echo "error in connect +[" . $error . "]+"; #print the error if it is existed
}
