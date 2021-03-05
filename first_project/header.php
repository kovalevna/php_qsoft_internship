<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/cookie.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/main_menu.php";


if (isset($_POST["button2"]) && $_POST["button2"] == "Выйти") {
    $_SESSION = array();
    session_destroy();
}

if (!isset($_SESSION['auth']) && (! isset($_GET['login']) || $_GET['login'] != 'yes')) {
    header('Location: /?login=yes');
 }
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

<div class="header">
    <div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
    <div class="clearfix"></div>
</div>
<form action="<?= !isset($_SESSION["auth"]) ? "/?login=yes" : "/" ?>" method="POST">
<input type="submit" name="button2" value="<?= isset($_SESSION["auth"]) ? "Выйти" : "Авторизация"?>">
<div class="clearfix">
    <?php viewMenu($menu, "main-menu", SORT_ASC); ?>
</div>