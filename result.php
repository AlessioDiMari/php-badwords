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
        <p>La parola che hai deciso di censurare è: <strong><?php echo $badword ?></strong> </p>
        
        <div class="paragraph">
            <div class="cap">
                Il tuo paragrafo è:
            </div>
            <p>
                <?php
                echo $paragraph
                ?>
                </p>
            <div class="lenght">
                Lunghezza: <strong><?php echo strlen($paragraph)?></strong>
            </div>
        </div>
        <div class="cens-paragraph">
            <div class="cap">
                Il tuo paragrafo dopo le censure è:
            </div>
            <p>
                <?php
                $censParagraph = str_ireplace($badword,"***",$paragraph);
                echo $censParagraph
                ?>
            </p>
            <div class="lenght">
                Lunghezza: <strong><?php echo strlen($censParagraph)?></strong>
            </div>
        </div>
    </div>

</body>
</html>