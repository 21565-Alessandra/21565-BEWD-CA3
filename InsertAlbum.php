<?php

include 'library/DBConnection.php';

$error=[];

// https://www.php.net/manual/en/function.filter-input.php
// https://www.php.net/manual/en/filter.filters.php

//sanitizing is removing anything not adhering to the filter
//filter_input (TYPE OF INPUT, INPUT NAME , FILTER NAME/TYPE - see on PHP.net)
$album = filter_input(INPUT_POST, 'album',  FILTER_SANITIZE_STRING);
$band = filter_input(INPUT_POST, 'band',  FILTER_SANITIZE_STRING);
$year = filter_input(INPUT_POST, 'year',  FILTER_SANITIZE_URL);
$label = filter_input(INPUT_POST, 'label',  FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description',  FILTER_SANITIZE_URL);
$image = filter_input(INPUT_POST, 'image',  FILTER_SANITIZE_URL);

if(!isset($album) || empty($album)){
        $error['album'] = 'Album name is required';
}
if(!isset($band) || empty($band)){
        $error['band'] = 'Band, Singer or Artist name is required';
}
if(!isset($year) || empty($year)){
    $error['year'] = 'Year of the release is required';
}
if(!isset($label) || empty($label)){
        $error['label'] = 'Label name is required';
}
if(!isset($description) || empty($description)){
    $error['description'] = 'Description is required';
}
if(!isset($image) || empty($image)){
    $error['image'] = 'Image is required';
}


if(empty($error)){

        $sql = "INSERT INTO ycollection (album, band, year, label, description, image) 
        VALUES (?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql); 

        $stmt->bind_param("ssssss", $album, $band, $year, $label, $description, $image);

        //send to database
        $stmt->execute();
        $conn->close();

        header("Location: collection.php");
}else{ 

        require_once('NewAlbum.php');
}




?>

<?php include 'NavBar.php' ?>