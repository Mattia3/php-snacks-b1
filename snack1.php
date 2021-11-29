<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->

<?php
if (empty($_GET['email'] && ['name'] && ['anni'])) {
  exit("Nessun text inserito nell'url");
}


$name = $_GET["name"];
$email = $_GET["email"];
$anni = $_GET["anni"];

$emailParts = explode("@", $email);
$hasDot = strchr($emailParts[1], ".");
$hasAt = strchr($email, "@");

// var_dump($email);
// var_dump($hasDot, $hasAt);

//Verifico che tutte le condizioni siano giuste
if ($hasDot && $hasAt && strlen($name) > 3 && is_numeric($anni)) {
  echo "Accesso riuscito";
} else {
  echo "Accesso Negato";
}

// if(strlen($name) > 3){
//   echo "Accesso riuscito";
// }else{
//   echo "Accesso Negato";
// }
// var_dump($name);

// if(is_numeric($anni)){
//   echo "Accesso riuscito";
// }else{
//   echo "Accesso Negato";
// }
// var_dump($anni);

?>


