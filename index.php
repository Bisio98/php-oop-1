<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Films</h1>
    <?php
       class Movie{
           public $title;
           public $author;
           public $year;
           public $age = 1;

           public function __construct($_name,$_year,$_author){
               $this->title = $_name;
               $this->author = $_author;
               $this->year = $_year;
           }

           public function getAge(){
               $tmp = 2022 - $this->year;
               $this->age = $tmp;
           }
       }

       $lavitaebella = new Movie('La vita è bella',1992,'Roberto Benigni');
       $lavitaebella->getAge();

       $avengersendgame = new Movie('Avengers: Endgame', 2019,'Russo Brothers');
       $avengersendgame->getAge();

       var_dump($lavitaebella,$avengersendgame);
    ?>

</body>
</html>