<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Que voulez-vous afficher?</h1>
    <form action="checklist.php" method="POST">
        <div>
            <label for="">Un paragraphe</label>
            <input type="checkbox" name="lorem" id="">

            <label for="">Une image</label>
            <input type="checkbox" name="img" id="">

            <label for="">Autre chose</label>
            <input type="checkbox" name="lorem2" id="">
        </div>
        <input type="submit" value="OK">
    </form>
</body>
</html>