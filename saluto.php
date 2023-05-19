<?php
$nome = $_GET['nomePersona'];
$cognome = $_GET['cognomePersona'];
$paragrafo = $_GET['paragrafo'];

// $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem obcaecati doloribus debitis quae illo sint qui nulla illum dicta cupiditate quas nemo veritatis, labore accusamus dolores, aliquid, quo nisi dolorum.';


$pCensured = str_replace('dolor', '***', $paragrafo);

// explode(',', $paragraph);

// var_dump( explode(',', $paragraph) );


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risposta</title>
</head>
<body>
    <h1>Ciao <?php echo $nome.' '.$cognome?> benvenuto!</h1>
    <p><?php echo $pCensured?></p>
</body>
</html>