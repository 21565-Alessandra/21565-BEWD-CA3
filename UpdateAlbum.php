<?php

include 'library/DBConnection.php';

$sql = "UPDATE ycollection  
        SET album=?, 
            band=?, 
            year=?, 
            label=?, 
            description=?, 
            price=?,
            image=?            
        WHERE id=?";


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

$stmt->execute();

$conn->close();

header("Location: collection.php");




?>

