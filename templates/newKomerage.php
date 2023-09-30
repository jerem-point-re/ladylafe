<?php $title = "Ajout"; ?>

<?php ob_start(); ?>

<!-- CODE HERE -->
<div class="add_background">
    <div class="add_shape"></div>
    <div class="add_shape"></div>
</div>
<form class="add_form" method="POST">
    <h3>Ajout' zot koméraz</h3>

    <input type="text" placeholder="C'est kwé ou na pou di?" name="title" required>

    <!-- <div class="choices">
        <span>De kwé nou koz?</span>
            <p>Ca : <input type="radio" name="choice"></p>
            <p>Sa : <input type="radio" name="choice"></p>
            <p>Ou bien.. : <input type="radio" name="choice"></p>
    </div> -->

    <textarea name="komeraz" name="newKomeraz" cols="20" rows="7"
        placeholder="Di a nou, pa béswin ou la pèr!" class="myText" required></textarea>

    <input type="submit" value="Largu' a li" class="button">
</form>
<!-- CODE END -->

<?php
$content = ob_get_clean();
require "layout.php";
?>