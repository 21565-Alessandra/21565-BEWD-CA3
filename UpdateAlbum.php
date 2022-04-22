<?php

// Calls the file from library folder that connects to the database 
include 'library/DBConnection.php';

// SQL command to update the table connection
$sql = "UPDATE ycollection  
        SET album=?, 
            band=?, 
            year=?, 
            label=?, 
            description=?, 
            price=?,
            image=?            
        WHERE id=?";

// Connecting and preparing the db to get the data
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssdsi", $album, 
$band, $year, $label,  
$description, $price, $image, $id);

$id = $_POST["id"];
$album = $_POST["album"];
$band = $_POST["band"];
$year = $_POST["year"];
$label = $_POST["label"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];

// Send to database
$stmt->execute();

$conn->close();

header("Location: collection.php");


?>

