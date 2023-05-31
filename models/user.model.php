<?php
class UserModel {

    // private $db;
    public $users = [];

    function __construct() {
        // $this->db = $Database->getDatabase();
    }

    public static function getUsers() {
        
        $db = Database::getDatabase();
        $sql = "SELECT `name` FROM `users`";
        $result = mysqli_query($db, sql);


    }
}

?>