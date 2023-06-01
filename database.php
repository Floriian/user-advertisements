<?php
class Database {
    private static $database;

    public static function getDatabase() {
        if (!isset(self::$database)) {
            try {
                self::$database = new mysqli("mysql_database", "root", "rootpassword", "appdatabase"); //We need to use "mysql_database" in HOST, because it is connected to each other via docker-network.
            } catch (Exception $e) {
                die("Error when trying to connect to the database.");
            }
        }
        return self::$database;
    }
}
?>