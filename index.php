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
  class movie {
    public $title;
    public $genres;
    public $year;
    public $vote;

    // definiamo un costruttore con titolo, genere, anno d'uscita e voto medio del film
    function __construct($_title, $_genres = [], $_year, $_vote) {
      $this->title = $_title;
      $this->genres = $_genres;
      $this->year = $_year;
      $this->vote = $_vote;
    }

    // inseriamo nell'array tramite una funzione i generi del film
    public function insertGenre($_genre) {
      $this->genres[] = $_genre;
    }

    // funzione che restituisce nel return la media dei voti del film
    public function getAverageVote() {
      $votesSum = 0;
      foreach ($this->votes as $vote) {
        $votesSum += $vote;
      }
      $avgvote = $votesSum / count($this->votes);
      return $avgvote;
    }
  }
?>
</body>
</html>