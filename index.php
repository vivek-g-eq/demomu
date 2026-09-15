<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_database');


$conn = mysqli_connect("localhost", "root", "", "my_database");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
