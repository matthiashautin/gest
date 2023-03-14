<?php
include("../Controler/c_conn.php");

    if(isset($_GET['ID'])){
        try{
            $sql = "UPDATE `Request` SET `state`='sent' WHERE Request_ID = '".$_GET['ID']."'";
           
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Succes' : 'Error';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
        $database->close();
    }
    else{
    $_SESSION['message'] = 'Fill in the form';
    }

    header('location: ../View/');

?>