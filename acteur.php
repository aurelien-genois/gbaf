<?php
require('includes/connexion.php');

$actorInfo = $db->prepare('SELECT * FROM gbaf_actor WHERE id = ?');
$actorInfo->execute(array($_GET['id_actor']));
$actor = $actorInfo->fetch();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Martel|Open+Sans&display=swap" rel="stylesheet">
        <title><?= $actor['name']; ?></title>
        <link rel="icon" sizes="144x144" href="img/fav_icon_gbaf.png">
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <main>
            <section id="presentation_acteur">
                <div class="logo_page_acteur">
                    <img src="<?= 'img' . DIRECTORY_SEPARATOR . $actor['logo_file']; ?>" alt="logo de l'acteur"/>
                </div>
                <div class="description_page_acteur">
                    <h2><?= $actor['name']; ?></h2>
                    <p><?= $actor['description']; ?></p>
                </div>
            </section>

            <!-- fonctionnalité pas encore développée
            <section id="commentaire">

                <div class="head_commentaire">
                    <div>
                        <h2>Commentaires</h2>
                    </div>
                    <div class="actions">
                        <a href="#" ><div>
                            <p>Nouveau</br>commentaire</p>
                        </div></a>
                        <div>
                            <p>5</p> <a href="#"><span class="fas fa-thumbs-up"></span></a> <p>2</p> <a href="#"><span class="fas fa-thumbs-down"></span></a>
                        </div>
                    </div>
                </div>

                <div class="commentaires">

                    <div>
                        <p>Prénom</p>
                        <p>Date</p>
                        <p>Texte</p>
                    </div>

                    <div>
                        <p>Prénom</p>
                        <p>Date</p>
                        <p>Texte</p>
                    </div>

                    <div>
                        <p>Prénom</p>
                        <p>Date</p>
                        <p>Texte</p>
                    </div>

                </div>

            </section> -->

        </main>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
