<?php
require_once("src/models/user.model.php");

class UserController {
    /**
     * It renders all users.
     */
    public static function findAll() {
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        //Pass $users variable to users view.
        require_once(__DIR__ . '/../views/users/index.php');
    }

    /**
     * It renders user page.
     */
    public function findOne() {
    }
}

?>