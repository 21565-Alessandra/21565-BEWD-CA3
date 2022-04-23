<!-- Including the file from library folder that connects to the database to access the ycollection table -->

<?php 
include 'library/DBConnection.php';
$sql = "SELECT * FROM ycollection";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>YALP COLLECTION</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

<!-- Adding navbar to the page -->
    <?php include 'NavBar.php' ?>
    <div class="container" style="margin-top: 20px;" >
        <h1>YALP COLLECTION</h1>
        <img src="./assets/collection-img.jpg" class="img-fluid" alt="...">
        <a class="btn btn-outline-success" href="NewAlbum.php" role="new" style="margin-top:30px;">Add Album</a>

    
        <!-- New container with grid structure that show the cards on the screen -->    
        <div class="container">
            <div class="row">

            <!-- The cards are obtaining and showing the image, title, price, and description -->
            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo '<div class="col-3" style="margin: 30px">';
                            echo '<div class="card" style="width: 18rem;">';
                                echo '<img src="./assets/' .$row['image']. '" class="card-img-top" alt="...">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' .$row['album']. '</h5>';
                                    echo '<h5 class="card-text"> €' .$row['price']. '</h5>';
                                    echo '<p class="card-text">'  .$row['description']. '</p>';
                                    echo "<td><a class='btn btn-outline-primary' style='margin: 2px' href='EditAlbum.php?id=".$row['id']."' role='update'>Update</a></td>";
                                    echo "<td><a class='btn btn-outline-danger' style='margin: 2px' href='DeleteAlbum.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>

        </div>
    </div>

</body>
</html>