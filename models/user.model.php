<?php
class UserModel {
    public $users = [];

    public static function getUsers() {
        
        $db = Database::getDatabase();
        $sql = "SELECT `name` FROM `users`";
        $result = mysqli_query($db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
}

?>