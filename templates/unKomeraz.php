<?php $title = "Koméraz";
global $baseUrl;
?>

<?php ob_start(); ?>

<!-- CODE HERE -->
<?php $x = 0; { ?>
    <div class="container my-5">
        <div class="col-sm-12 mb-5">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <div class="img_box mb-4">
                        <img src="https://picsum.photos/500/350?random=<?= $x++; ?>;" alt="Picture holder" width="100%">
                        <div class="card-header bg-dark text-white">
                            <br>
                            <h5 class="card-title">
                                <?= $post['author'] . " la di kom sa: <br><br> " . $post['title'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $post['komeraz'] ?>
                            </p>
                        </div>
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
                        <div class="card">
                            <div class="card-body">

                                <?php if (!$GLOBALS['logged']) {
                                   echo "<center>Konèk' a ou pou komanter biche!</center>";
                                } ?>
                                <?php if ($GLOBALS['logged']) { ?>
                                    <div>
                                        <form action="<?= $baseUrl ?>?p=unKomeraz&id=<?= $post['id'] ?>" method="POST">
                                            <div class="form-group">
                                                <label for="comment" class="m-3">Comment' a ou, lé gratuit'... pou le
                                                    moment</label>
                                                <input type="text" class="form-control" name="comment">
                                            </div>
                                            <input type="submit" value="Anvoy a ou"
                                                class="w-50 btn btn-primary m-3 commentButton">
                                            </input>
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="card-footer">
                                <?php foreach ($comments as $comment) { ?>
                                    <p>
                                        <?= $comment['comment'] ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>



</div>
<?php // print_r($_SESSION["user"]["id"]) ?>
<!-- CODE END -->

<?php
$content = ob_get_clean();
require "layout.php";
?>