<?php

session_start();


require __DIR__ . '/vendor/Config.php';
require Config::DOSSIER_MODELS . '/Model.php';
require Config::DOSSIER_CONTROLLERS . '/MoleculeController.php';
require __DIR__ . '/vendor/Router.php';
require __DIR__ . '/vendor/functions.php';


$router = new Router;
$router->meneMoiAuBonController();