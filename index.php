<?php 
  session_start();
 ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home Page</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard Home Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav justify-content-end" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <header class="jumbotron my-4">
      <h1 class="display-3">Welcome!</h1>
      <p class="lead">Selamat Datang diHome Page silahkan Login Untuk menuju dashboard.</p>
      <a href="home.php" class="btn btn-primary btn-lg">Login</a>
    </header>
    <div class="row text-center">
      <div class="col-6">
        <div class="card h-100">
          <img class="card-img-top" src="src/4565.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Ada yang baru nihh!!!!</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="home.php" class="btn btn-primary">Check This out!!</a>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card h-100">
          <img class="card-img-top" src="src/10146.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Ada yang baru nihh!!!!</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="home.php" class="btn btn-primary">Check This out!!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="py-5 bg-dark">
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>