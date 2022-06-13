<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>
<?php
  // creiamo la classe movie e assegnamo degli attributi
  class Movie {
    public $title;
    public $genres;
    public $year;
    public $vote;

    // definiamo un costruttore con titolo, genere, anno d'uscita e voto medio del film
    function __construct($_title, $_year) {
      $this->title = $_title;
      $this->year = $_year;
    }

    // inseriamo nell'array tramite una funzione i generi del film
    public function insertGenre($_genre) {
      $this->genres[] = $_genre;
    }

    // stessa cosa per i voti
    public function insertVote($_vote) {
      $this->votes[] = $_vote;
    }

    // funzione che restituisce nel return la media dei voti del film
    public function getAverageVote() {
      $votesSum = 0;
      foreach ($this->votes as $vote) {
        $votesSum += $vote;
      }
      $avgvote = ($votesSum / count($this->votes));
      // arrotondo ai primi 2 numeri dopo la virgola
      $avgvote2decimal = number_format((float)$avgvote, 2, '.', '');
      return $avgvote2decimal;
    }
  }

$terminator = new Movie("Terminator", "1984");
$terminator->insertGenre("Azione");
$terminator->insertGenre("Fantascienza");
$terminator->insertGenre("Thriller");
$terminator->insertVote(8);
$terminator->insertVote(9);
$terminator->insertVote(6);

$robocop = new Movie("Robocop", "1987");
$robocop->insertGenre("Azione");
$robocop->insertGenre("Fantascienza");
$robocop->insertGenre("Thriller");
$robocop->insertGenre("Poliziesco");
$robocop->insertVote(7);
$robocop->insertVote(8);
$robocop->insertVote(7);

$catalogue = [];
$catalogue[] = $terminator;
$catalogue[] = $robocop;
?>
<h1>Movie Database</h1>
<ul>
    <?php foreach ($catalogue as $movie) { ?>
        <li>
            <h2><?php echo $movie->title; ?></h2>
            <h3>Generi: <?php echo $movie->genres; ?></h3>
            <div>Uscito nell'anno <?php echo $movie->year; ?></div>
            <div>Voto medio: <?php echo $movie->getAverageVote(); ?></div>
        </li>
    <?php } ?>
</ul>
</body>
</html>