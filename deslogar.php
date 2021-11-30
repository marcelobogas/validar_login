<?php

session_start();

if (isset($_SESSION['email'], $_SESSION['senha']))
    session_destroy();

header('location: index.php');
