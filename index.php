<?
require_once("database.php");
require_once("models/user.model.php");

$users = UserModel::getUsers();
foreach($users as &$user) {
    echo $user;
}

?>