<?php

include 'library/DBConnection.php';


// sql to delete a record
$sql = "DELETE FROM ycollection WHERE id=?";

$stmt=$conn->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();
$conn->close();


header("Location: othercollection.php");

?>

<?php include 'NavBar.php' ?>