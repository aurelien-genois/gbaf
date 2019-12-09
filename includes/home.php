<?php
require_once('model/model.php');
$pageTitle = 'Groupement Banque Assurance Français';
$actors = getActors();
$likes = getLikes();
$dislikes = getDislikes();
$likesByActor = [];
foreach ($likes as $like) {
    $likesByActor += array($like['gbaf_actor_id'] => $like['nb_likes']);
}
$dislikesByActor = [];
foreach ($dislikes as $dislike) {
    $dislikesByActor += array($dislike['gbaf_actor_id'] => $dislike['nb_dislikes']);
}
include('includes/head.php');
include("includes/header.php");
?>
<main>
    <section id="presentation">
        <h1>Présentation du Groupement Banque Assurance Français</h1>
        <p>Le Groupement Banque Assurance Français​ (GBAF) est une fédération  représentant les 6 grands groupes français :</p>
        <div class="presentationListActeurs">
            <ul>
                <li><span  class="li_content">BNP Paribas ;</span></li>
                <li><span  class="li_content">BPCE ;</span></li>
                <li><span  class="li_content">Crédit Agricole ;</span></li>
            </ul>
            <ul>
                <li><span  class="li_content">Crédit Mutuel-CIC ;</span></li>
                <li><span  class="li_content">Société Générale ;</span></li>
                <li><span  class="li_content">La Banque Postale.</span></li>
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
            <?php foreach ($actors as $actor) : ?>
                <div class="acteur">
                    <div class="presentation_acteur">
                        <img class="logo_acteur" src="<?= 'img' . DIRECTORY_SEPARATOR . $actor['logo_file']; ?>" alt="logo de l'acteur">
                        <div class="description">
                            <h3><?= $actor['name']; ?></h3>
                            <p><?= substr($actor['description'], 0, 69) . '...'; ?></p>
                        </div>
                    </div>
                    <div class="votesButton">
                        <div class="homeVotes">
                            <p><span class="fas fa-thumbs-up fa-2x"> <?php if ($likesByActor[$actor['id']] == NULL) {
                                echo 0;
                            } else {echo $likesByActor[$actor['id']];} ?></span></p>
                            <p><span class="fas fa-thumbs-down fa-2x"> <?php if ($dislikesByActor[$actor['id']] == NULL) {
                                echo 0;
                            } else {echo $dislikesByActor[$actor['id']];} ?></span></p>
                        </div>
                        <a class="button" href="actor.php?id_actor=<?= $actor['id']; ?>">Lire la suite</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
