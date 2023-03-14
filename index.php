<?php
// $servername = "10.3.112.10:5435";
// $username = "isa-admin";
// $password = "isaR0Ot!";
// $dbname = "isaDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: ".mysqli_connect_error());
// }

// $sql = "SELECT * FROM store_request_sizes";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Size: " . $row["Size"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn); // Fermeture de la connexion



// Paramètres de connexion
$servername = "10.3.112.10:5435";
$username = "isa-admin";
$password = "isaR0Ot!";
$dbname = "isaDB";

try {
    // Créer une nouvelle connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Configurer le mode d'erreur PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Afficher un message si la connexion est réussie
    echo "Connexion à la base de données réussie";
}
catch(PDOException $e) {
    // Afficher un message d'erreur si la connexion échoue
    echo "La connexion a échoué : " . $e->getMessage();
}

?>