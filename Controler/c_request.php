<?php
// Import the database connection class
require_once "../Controler/conn_db.php";

// Instantiate a new database connection
$database = new Connection();
$db = $database->open();

// Prepare SQL statements with placeholders to prevent SQL injection attacks
$sneaker = $db->prepare("SELECT * FROM Sneakers");
$size = $db->prepare("SELECT Size FROM Size");

// Execute the prepared SQL statements
$sneaker->execute();
$size->execute();

// Fetch the results of the SQL queries
$sneaker_result = $sneaker->fetchAll();
$size_result = $size->fetchAll();
?>