<?
/* 
Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa 
del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$first_match = [
     "casa" => "Olimpia Milano",
     "ospite" => "Cantù",
     "punti squadra di casa" => "55",
     "punti squadra di ospite" => "60",
    ];

    $second_match = [
     "casa" => "Virtus Bologna",
     "ospite" => "Varese",
     "punti squadra di casa" => "45",
     "punti squadra di ospite" => "94",
    ];

    $third_match = [
     "casa" => "Virtus Roma",
     "ospite" => "Fortitudo Bologna",
     "punti squadra di casa" => "84",
     "punti squadra di ospite" => "65",
    ];
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
    <h1>Campionato di basket</h1>

    <h2>Primo match: </h2>
    <p><?= $first_match[0].' - '.$first_match[1].' | '.$first_match[2].' - '.$first_match[3] ?></p>

    <h2>Secondo match: </h2>
    <p><?= $second_match[0].' - '.$second_match[1].' | '.$second_match[2].' - '.$first_match[3] ?></p>

    <h2>Terzo match: </h2>
    <p><?= $third_match[0].' - '.$third_match[1].' | '.$third_match[2].' - '.$third_match[3] ?></p>
</body>
</html>


