<?php

$badword = $_GET['user-badword'];
$paragraph = $_GET['user-paragraph'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Risultato</title>
</head>
<body>

    <div class="container">
        <h1>Ecco il risultato</h1>
        <p>La parola che hai deciso di censurare è: <?php echo $badword ?></p>
        
        <div class="paragraph">
            Il tuo paragrafo è:
            <p>
                <?php
                echo $paragraph
                ?>
                </p>
            <div class="lenght">
                Lunghezza: <?php echo strlen($paragraph)?>
            </div>
        </div>
        <div class="cens-paragraph">
            Il tuo paragrafo censurato è:
            <p>
                <?php
                $censParagraph = str_ireplace($badword,"***",$paragraph);
                echo $censParagraph
                ?>
            </p>
            <div class="lenght">
                Lunghezza: <?php echo strlen($censParagraph)?>
            </div>
        </div>
    </div>

</body>
</html>