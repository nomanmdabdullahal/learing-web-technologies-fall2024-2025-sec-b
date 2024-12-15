<?php
session_start();

if (isset($_SESSION['id'], $_SESSION['password'])) {
    if ($_SESSION['id'] === $_SESSION['ids'] && $_SESSION['password'] === $_SESSION['passwords']) {
        header("Location: uhome.php");
        exit();
    }
	if ($_SESSION['id'] === $_SESSION['ids'] && $_SESSION['password'] === $_SESSION['passwords']) {
        header("Location: adhome.php");
        exit();
    }
}

header("Location: login.php");
exit();
?>