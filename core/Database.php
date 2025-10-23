<?php
require_once __DIR__ . '/../config/database.php';

class Database {
    public static function getConnection() {
        return getConnexion();
    }
}
?>
