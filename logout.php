<?php
session_start();

if (isset($_SESSION['auth'])) {
    session_unset();
    $_SESSION['message'] = "Logged Out Successfuly";
}

header('location: index.php');
exit();
