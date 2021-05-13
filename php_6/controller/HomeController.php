<?php

$pageHeader = 'Добро пожаловать';

//$username = isset($_GET['username']) && !empty($_GET['username']) ? $_GET['username'] : null;

//$username = isset($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] : null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
}

$username = null;

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
//    $expires = time() + 3600;
//    setcookie('username', $username, $expires);
//    setcookie('username', $username, time() -1);
    $_SESSION['username'] = $username;
}

require_once 'view/home.php';

