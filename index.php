<?
require_once("database.php");
require_once("models/user.model.php");

echo phpinfo();

print(UserModel::getUsers());
?>