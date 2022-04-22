<?php
//Including the file from library folder that connects to the database
include 'library/DBConnection.php';


// SQL command to delete a record from ycollection table

$sql = "DELETE FROM ycollection WHERE id=?";

$stmt=$conn->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();
$conn->close();

// The page to be updated with this change is the Collection.php page
header("Location: collection.php");

?>

<!-- Adding NavBar to the top -->
<?php include 'NavBar.php' ?>