<?php

header("Content-type: application/json");

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['username']) && isset($_POST['password'])) {

    $login_username = htmlspecialchars($_POST['username']);
    $login_password = htmlspecialchars($_POST['password']);

    require_once '../classes/dbh.class.php';
    require_once '../classes/login.class.php';
    require_once '../classes/loginContr.class.php';

    try {
        $login = new LoginContr($login_username, $login_password);
        $login->loginUser();

        if(isset($_SESSION['loginUsername']) && isset($_SESSION['userId'])) {
            $redirectURL = '../admin/index.php';
        } 

        echo json_encode([
            'status' => 'success',
            'redirectURL' => $redirectURL
        ]);
        exit();

    } catch (Exception $e) {

        echo json_encode([
            'status' => 'error',
            'error' => urlencode($e->getMessage()) 
        ]);
        exit();
    }
} else {
    echo json_encode([
        'status' => 'error',
        'error' => 'Invalid request.'
    ]);
    exit();

}

