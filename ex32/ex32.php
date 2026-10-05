<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercici 3.2</title>
</head>
<body>

    <h1>INTRODUEIX DADES</h1>

    <form method="POST">
        <textarea name="comentari"></textarea>
        <br><br>

        <label>separador:</label>
        <input type="text" name="separador">
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php

    if (isset($_POST["comentari"]) && isset($_POST["separador"])) {

        $comentari = $_POST["comentari"];
        $separador = $_POST["separador"];

        if (!file_exists("comentaris.txt")) {
            file_put_contents("comentaris.txt", "");
        }

        $comentari = str_replace(" ", $separador, $comentari);

        file_put_contents("comentaris.txt", $comentari . "\n", FILE_APPEND);
    }

    ?>

</body>
</html>