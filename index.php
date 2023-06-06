<!DOCTYPE html>

<?php
$testo = $_POST['testo'];
$censura = $_POST['censura'];
$sostituzione = '***';
$testo_censurato = str_replace($censura, $sostituzione, $testo, $num_censura);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>testo normale: <?= $testo;?></p>
    <p>parola da censurare: <?= $censura?></p>
    <p>testo censurato: <?= $testo_censurato?> </p>
    <p>numero di parole censurate: <?= $num_censura?> </p>
</body>
</html>