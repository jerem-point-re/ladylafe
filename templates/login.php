<?php
$title = "Connexion";
// echo $_POST['username'];

ob_start();
?>

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
    <h3>Ayo biche!</h3>

    <label for="username">Out' ti nom sé kwé ou?</label>
    <input type="text" placeholder="ex. : Bibiche incandescente" name="username">

    <label for="password">Y oubli pa zafair koma..</label>
    <input type="password" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" name="password">

    <input type="submit" value="Lé bon, traverss" class="button">
    <div class="log_forgot">
        <a href="?p=join" title="Inscription">Pas ankor inskri, rejoinn a nou</a>
    </div>
</form>
<!-- CODE END -->

<?php
$content = ob_get_clean();
require "layout.php";
?>