<?php
// Set up database connection credentials securely
// define('DB_HOST', '10.3.112.10');
// define('DB_PORT', '3306');
// define('DB_NAME', 'isaDB');
// define('DB_USER', 'isa-admin');
// define('DB_PASS', 'isaR0Ot!');

define('DB_HOST', 'mysql-hautin.alwaysdata.net');
define('DB_NAME', 'hautin_veja');
define('DB_USER', 'hautin_veja');
define('DB_PASS', 'S@4aAn8W!m%4Jt+W4=mLz5#9.A4#Ce8f');

// Create a new Connection class with secure connection settings
class Connection {
    private $conn;

    public function open() {
        try {
            $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conn->exec("SET NAMES 'utf8mb4'");
        } catch (PDOException $e) {
            echo "Database connection error: " . $e->getMessage();
        }
        return $this->conn;
    }

    public function close() {
        $this->conn = null;
    }
}

// Create a new database connection object
$database = new Connection();
// Open the database connection
$db = $database->open();

?>




















<?php
// // Set up database connection credentials securely
// define('DB_HOST', '10.3.112.10');
// define('DB_PORT', '3306');
// define('DB_NAME', 'isadb');
// define('DB_USER', 'isa-admin');
// define('DB_PASS', 'isaR0Ot!');

// // Create a new Connection class with secure connection settings
// class Connection {
//     private $conn;

//     public function open() {
//         try {
//            $this->conn = new PDO("pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//             $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//             $this->conn->exec("SET NAMES 'utf8mb4'");
//         } catch (PDOException $e) {
//             echo "Database connection error: " . $e->getMessage();
//         }
//         return $this->conn;
//     }

//     public function close() {
//         $this->conn = null;
//     }
// }

?>

