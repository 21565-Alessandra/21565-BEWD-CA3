<?php

include 'library/DBConnection.php';

$sql = "UPDATE ycollection 
        SET album=?, 
            band=?, 
            year=?,  
            label=?,
            description=?,
            image=?,
        WHERE id=?";


$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssssi", $album, 
$band, $year, $label,  
$description, $image, $id);

$id = $_POST["id"];
$album = $_POST["album"];
$band = $_POST["band"];
$year = $_POST["year"];
$label = $_POST["label"];
$description = $_POST["description"];
$image = $_POST["image"];

$stmt->execute();

$conn->close();

header("Location: othercollection.php");




?>

<?php include 'NavBar.php' ?>