<?php
// Require the connection class for database access
require_once("../Controler/c_conn.php");

// Check if the form was submitted
if (isset($_POST['add'])) {
    
    // Sanitize user inputs to prevent SQL injection
    $name = filter_var($_POST['Name_Sneakers']);
    $size = filter_var($_POST['Size']);

    try {
        // Prepare SQL statement with placeholders to avoid SQL injection
        $stmt = $db->prepare("INSERT INTO Request (Sneakers_ID, Size_ID)
            SELECT (SELECT ID FROM Sneakers WHERE Name_Sneakers = :Name_Sneakers),
            (SELECT ID FROM Size WHERE Size = :Size)");

        // Bind sanitized input values to the placeholders
        $stmt->bindParam(':Name_Sneakers', $name);
        $stmt->bindParam(':Size', $size);

        // Execute the statement and set a success message if successful
        if ($stmt->execute()) {
            $_SESSION['message'] = 'Success';
        } else {
            $_SESSION['message'] = 'Error';
        }
    } catch (PDOException $e) {
        // If an exception occurs, set the error message to the exception message
        $_SESSION['message'] = $e->getMessage();
    }

    // Close the database connection
    $db = null;

} else {
    // If the form was not submitted, set a message to prompt the user to fill out the form
    $_SESSION['message'] = "Please fill out the form first.";
}

// Redirect the user to the home page
header('location: ../View/');
?>