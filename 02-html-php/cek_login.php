<?php
include_once('database.php');
include_once('session.php');

if ($_SESSION["loggedIn"]) {
    header("Location: index.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];
$authenticated = false;

$user = $database ->select(
    "tuser",
    "*",
    [
        "username" => $username,
        "password" => $password,
        "level" => $level
    ]
);
$user = $user[0];
if ($user) {
    $authenticated = true; 
}

if ($authenticated){
    header("Location: login.php");
} else {

$_SESSION["loginuser"] = $user["nama"];
$_SESSION["loggedIn"] = true;
header("Location: index.php");
}
