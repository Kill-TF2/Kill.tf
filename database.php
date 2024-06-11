<?php

// Code to store button clicks online
session_start();

if (!isset($_SESSION['clicks'])) {
    $_SESSION['clicks'] = 0;
}

if (isset($_POST['button_click'])) {
    $_SESSION['clicks']++;
    // Store the click in a database or file
}

?>
