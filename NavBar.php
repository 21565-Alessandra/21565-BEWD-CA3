<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">YALP STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="collection.php">Collection</a>
          <!-- <a class="nav-link active" aria-current="page" href="NewAlbum.php">Add Album</a> -->
        </li>
      </ul>
      <form class="d-flex">


        <?php 
          session_start();
          if(isset($_SESSION) && isset($_SESSION['id'])){
            echo  "<a class='btn disabled btn-dark' href='#'>".$_SESSION['username']."</a>";
            echo "<a class='btn btn-outline-danger' href='LogOut.php'>Log Out</a>";
          }
          else{
            echo "<a class='btn btn-outline-primary' href='LogIn.php' style='margin: 2px'>Log In</a>";
            echo "<a class='btn btn-outline-success' href='SignIn.php' style='margin: 2px'>Sign In</a>";
            session_destroy();
          }
        ?>
        
      </form>
    </div>
  </div>
</nav>