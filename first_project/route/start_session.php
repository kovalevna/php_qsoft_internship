<?php
session_start();
if (isset($_SESSION["auth"])) {
    require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/route/title.php";
}