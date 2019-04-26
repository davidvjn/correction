<?php

session_start();

if (isset($_SESSION['lorem'])) {
    $_SESSION['lorem'] = $_POST['lorem'];
}
if (isset($_SESSION['img'])) {
    $_SESSION['img'] = $_POST['img'];
}
if (isset($_SESSION['img'])) {
    $_SESSION['lorem2'] = $_POST['lorem2'];
}

header('Location: /');