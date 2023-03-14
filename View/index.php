<?php
include("../Controler/c_conn.php");
include("../Model/m_header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Store_Request</title>
</head>
<body class="transparent">
    <table class="table_request" id="table-id">
        <div class="container">
            <th class="top-th">Sneaker</th>
            <th class="top-th">Size</th>
            <th class="top-th">State</th>
        </div>
        <?php
            include("../Model/m_request.php");
        ?>
    </table>
</body>
</html>