<?
/* 
Traccia Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa 
del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$matches = [ 
    [
     "local_team" => "Olimpia Milano",
     "visitor_team" => "Cantù",
     "local_points" => "55",
     "visitor_points" => "60",
    ],

    [
     "local_team" => "Virtus Bologna",
     "visitor_team" => "Varese",
     "local_points" => "45",
     "visitor_points" => "94",
    ],

    [
     "local_team" => "Virtus Roma",
     "visitor_team" => "Fortitudo Bologna",
     "local_points" => "84",
     "visitor_points" => "65",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Campionato di basket</h1>
    <?php for ($i=0; $i < count($matches); $i++) {?>
        <h2><?php echo $matches[i]["local_team"]; ?></h2>
        <h2><?php echo $matches[i]["visitor_team"]; ?></h2>
        <h2><?php echo $matches[i]["local_points"]; ?></h2>
        <h2><?php echo $matches[i]["visitor_points"]; ?></h2>
    <? } ?>
</body>
</html>


