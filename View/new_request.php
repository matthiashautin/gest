<?php
require_once("../Controler/c_request.php");
?>

<div class="modal fade" id="maDIV" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="ModalLabel">Request</h4>
    </div>
      <div class="modal-body">

        <form method="POST" action="../Model/m_add.php">

        <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Select Sneakers</label>
                <div class="col-sm-10">
                <input type="text" id="sneakers" name="Name_Sneakers" list="sneakers_list">
                <datalist id="sneakers_list">
                    <?php
                    foreach ($sneaker_result as $row) {
                    ?>
                        <option value="<?php echo htmlspecialchars($row['Name_Sneakers']); ?>"><?php echo htmlspecialchars($row['Name_Sneakers']); ?></option>
                    <?php    } ?>
                </datalist>
                </div>
            </div>

            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Select Size</label>
                <div class="col-sm-10">
                <input type="text" id="Size" name="Size" class="bottom" list="Size_list">
                <datalist id="Size_list">
                    <?php
                    foreach ($size_result as $row) {
                    ?>
                        <option value="<?php echo htmlspecialchars($row['Size']); ?>"><?php echo htmlspecialchars($row['Size']); ?></option>
                    <?php    } ?>
                </datalist>
                </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="button-bottom-close" onclick="maFonction()" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="button-bottom-confirm" name="add">Confirm</a>
    </form>
    </div>
   </div>
  </div>
</div>
