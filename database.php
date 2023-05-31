<?php
class Database {
    private static $database;

    public static function getDatabase() {
        if (!isset(self::$database)) {
            try {
                self::$database = new mysqli("database", "root", "rootpassword", "appdatabase");
            } catch (Exception $e) {
                die("Error when trying to connect to the database.");
            }
        }
        return self::$database;
    }
}
?>