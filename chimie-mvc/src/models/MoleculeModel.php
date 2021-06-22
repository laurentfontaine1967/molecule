<?php

class MoleculeModel extends Model {

public function recupererTousLesMolecules() {
    $requete = 'SELECT * FROM molecule';

    $reponse = $this->bdd->query($requete);

    $molecules = $reponse->fetchAll(PDO::FETCH_ASSOC);

    return $molecules;
}

public function creerUneMolecule($nom, $formule) {
    $requete = 'INSERT INTO molecule VALUE (NULL, ?, ?)';

    $prep = $this->bdd->prepare($requete);
    $prep->execute([
        $nom,
        $formule
    
    ]);
}

  public function detailDeLaMolecule($id){
  $requete="SELECT
  molecule.nom,
  molecule.formule,
  atome_molecule.qtte_atome  AS quantite,
  atome.nom AS nom_de_atome
FROM molecule 
LEFT JOIN atome_molecule ON molecule.id=atome_molecule.id_molecule
 JOIN atome ON atome.id=atome_molecule.id_atome WHERE molecule.id  = ?";

   $prep = $this->bdd->prepare($requete);
   
    $prep->execute([
      $id,
  ]);
  $mol = $prep->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    //  var_dump($mol);
    // echo '</pre>';
    return $mol;
  }

  public function supprimerLaMolecule($id){
//table molecule
  $requete="DELETE FROM molecule WHERE id=?";
  $prep = $this->bdd->prepare($requete);
   
  $prep->execute([
    $id,
]);

//association atome_molecule
$requet="DELETE FROM atome_molecule WHERE id=?";
$prepa = $this->bdd->prepare($requet);
$prepa->execute([
  $id,
]);

rediriger('/molecules');
   

  }

}