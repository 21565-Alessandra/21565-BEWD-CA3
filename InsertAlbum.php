<?php

include 'library/DBConnection.php';

$error=[];

// https://www.php.net/manual/en/function.filter-input.php
// https://www.php.net/manual/en/filter.filters.php

//sanitizing is removing anything not adhering to the filter
//filter_input (TYPE OF INPUT, INPUT NAME , FILTER NAME/TYPE - see on PHP.net)
$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
$band_singer = filter_input(INPUT_POST, 'band_singer',  FILTER_SANITIZE_STRING);
$label = filter_input(INPUT_POST, 'label',  FILTER_SANITIZE_STRING);
$year_released = filter_input(INPUT_POST, 'year_released',  FILTER_SANITIZE_URL);

if(!isset($name) || empty($name)){
        $error['name'] = 'Album name is required';
}
if(!isset($band_singer) || empty($band_singer)){
        $error['band_singer'] = 'Band, Singer or Artist name is required';
}
if(!isset($label) || empty($label)){
        $error['label'] = 'Label name is required';
}
if(!isset($year_released) || empty($year_released)){
        $error['year_released'] = 'Year of the release is required';
}

if(empty($error)){

        $sql = "INSERT INTO albums (name, band_singer, label, year_released) 
        VALUES (?,?,?,?)";

        $stmt = $conn->prepare($sql); 

        $stmt->bind_param("sssi", $name, $band_singer, $label, $year_released);

        //send to database
        $stmt->execute();
        $conn->close();

        header("Location: index.php");
}else{ 

        require_once('NewAlbum.php');
}




?>