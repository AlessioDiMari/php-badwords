<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>

    <h1>Form PHP</h1>

    <form action="result.php">

        <div class="input-p">
            <label for="">Scrivi un paragrafo:</label>
            <input name="user-paragraph" type="text" placeholder="paragrafo">
        </div>
        <div class="input-bw">
            <label for="">Scrivi la parola che vuoi censurare contenuta nel paragrafo:</label>
            <input name="user-badword" type="text" placeholder="parola">
        </div>
        
        <input type="submit">

    </form>

</body>
</html>