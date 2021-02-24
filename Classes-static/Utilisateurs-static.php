<?php

class UtilisateursStatic {

    private ?PDO $db;

    public function getUtilisateurs() {
        $this->db = DB::getInstance();
    }
}