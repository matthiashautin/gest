<?php
try {
    $sql = "SELECT * FROM store_request_request As Req
            INNER JOIN Sneakers ON Sneakers.ID = Req.Sneakers_ID
            INNER JOIN Size ON Size.ID = Req.Size_ID
            ORDER BY Request_ID DESC";

    foreach ($db->query($sql) as $row) {
        // Ajouter la classe "sent" si la colonne "state" a la valeur "sent"
        $state_sent = ($row['state'] == "sent") ? "sent" : "";
        // Ajouter la classe "in-progress" si la colonne "state" a la valeur "in progress"
        $state_in_progress = ($row['state'] == "in progress") ? "in-progress" : "";
        // Générer la ligne du tableau avec la classe CSS
        $state_out_of_stock = ($row['state'] == "out of stock") ? "out-of-stock" : "";
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row['Name_Sneakers']); ?></td>
            <td><?php echo htmlspecialchars($row['Size']); ?></td>
            <td class="<?php echo $state_sent ?><?php echo $state_in_progress ?><?php echo $state_out_of_stock ?>"><?php echo htmlspecialchars($row['state']); ?></td>
            <td class="td-edit-delete">
                <a href="../Model/m_confirm.php?ID=<?php echo htmlspecialchars($row['Request_ID']); ?>" id="check" class="btn-edit" data-bs-toggle="modal"> <img src="../Images/check.png" class="icons"></a>
                <a href="../Model/m_out_stock.php?ID=<?php echo htmlspecialchars($row['Request_ID']); ?>" id="out-stock" class="btn-edit" data-bs-toggle="modal"> <img src="../Images/out-stock.png" class="icons"></a>
                <a href="../Model/m_delete.php?ID=<?php echo htmlspecialchars($row['Request_ID']); ?>" id="delete" class="btn-edit" data-bs-toggle="modal"> <img src="../Images/delete.png" class="icons"></a>
            </td>
        </tr>
        <?php
    }
} catch(PDOException $e) {
    echo 'Il y a un problème de connexion :' . $e->getMessage();
}

// Fermer la connexion
$database->close();

?>
