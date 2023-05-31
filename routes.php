<?php
require_once("src/controllers/user.controller.php");
require_once("src/controllers/advertisements.controller.php");

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    require_once('src/views/index.php');
}elseif($uri === '/users') {
    UserController::findAll();
}elseif($uri === '/advertisements') {
    AdvertisementsController::findAll();
}

?>