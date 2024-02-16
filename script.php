<?php

$paragraph = $_GET['p'];
$word = $_GET['input'];

$paragraph_len = strlen(trim($paragraph));

$censure_paragraph = str_replace($word, '***', $paragraph);
$censure_paragraph_len = strlen($censure_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Il tuo commento:</h1>
    <p> 
        <?= $paragraph ?>
        (lunghezza totale: <?= $paragraph_len ?>)
    </p>
    
    <h3>La parola censurata: <?= $word ?></h3>

    <h1>Il tuo nuovo commento (con la censura):</h1>
    <p> 
        <?= $censure_paragraph ?> 
        (lunghezza totale: <?= $censure_paragraph_len ?>)
    </p>
</body>
</html>

