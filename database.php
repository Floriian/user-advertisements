<?php
class Database {
    private $database;

    public static function dbInstance() {
        if(!isset($this->database)) {
            try {
                $this->database = new mysqli("database", "root", "rootpassword", "appdatabase");
            } catch(Exception $e) {
                die("Error when trying connect to database.");
            }
        }
        return $database;
    }
}
?>