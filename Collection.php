<?php 
include 'library/DBConnection.php';
$sql = "SELECT * FROM albums";
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
    <?php include 'NavBar.php' ?>
    <div class="container" style="margin-top: 20px;" >
    <h1>YALP COLLECTION</h1>
        <table class="table" style="margin-top: 20px; margin-bottom: 50px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Band/Singer/Artist</th>
                    <th scope="col">Label</th>
                    <th scope="col">Year</th>
                    <th scope="col"><a class="btn btn-outline-success" href="NewAlbum.php" role="new">New</a></th>
                <tr>
            </thead>
            <tbody>
                <?php 
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<tr>";
                            echo "<th scope='row'>".$row['id']."</th>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['band_singer']."</td>";
                            echo "<td>".$row['label']."</td>";
                            echo "<td>".$row['year_released']."</td>";
                            echo "<td><a class='btn btn-outline-primary' href='UpdateAlbum.php?id=".$row['id']."' role='update'>Update</a></td>";
                            echo "<td><a class='btn btn-outline-danger' href='DeleteAlbum.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                            echo "</tr>";
                        } 
                    }
                ?>
            </tbody>
        </table>
  
        <?php

        class Album {

            public $name;
            public $description;

            public function __construct($n, $d){
                $this->name = $n;
                $this->description = $d;
            }
            
        }

        $album1 = new Album("WHITE ALBUM", "The Beatles, also known colloquially as the White Album, is the ninth studio album and only double album by the English rock band the Beatles, released on 22 November 1968." );
        $album2 = new Album("BLACK ALBUM", "Metallica is fifth studio album by American heavy metal band Metallica. Released 1991, it is commonly referred to as The Black Album because of its packaging design." );
        $album3 = new Album("DARK SIDE OF THE MOON", "The Dark Side of the Moon is the eighth studio album by the English rock band Pink Floyd, released on 1 March 1973 by Harvest Records." );
        ?>

        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/White-Album.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $album1->name ?></h5>
                            <p class="card-text"><?= $album1->description ?></p>
                            <a href="#" class="btn btn-outline-primary">View Album</a>
                        </div>
                    </div> 
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/black-album.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?= $album2->name ?></h5>
                            <p class="card-text"><?= $album2->description ?></p>
                            <a href="#" class="btn btn-outline-primary">View Album</a>
                        </div>
                    </div> 
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/Dark_Side_of_the_Moon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?= $album3->name ?></h5>
                            <p class="card-text"><?= $album3->description ?></p>
                            <a href="#" class="btn btn-outline-primary">View Album</a>
                        </div>
                    </div> 
                </div>

            </div> 
        </div> 


</div>

</body>
</html>
