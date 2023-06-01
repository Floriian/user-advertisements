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
        
        $sql = "SELECT title,name FROM advertisements INNER JOIN users WHERE users.id = advertisements.userid";
        $result = $this->db->query($sql);
        $advertisements = array();

        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $advertisements[] = $row;
        }

        return $result;
    }
}

?>