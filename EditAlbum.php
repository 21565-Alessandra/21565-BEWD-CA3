<?php
include 'library/DBConnection.php';


$sql = "SELECT * FROM ycollection WHERE id=".$_GET['id'];

$result = $conn->query($sql);


if($result->num_rows==0){
    header("Location: collection.php");
}

$row=$result->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Album</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Edit Album</h1> 
        <form action="UpdateAlbum.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="album" class="form-label">Album Name</label>
                <input type="text" class="form-control" id="album" name="album" aria-describedby="albumHelp" value="<?= $row['album'] ?>">
            </div>
            <div class="mb-3">
                <label for="band" class="form-label">Band/Singer/Artist</label>
                <input type="text" class="form-control" id="band" name="band" aria-describedby="bandHelp" value="<?= $row['band']?>">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" aria-describedby="yearHelp" value="<?= $row['year']?>">
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" aria-describedby="labelHelp" value="<?=$row['label'] ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" value="<?= $row['description']?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-description">Cover</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="imageHelp" value="<?= $row['image']?>">
            </div>
            
           
            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>

    </div>

    

   
</body>
</html>