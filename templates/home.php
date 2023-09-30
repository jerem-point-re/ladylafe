<?php $title = "Actus"; ?>

<?php ob_start(); ?>

<!-- CODE HERE -->
<div class="home_main">
    <h1>- Dernié potins pou ou
        <?php if ($_SESSION) {
            echo $_SESSION["user"]["username"];
        } ?> -
    </h1>

    <?php
    $x = 0; { ?>
        <div class="container my-5">
            <div class="row">
                <?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
                    <div class="col-sm-6 mb-5">
                        <div class="card">
                            <div class="card-body bg-dark text-white">
                                <div class="img_box mb-4">
                                    <img src="https://picsum.photos/500/350?random=<?= $x++; ?>;" alt="Picture holder"
                                        width="100%">
                                    <div class="card-header bg-dark text-white">
                                        <br>
                                        <h5 class="card-title">
                                            <?= $posts[$i]['author'] . " la di kom sa: <br><br> " . $posts[$i]['title'] ?>
                                        </h5>
                                        <p class="card-text">
                                            <?= $posts[$i]['komeraz'] ?>
                                        </p>
                                    </div>
                                    <span>
                                        <a href="index.php?p=post&id=<?= $posts[$i]['id'] ?>"
                                            class="btn btn-light w-100 homeButton">Lire le bann' coms</a>
                                    </span>
                                    <div class="card-footer">
                                        <div class="row ionIcons">
                                            <div class="col-4">
                                                <ion-icon name="share-outline" size="large"></ion-icon>
                                            </div>
                                            <div class="col-4">
                                                <ion-icon name="heart-outline" size="large"></ion-icon>
                                            </div>
                                            <div class="col-4">
                                                <ion-icon name="bookmark-outline" size="large"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>



</div>
<?php // print_r($_SESSION["user"]["id"]) ?>
<!-- CODE END -->

<?php
$content = ob_get_clean();
require "layout.php";
?>