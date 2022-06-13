<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>PhpOop</title>
</head>
<body>
  <?php
    class Movie {
      public $title;
      public $poster;
      public $genre;
      public $cast;
      public $price;

      function __construct($_title, $_genre, $_price) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->price = $_price;
      }

      public function getPoster($_imgName) {
        $this->poster = "./img/" . $_imgName;
      }

      public function getCast($_cast) {
        $this->cast[] = $_cast;
      }

      public function stringCast() {
        return join(", ", $this->cast);
      }
    }

    $doctorStrange = new Movie("Doctor Strange in the Multiverse of Madness", "Fantasy", 6);
    $doctorStrange->getCast("Elizabeth Olsen");
    $doctorStrange->getCast("Benedict Cumberbatch");
    $doctorStrange->getCast("Rachel McAdams");
    $doctorStrange->getCast("Xochitl Gomez");
    $doctorStrange->getPoster("doctor.jpeg");

    $silenteSecrets = new Movie("Fantastic Beasts and Where To Find Them 3", "Fantasy", 5);
    $silenteSecrets->getCast("Mads Mikkelsen");
    $silenteSecrets->getCast("Eddie Redmayne");
    $silenteSecrets->getCast("Jude Law");
    $silenteSecrets->getCast("Katherine Waterston");
    $silenteSecrets->getPoster("segreti.jpg");


    $movieList = [];
    $movieList[] = $doctorStrange;
    $movieList[] = $silenteSecrets;
  ?>

  <h1>Buy a ticket for your Movie!</h1>
  <div class="movie-container">
    <?php foreach ($movieList as $movie) { ?>
      <div class="card">
        <h2><?php echo $movie->title; ?></h2>
        <div class="img-container">
          <img src="<?php echo $movie->poster ?>" alt="<?php echo $movie->title ?>">
        </div>
        <h3>Genre: <?php echo $movie->genre; ?></h3>
        <h4>Cast: <?php echo $movie->stringCast(); ?></h4>
        <h5>Price: <?php echo $movie->price . "$" ?></h5>
      </div>
    <?php } ?>
  </div>
  
</body>
</html>