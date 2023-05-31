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

    /**
     * It returns one user by username from database. 
     * @param name Username
     */
    public function getUser($name) {
        $sql = "SELECT * FROM `users` WHERE `name`='$name'";
        $result = $this->db->query($sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    /**
     * It returns one user by ID from database
     * @param id User's ID.
     */
    public function getUserById($id) {
        $sql = "SELECT * FROM `users` WHERE `id`='$name'";
        $result = $this->db->query($sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
}

?>