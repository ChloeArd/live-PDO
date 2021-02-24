<?php

require "./version-static.php";
$db = DB2::getInstance();

$requeteChouette = "INSERT INTO shop.user (id, nom, prenom, password) VALUES ()";

$db->exec($requeteChouette);

