<?php
require_once("database.php");
class UserModel {
    private $db;

    public function __construct() {
        $this->db = Database::getDatabase();
    }

    /**
     * It returns all users from database.
     */
    public function getUsers() {
        
        $sql = "SELECT * FROM `users`";
        $result = $this->db->query($sql);

        $users = array();

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $users[] = $row;
        }

        return $users;
    }
}

?>