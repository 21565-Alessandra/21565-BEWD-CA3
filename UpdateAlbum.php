<?php
include 'library/DBConnection.php';


$sql = "SELECT * FROM albums WHERE id=".$_GET['id'];

$result = $conn->query($sql);


if($result->num_rows==0){
    header("Location: collection.php");
}

$row=$result->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
<title>Update Album</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Update albums</h1>
        <form action="EditAlbums.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="name" class="form-label">Album Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?= $row['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="band_singer" class="form-label">Band/Singer/Artist</label>
                <input type="text" class="form-control" id="band_singer" name="band_singer" aria-describedby="band_singerHelp" value="<?= $row['band_singer']?>">
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" aria-describedby="labelHelp" value="<?=$row['label'] ?>">
            </div>
            <div class="mb-3">
                <label for="year_released" class="form-label">Year</label>
                <input type="text" class="form-control" id="year_released" name="year_released" aria-describedby="year_releasedHelp" value="<?= $row['year_released']?>">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    

   
</body>
</html>