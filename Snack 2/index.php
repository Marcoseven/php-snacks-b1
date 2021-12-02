<?php
/* 
Traccia Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Strumenti:
- GET;
- strlen(); 
- strpo();
- is_numeric().
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h1>Condizioni di accesso</h1>

    <?php if(strlen($name) > 3 && (strpos($mail, '@') && strpos($mail, '.')) && is_numeric($age)){?>
        <h2>Accesso riuscito</h2>
    <?php } else{ ?>
        <h2>Accesso negato</h2>
    <?php } ?>
</body>
</html>