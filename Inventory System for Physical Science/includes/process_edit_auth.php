<?php

header("Content-type: application/json");

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['changeUsername']) && isset($_POST['changePassword'])) {

    $change_username = htmlspecialchars($_POST['changeUsername']);
    $change_password = htmlspecialchars($_POST['changePassword']);

    require_once '../classes/dbh.class.php';
    require_once '../classes/settings.class.php';
    require_once '../classes/settingsContr.class.php';

    try {
      
        $editAuth = new SettingsContr();

        $editAuth->modifyAuthChanges($change_username, $change_password);


    } catch (Exception $e) {

    }
} else {    
  
}

