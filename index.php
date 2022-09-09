<?php
class Movie
{
  public $title;
  public $year;
  public $cast;
  public $plot;

  public function __construct($title, $year, $cast, $plot)
  {
    $this->title = $title;
    $this->year = $year;
    $this->cast = $cast;
    $this->plot = $plot;
  }

  public function getMainCharacter()
  {
    return 'Daniel Radcliffe';
  }
}

$movie_cast = 'Emma Watson,Ruper Grint, Michael Gambon,Alan Rickman';
$movie_plot = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$Movie1 = new Movie('Harry Potter e la pietra filosofale', 2001, $movie_cast, $movie_plot);
$Movie2 = new Movie('Harry Potter e la camera dei segreti', 2002, $movie_cast, $movie_plot);
$Movie3 = new Movie('Harry Potter e il prigioniero di Azkaban', 2004, $movie_cast, $movie_plot);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <h2>Film Harry Potter</h2>
  <p><span><strong>Protagonista: </strong></span><?= $Movie1->getMainCharacter() ?></p>
  <ul>
    <li>
      <span><strong>Titolo: </strong></span><?= $Movie1->title ?>
    </li>
    <li><span><strong>Anno: </strong></span><?= $Movie1->year ?></li>
    <li><span><strong>Cast: </strong></span><?= $Movie1->cast ?></li>
    <li><span><strong>Trama: </strong></span><?= $Movie1->plot ?></li>
  </ul>
  <ul>
    <li>
      <span><strong>Titolo: </strong></span><?= $Movie2->title ?>
    </li>
    <li><span><strong>Anno: </strong></span><?= $Movie2->year ?></li>
    <li><span><strong>Cast: </strong></span><?= $Movie2->cast ?></li>
    <li><span><strong>Trama: </strong></span><?= $Movie2->plot ?></li>
  </ul>
  <ul>
    <li>
      <span><strong>Titolo: </strong></span><?= $Movie3->title ?>
    </li>
    <li><span><strong>Anno: </strong></span><?= $Movie3->year ?></li>
    <li><span><strong>Cast: </strong></span><?= $Movie3->cast ?></li>
    <li><span><strong>Trama: </strong></span><?= $Movie3->plot ?></li>
  </ul>
</body>

</html>