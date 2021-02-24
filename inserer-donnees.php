<?php
ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);

require "./DB/version-static.php";
$db = DB::getInstance();

$userRequest = "INSERT INTO user (email, username, password) VALUES ('test@exemple.com', 'moi', 'azerty') ";

if($db->exec($userRequest)) {
    // permet de récupérer le dernier ID enregistrer
    $userId = $db->lastInsertId();
    $articleRequest = "INSERT INTO article (titre, contenu, user_fk) VALUES ('un titre', 'un contenu', $userId)";
    $db->exec($articleRequest);
}



