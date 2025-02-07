<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libTitrArt = ctrlSaisies($_POST['libTitrArt']);
$libChapoArt = ctrlSaisies($_POST['libChapoArt']);
$libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
$parag1Art = ctrlSaisies($_POST['parag1Art']);
$libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
$parag2Art = ctrlSaisies($_POST['parag2Art']);
$libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
$parag3Art = ctrlSaisies($_POST['parag3Art']);
$libConclArt = ctrlSaisies($_POST['libConclArt']);


$newMotCle = $_POST['motCle'];
var_dump($newMotCle);
var_dump(gettype($newMotCle));


$numMotCle = $_POST['motCle'];


// VERIFIER FIELDS

$requiredFields = ['libTitrArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt',];

  foreach ($requiredFields as $field) {
   if (empty($_POST[$field])) {
   echo "Veuillez remplir tous les champs du formulaire.";
  exit();
     }
  }


$numThem = ctrlSaisies($_POST['thematique']);


sql_insert("ARTICLE", " libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, numThem", 
" '$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$numThem'");

$lastArt = sql_select('ARTICLE', 'numArt', null, 'numArt DESC')[0]['numArt'];
var_dump($lastArt);

foreach ($numMotCle as $mot){
    sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "$lastArt, $mot");
}

header('Location: ../../views/backend/articles/list.php');


?>