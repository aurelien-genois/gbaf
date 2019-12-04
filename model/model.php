<?php

function getActors() {
    require('includes/connexion.php');
    $listActor = $db->query('SELECT * FROM gbaf_actor');
    $actors = $listActor->fetchAll();
    return $actors;
}

function getUser($username) {
    require('includes/connexion.php');
    $req = $db->prepare('SELECT id, lastname, firstname, username, password, question, answer FROM gbaf_member WHERE username = ?');
    $req->execute(array($username));
    $user = $req->fetch();
    return $user;
}

function getAnswer($answer, $username) {
    require('includes/connexion.php');
    $req = $db->prepare('SELECT id, lastname, firstname, username, password, question, answer FROM gbaf_member WHERE answer = ? AND username = ?');
    $req->execute(array($answer, $username));
    $answer = $req->fetch();
    return $answer;
}

function getActor($idActor) {
    require('includes/connexion.php');
    $actorInfo = $db->prepare('SELECT * FROM gbaf_actor WHERE id = ?');
    $actorInfo->execute(array($idActor));
    $actor = $actorInfo->fetch();
    return $actor;
}

function createNewMember($lastname, $firstname, $username, $pass_hache, $question, $answer) {
    require('includes/connexion.php');
    $req = $db->prepare('INSERT INTO gbaf_member(lastname, firstname, username, password, question, answer) VALUES(:lastname, :firstname, :username, :password, :question, :answer)');
    $req->execute(array(
        'lastname'=> $lastname,
        'firstname' => $firstname,
        'username' => $username,
        'password' => $pass_hache,
        'question' => $question,
        'answer' => $answer));
}

function updatePass($pass_hache, $username) {
    require('includes/connexion.php');
    $req = $db->prepare('UPDATE gbaf_member SET password = ? WHERE username = ?');
    $req->execute(array($pass_hache, $username));
}

function updateUsername($newUsername, $username) {
    require('includes/connexion.php');
    $req = $db->prepare('UPDATE gbaf_member SET username = ? WHERE username = ?');
    $req->execute(array($newUsername, $username));
}
