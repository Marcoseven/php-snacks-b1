<?php
/* 
Traccia Snack 5: 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
Strumenti: 
- explode();
- ciclo for.
*/

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae ut, doloremque mollitia veniam a dolorem debitis cupiditate consectetur maiores molestias molestiae nobis quas corrupti aspernatur necessitatibus! Dolorum, iure reprehenderit.";
$paragraph = explode('.', $text);
// var_dump($text);
// var_dump($paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <h1>Paragrafi</h1>
    <h2>Paragrafo originale: </h2>
    <p><?php echo $text; ?></p>

    <h2>Paragrafi separati: </h2>
    <?php for ($i=0; $i < count($paragraph); $i++) {?>
    <p><?php paragraph[$i]; ?></p>
    <?php } ?>    
</body>
</html>
