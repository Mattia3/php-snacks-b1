<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. -->

<?php
$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
  ],
];

$keys = array_keys($posts);
// var_dump($keys)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-2</title>
</head>
<body>
  

    <?php
    for($i = 0; $i < count($posts); $i++){
      $element = $posts[$keys[$i]];
     
     
      echo" <h3>" . $keys[$i] . "</h3>
            <ul>";
              for($x = 0; $x < count($element); $x++){
               
                echo "<li>" . $element[$x]['title'] . " </li>";
                echo "<li>" . $element[$x]['author'] . " </li>";
                echo "<li>" . $element[$x]['text'] . " </li>";
              }
      echo"</ul>";
    }
    ?>


 
  
</body>
</html>