<?php
/* 
Traccia Snack 3: 
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Strumenti: 
- ciclo for;
- array_keys().
*/

$posts = [
    '01-01-2007' => [
        'title' => 'Post 1',
        'author' => 'Fabio Pacifici',
        'text' => 'Testo Post 1',
    ],
    '01-01-2008' => [
        'title' => 'Post 2',
        'author' => 'Tiziano Nicolai',
        'text' => 'Testo Post 2',
    ],
    '01-01-2009' => [
        'title' => 'Post 3',
        'author' => 'Fabiola Gardin',
        'text' => 'Testo Post 3',
    ],
];

//var_dump($posts);
$key = array_keys($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <h1>Posts</h1>
    <?php for ($i=0; $i < count($posts); $i++) { ?>
        <h2><?php echo $posts[i]; ?></h2>
        <?php for ($n=0; $n < count($posts[key[i]]) ; $n++) { ?>
            <h2><?php echo $posts[key[i]][$n]['title']; ?></h2>
            <h2><?php echo $posts[key[i]][$n]['author']; ?></h2>
            <h2><?php echo $posts[key[i]][$n]['text']; ?></h2>
       <?php }   ?>
    <?php } ?> 
</body>
</html>

