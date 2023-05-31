<?php
require_once("src/controllers/user.controller.php");

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    UserController::findAll();
}

?>