<?php 

// Calls the file from library folder that connects to the database 
include 'library/DBConnection.php';
if(isset($_SESSION)){
    session_destroy();
}

// Link the information inserted to the database
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password === $confirmPassword){
    // Encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

$sql = "INSERT INTO user (username, email, password) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);



$stmt->bind_param("sss", $username, $email, $hashedPassword);

// Send to database
$stmt->execute();
// Check to see if we have an id
if($stmt->insert_id){
    $error['username'] = 'UserName already Exists';
}

session_start();
$_SESSION['username'] = $username;
$_SESSION['id'] = $stmt->insert_id;

$conn->close();

// Will direct the user to the index page
header("Location: index.php");

?>