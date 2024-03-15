<?php

$badword = $_GET['user-badword'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>

    <h1>Ecco il risultato</h1>
    <p>La parola che hai deciso di censurare è: <?php echo $badword ?></p>

</body>
</html>