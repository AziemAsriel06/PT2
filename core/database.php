<?php

class Database {
    private $connection;

    // Constructor runs automatically when you create a new Database object
    public function __construct() {
        try {
            // Create the PDO connection
            $this->connection = new PDO("mysql:host=lrgs.ftsm.ukm.my;dbname=a218574", "a218574", "cutegrayhorse");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle connection errors gracefully
            echo "Database connection failed: " . $e->getMessage();
            exit;
        }
    }

    // Method to get the PDO connection
    public function getConnection() {
        return $this->connection;
    }
}

?>