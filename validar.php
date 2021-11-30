<?php

session_start();

if (isset($_POST)) {
    $post = array_filter($_POST);

    if (isset($post['inputEmail']))
        $_SESSION['email'] = $post['inputEmail'];

    if (isset($post['inputPassword']))
        $_SESSION['senha'] = $post['inputPassword'];
}

if (!isset($_SESSION['email'], $_SESSION['senha'])) {
    session_destroy();

    header('location: index.php');
    exit;
}

header('location: painel.php');
exit;