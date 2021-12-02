<?php
/* 
Traccia:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Strumenti:
- GET,
- strlen(), 
- strpo(),
- ...
*/

$name = $_GET[$name];
$mail = $_GET[$mail];
$age = $_GET[$age];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Condizioni di accesso</h1>
<h2>Accesso per il nome: </h2>
    <?php 
    if (strlen($name) > 3){ ?>
        <h3>Accesso Riuscito</h3>
    <?php } else{ ?>
        <h3>Accesso Negato</h3>
    <?php } ?>

<h2>Accesso per l'email: </h2>
    <?php 
    if (strpos($mail, '@') && strpos(email, '.')){ ?>
        <h3>Accesso Riuscito</h3>
    <?php } else{ ?>
        <h3>Accesso Negato</h3>
    <?php } ?>
</body>
</html>

