<?php

session_start();

[
    [
        'login' => 'dave',
        'password' => '0000',
    ]
    [
        'login' => 'daniel',
        'password' => 'Hello',
    ]
    ];

    foreach ($users as $user) {
        if( $_POST['login'] && $_POST['password'] == $user['login'] && $user['password']) {

            $_SESSION['LOGIN'] = $_POST['LOGIN'];
            header('Location; /');
            break;
        } else {
            header('Location; /login.php');
        }
    }