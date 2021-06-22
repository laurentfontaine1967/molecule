<?php

// On va simplifier pour le TP : 
// pas d'identifiant, pas de mot de passe.
// On se connecte immédiatement

session_start();
$_SESSION['is_connected'] = true;
echo 'OK';

 //require __DIR__ . '/functions.php';
// rediriger('molecules.php');