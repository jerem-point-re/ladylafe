<?php global $baseUrl; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LadyLafé -
        <?= $title ?>
    </title>
    <link rel="shortcut icon" href="https://via.placeholder.com/120x120/DC143C/FFF?text=L" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- TELL ME WHYYY -->
    <style>
        <?php require("assets/css/style.css"); ?>
    </style>
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php if ($title !== "Connexion" && $title !== "Inscription") { ?>
        <div class="nav">
            <div class="logo">
                <a href="#" title="LadyLafé">
                    <img src="https://via.placeholder.com/120x120/ff512f/FFF?text=L" alt="">
                </a>
            </div>
            <div class="navLinks">
                <ul>
                    <li>
                        <a href="<?= $baseUrl ?>">Dernié potins</a>
                    </li>
                    <?php if (!$_SESSION) { ?>
                        <li>
                            <a href="<?= $baseUrl ?>?p=login">Konèk</a>
                        </li>
                    <?php } ?>
                    <?php if ($_SESSION && $_SESSION["user"]) { ?>
                        <li>
                            <a href="<?= $baseUrl ?>?p=newKomerage">Nouvo koméraz</a>
                        </li>
                        <li>
                            <a href="<?= $baseUrl ?>?p=logout">Dékonek'</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php if ($_SESSION) { ?>
                <div class="logoUser">
                    <a href="#" title="<?= $_SESSION["user"]["username"]; ?>">
                        <img src="https://via.placeholder.com/120x120/ff512f/FFF?text=<?= substr($_SESSION["user"]["username"], 0, 1); ?>"
                            alt="First letter of the username (in $_SESSION)">
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <div class="main">
        <?= $content ?> <!-- équivaut à <?php //(<-- sans le commentaire) echo $content; ?> -->
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>