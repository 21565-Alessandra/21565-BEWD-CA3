<!-- Getting values that are needed to connect to the database -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musicstore";

// The line below will retain the information provided above to connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Error message if it doesn't succeed when connecting to the database
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

