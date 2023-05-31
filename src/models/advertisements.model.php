<?php
class AdvertisementsModel {
    private $db;

    public function __construct() {
        $this->db = Database::getDatabase();
    }

    /**
     * It returns all advertisements from database.
     */
    public function getAdvertisements() {
        
        $sql = "SELECT title,name FROM advertisements INNER JOIN users";
        $result = $this->db->query($sql);
        $advertisements = array();

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $advertisements[] = $row;
        }

        return $result;
    }

    /**
     * It returns one advertisement by id from database. 
     * @param name Username
     */
    public function getAdvertisement($id) {
        $sql = "SELECT * FROM `advertisements` WHERE `id`='$id'";
        $result = mysqli_query($this->$db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    /**
     * It returns users advertisements by user's name.
     * @param id User's ID.
     */
    public function getUserAdvertisements($id) {
        $user = UserModel::getUserById($id);
        $userID = $user['id'];

        $sql = "SELECT * FROM advertisements WHERE userid='$userID'";
        $result = mysqli_query($this->$db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
}

?>