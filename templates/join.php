<?php $title = "Inscription"; ?>

<?php ob_start(); ?>

<!-- CODE HERE -->

<div class="log_background">
    <div class="log_shape"></div>
    <div class="log_shape"></div>
</div>
<form method="POST" class="log_form">
    <div class="log_home">
        <a href="http://localhost/etiennev/ladylafe/">
            <!-- <i class="fa fa-home"></i> -->
            <ion-icon name="home-outline"></ion-icon>
        </a>
    </div>
    <h3>Ô twaaa!</h3>

    <label for="username">Swazi ton ti nom</label>
    <input type="text" placeholder="ex. : Bibiche incandescente" name="username">

    <label for="password">..aster inn mo d'pass</label>
    <input type="password" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" name="password">

    <input type="submit" value="Byinnvéni mon nasyon" class="button">
    <div class="log_forgot">
        <a href="?p=login" title="Connexion">Ou na déjà inn? Konnect aou!</a>
    </div>
</form>
<!-- CODE END -->

<?php
$content = ob_get_clean();
require "layout.php";
?>