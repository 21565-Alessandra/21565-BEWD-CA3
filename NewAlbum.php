
<!DOCTYPE html>
<html>
<head>
<title>Insert Album</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Insert album</h1>
        <form action="InsertAlbum.php" class="needs-validation" novalidate method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Album Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?php if(isset($name)){ echo $name;}  ?>" >
                <!-- show error to user  -->
                <span class="text-danger">
                    <?= isset($error['name']) ? $error['name'] : ''?> 
                </span>
            </div>
            <div class="mb-3">
                <label for="band_singer" class="form-label">Band/Singer/Artist</label>
                <input type="text" class="form-control" id="band_singer" name="band_singer" value="<?= (isset($band_singer)) ? $band_singer : NULL ?>" aria-describedby="band_singerHelp">
                <span class="text-danger"><?= isset($error['band_singer']) ? $error['band_singer'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" value="<?= (isset($label))? $label : NULL ?>" aria-describedby="labelHelp">
                <span class="text-danger"><?= isset($error['label']) ? $error['label'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="year_released" class="form-label">Year</label>
                <input type="text" class="form-control" id="year_released" name="year_released" value="<?= (isset($year_released))? $year_released : NULL ?>" aria-describedby="year_releasedHelp">
                <span class="text-danger"><?= isset($error['year_released']) ? $error['year_released'] : '' ?> </span>
           </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    

   
</body>
</html>