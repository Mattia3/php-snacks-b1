<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
  $arrayRandomNumber = [];
  for($i = 0; $i < 15; $i++){
    $randomNumber = rand(0,100);
   
    if(!in_array($randomNumber, $arrayRandomNumber)){
       $arrayRandomNumber[] = $randomNumber;
      
    }else{
      $i--;
    }
  }
  var_dump($arrayRandomNumber)

?>