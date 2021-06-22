<?php

class Router
{
    private $route;

    public function __construct()
    {
        if (isset($_SERVER['PATH_INFO'])) $this->route = $_SERVER['PATH_INFO'];
        else $this->route = '/molecules';
    }

    public function meneMoiAuBonController()
    {

        switch ($this->route) {
            case '/molecules':
                $controller = new MoleculeController;
                $controller->afficherTousLesMolecules();
                break;

            case '/creer-molecule':
                $controller = new MoleculeController;
                $controller->creerMolecule();
                break;

            case '/detail-molecule':
                $controller = new MoleculeController;
                $controller->detailMolecule();
                break;


                case '/supprimer-molecule':
                    $controller = new MoleculeController;
                    $controller->supprimerMolecule();
                    break;



            case '/deconnecter':
            url("/deconnexion.php");
            var_dump(url("/deconnexion.php"));

            case '/connecter':
            url("/connexion.php");
            rediriger('/molecules');
            

            default:

                echo 'Page non trouvée';
        }
    }
}
