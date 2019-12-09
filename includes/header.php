<header>
    <a href="index.php"><img id="logo" src="img/logo_gbaf.png" alt="logo de GBAF"/></a>
    <div id="user">
        <div class="fas fa-user-tie fa-2x"></div>
        <div id="userLink">
            <p><a href="account.php"><?= $_SESSION['firstname']; ?> <?= $_SESSION['lastname']; ?></a></p>
            <p id="deco"><a href="logout.php">Se déconnecter</a></p>
        </div>
    </div>
</header>
