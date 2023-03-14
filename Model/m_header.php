<div class="header-top">
  <div class="header-image">
      <a href="../View"><img src="https://www.veja-store.com/static/version1677053215/frontend/Vejmag/default/default/images/logo.svg" alt=""></a>
  </div>
  <div class="header-title">
      <h1>Madrid Store</h1>
  </div>
    <div class="header-request">
      <button class="text" onclick="maFonction()">New Request </button>
        <div id="maDIV" style="display:none;" class="new-request-display">
          <?php
          include("../View/new_request.php");
          ?>
        </div>
    </div> 
</div>

<script>
function maFonction() {
  var div = document.getElementById("maDIV");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
</script>
