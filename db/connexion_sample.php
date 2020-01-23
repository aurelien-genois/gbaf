<?php
// renommer ce fichier "connexion.php" et compléter avec vos identifiants
try {
    $db = new PDO('mysql:host=http://xxx.host.db;dbname=name;charset=utf8','user','password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (\Exception $e) {
    die('Erreur :' . $e->getMessage());
}
