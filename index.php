<?php require('includes/connexion.php');

$listActor = $db->query('SELECT * FROM gbaf_actor');

$actors = $listActor->fetchAll();
/* echo "<pre>";
print_r($actors);
die(); */
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Martel|Open+Sans&display=swap" rel="stylesheet" />
        <title>Groupement Banque Assurance Français</title>
        <link rel="icon" sizes="144x144" href="img/fav_icon_gbaf.png">
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <main>
            <div id="blocsection">
                <section id="presentation">
                    <h1>Présentation du Groupement Banque Assurance Français</h1>
                    <p>Le Groupement Banque Assurance Français​ (GBAF) est une fédération  représentant les 6 grands groupes français :</p>
                    <div class="listeacteurs">
                        <ul>
                            <li>BNP Paribas ;</li>
                            <li>BPCE ;</li>
                            <li>Crédit Agricole ;</li>
                        </ul>
                        <ul>
                            <li>Crédit Mutuel-CIC ;</li>
                            <li>Société Générale ;</li>
                            <li>La Banque Postale.</li>

                        </ul>
                    </div>
                    <p>Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler  de la même façon pour gérer près de 80 millions de comptes sur le territoire  national.  Le GBAF est le représentant de la profession bancaire et des assureurs sur tous  les axes de la réglementation financière française. Sa mission est de promouvoir  l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.  </p>
                    <div id="illustration"><img src="img/illustration.jpg" alt="illustration"/></div>
                </section>
                <section id="acteurs">
                    <h2>Présentation des acteurs</h2>
                    <p>texte acteurs et partenaires</p>
                    <p>...</p>
                    <div id="conteneur_acteur">
                        <?php
                        foreach ($actors as $actor) :
                            ?>
                            <div class="acteur">
                                <div class="presentation_acteur">
                                    <img class="logo_acteur" src="<?= 'img' . DIRECTORY_SEPARATOR . $actor['logo_file']; ?>" alt="logo de l'acteur">
                                    <div class="description">
                                        <h3><?= $actor['name']; ?></h3>
                                        <p><?= substr($actor['description'], 0, 69) . '...'; ?></p>
                                    </div>
                                </div>
                                <a class="button" href="acteur.php?id_actor=<?= $actor['id']; ?>">Lire la suite</a>
                            </div>
                            <?php
                        endforeach; ?>
                    </section>
            </div>
        </main>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
