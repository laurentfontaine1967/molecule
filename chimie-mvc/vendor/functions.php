<?php

function rediriger(string $route) {
    header('location: ' . Config::BASE_URL . $route);
    die();
}


function est_connecte() {
    return isset($_SESSION['is_connected']) && $_SESSION['is_connected'] === true;
}

function url(string $route) {
    return Config::BASE_URL . $route;
}