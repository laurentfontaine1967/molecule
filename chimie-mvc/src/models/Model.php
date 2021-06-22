<?php

class Model {
    protected $bdd;

    public function __construct() {
        $this->bdd = new PDO(
            'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME,
            Config::DB_USER,
            Config::DB_PSW
        );
    }
}