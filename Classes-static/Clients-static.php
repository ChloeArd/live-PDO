<?php

class ClientsStatic {

    private ?PDO $db;

    public function getClients() {
        $this->db = DB::getInstance();
    }
}