<?php
require_once("src/controllers/user.controller.php");
require_once("src/controllers/advertisements.controller.php");

$uri = $_SERVER['REQUEST_URI']; //Get URL path.

//If you want to add new route, please add another 'elseif' statement  at the end.

if($uri === '/') {
    require_once('src/views/index.php');
}elseif($uri === '/users') {
    UserController::findAll();
}elseif($uri === '/advertisements') {
    AdvertisementsController::findAll();
}

?>