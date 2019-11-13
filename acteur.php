<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Martel|Open+Sans&display=swap" rel="stylesheet">
        <title>nom acteur (php) </title>
    </head>

    <body>
        <?php include("includes/header.php"); ?>

        <main>

            <section id="presentation_acteur">

                <div class="logo_page_acteur">
                    <img src="img/CDE.png" alt=""/>
                </div>
                <div class="description_page_acteur">
                    <h2>Nom acteur</h2>
                    <a href="#">lien</a>
                    <p>contenu contextuel... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

            </section>

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

            </section>

        </main>

        <?php include("includes/footer.php"); ?>

    </body>
</html>
