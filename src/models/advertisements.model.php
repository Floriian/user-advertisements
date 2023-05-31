<?php
class AdvertisementsModel {
    private $db;

    public __construct() {
        $this->db = Database::getDatabase();
    }

    /**
     * It returns all advertisements from database.
     */
    public static function getAdvertisements() {
        
        $sql = "SELECT * FROM `advertisements`";
        $result = mysqli_query($this->$db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    /**
     * It returns one advertisement by id from database. 
     * @param name Username
     */
    public static function getAdvertisement($id) {
        $sql = "SELECT * FROM `advertisements` WHERE `id`='$id'"
        $result = mysqli_query($this->$db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    /**
     * It returns users advertisements by user's name.
     * @param id User's ID.
     */
    public static function getUserAdvertisements($id) {
        $user = UserModel::getUserById($id);
        $userID = $user['id'];

        $sql = "SELECT * FROM advertisements WHERE userid='$userID'";
        $result = mysqli_query($this->$db, $sql)->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
}

?>