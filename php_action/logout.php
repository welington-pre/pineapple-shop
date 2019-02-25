<?php
session_start();

if (empty($_SESSION['id'])) {
    header('Location: ../index.php');
}

if (!empty($_SESSION['id'])) {
    $_SESSION['id'] = null;
    session_unset();
    session_destroy();
    header('Location: ../index.php');
}

