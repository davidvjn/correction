<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require_once './templates/header.html' ?>
    <form action="./controllers/connection.php" method="">
        <label for="login">Pseudo</label>
        <input type="text" name="login" value="jon">

        <label for="passwprd">Pseudo</label>
        <input type="passwprd" name="passwprd" value="1234">

        <input type="submit" value="envoyer">
    </form>
</body>
</html>