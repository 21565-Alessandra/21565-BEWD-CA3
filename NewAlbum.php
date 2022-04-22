<!DOCTYPE html>
<html>
<head>
<title>Add New Album</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>

    <!-- Adding navbar to the page -->
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Add New Album</h1>
        <form action="InsertAlbum.php" class="needs-validation" novalidate method="POST">
            <div class="mb-3">
                <label for="album" class="form-label">Album Name</label>
                <input type="text" class="form-control" id="album" name="album" aria-describedby="albumHelp" value="<?php if(isset($album)){ echo $album;}  ?>" >
                <!-- Show error to user  -->
                <span class="text-danger">
                    <?= isset($error['album']) ? $error['album'] : ''?> 
                </span>
            </div>

            <!-- Form to add new album to the collection -->
            <div class="mb-3">
                <label for="band" class="form-label">Band/Singer/Artist</label>
                <input type="text" class="form-control" id="band" name="band" value="<?= (isset($band)) ? $band : NULL ?>" aria-describedby="bandHelp">
                <span class="text-danger"><?= isset($error['band']) ? $error['band'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="<?= (isset($year))? $year : NULL ?>" aria-describedby="yearHelp">
                <span class="text-danger"><?= isset($error['year']) ? $error['year'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" value="<?= (isset($label))? $label : NULL ?>" aria-describedby="labelHelp">
                <span class="text-danger"><?= isset($error['label']) ? $error['label'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= (isset($description))? $description : NULL ?>" aria-describedby="descriptionHelp">
                <span class="text-danger"><?= isset($error['description']) ? $error['description'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="price" class="form-description">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= (isset($price))? $price : NULL ?>" aria-describedby="priceHelp">
                <span class="text-danger"><?= isset($error['price']) ? $error['price'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="image" class="form-description">Album Cover</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= (isset($image))? $description : NULL ?>" aria-describedby="imageHelp">
                <span class="text-danger"><?= isset($error['image']) ? $error['image'] : '' ?> </span>
           </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    

   
</body>
</html>