<?php

include 'library/DBConnection.php';

$sql = "UPDATE albums 
        SET name=?, 
            band_singer=?, 
            label=?,  
            year_released=? 
        WHERE id=?";


$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii", $name, 
$band_singer, $label,  
$year_released, $id);

$id = $_POST["id"];
$name = $_POST["name"];
$band_singer = $_POST["band_singer"];
$label = $_POST["label"];
$year_released = $_POST["year_released"];

$stmt->execute();

$conn->close();

header("Location: index.php");


?>