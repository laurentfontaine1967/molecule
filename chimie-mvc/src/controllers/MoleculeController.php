<?php
include Config::DOSSIER_MODELS . '/MoleculeModel.php';

class MoleculeController
{

    public function afficherTousLesMolecules()
    {
        $model = new MoleculeModel;
        $molecules = $model->recupererTousLesMolecules();

        include Config::DOSSIER_VIEWS . '/molecules.html.php';
    }


    public function CreerMolecule()
    {
        include Config::DOSSIER_CONTROLLERS . '/connexion.php';
        if (est_connecte()) {
            if (!empty($_POST)) {
                $model = new MoleculeModel;
                if (
                    !empty($_POST['nom'])
                    && !empty($_POST['formule'])


                ) {

                    $model->creerUneMolecule(
                        htmlspecialchars($_POST['nom']),
                        htmlspecialchars($_POST['formule']),
                    );

                    rediriger('/molecules');
                } else {
                    echo 'Erreur de saisie du formulaire';
                }
            }

            include Config::DOSSIER_VIEWS . '/creermolecule.html.php';
        } else {
            echo "acces refuse";
        }
    }


    public function detailMolecule()
    {
       
        if (!empty($_GET['id'])) {
            $model = new MoleculeModel;
            $mol=$model->detailDeLaMolecule(htmlspecialchars($_GET['id']));

        } else {
            echo 'id selectionnee non valide';
            die();
        }

        require Config::DOSSIER_VIEWS . '/detailmolecule.html.php';
    }


    public function SupprimerMolecule(){
        include Config::DOSSIER_CONTROLLERS . '/connexion.php';
     
        if (!empty($_GET['id'])) {
            $model = new MoleculeModel;
            $mol=$model->SupprimerLaMolecule(htmlspecialchars($_GET['id']));
    }else {
        echo 'id selectionnee non valide';
        die();
    }

    }
}
