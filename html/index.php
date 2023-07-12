<?php

echo "Hi, I am in a Docker container!<br/>";

try {
    $db = new PDO('mysql:host=mysql;dbname=mydatabase', 'myuser', 'mypassword');
    echo "Connection successful!";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
