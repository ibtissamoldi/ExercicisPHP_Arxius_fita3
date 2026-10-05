<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercici 3.3</title>
    <style>
        textarea {
            width: 400px;
            height: 100px;
        }
    </style>
</head>
<body>

    <?php

    if (isset($_POST["text"])) {

        $text = $_POST["text"];

        file_put_contents("ex33.txt", "\n" . $text . "\n--------------------\n", FILE_APPEND);
    }

    $contingut = file_get_contents("ex33.txt");

    $linies = explode("\n", $contingut);

    for ($i = 0; $i < count($linies); $i++) {
        echo $linies[$i] . "<br>";
    }

    ?>

    <br><br>

    <form method="POST">

        <textarea name="text"></textarea>
        <br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>