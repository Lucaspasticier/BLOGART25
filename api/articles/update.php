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
$numMotCle = $_POST['motCle'];
$numArt = ctrlSaisies($_POST['numArt']);
$numThem = ctrlSaisies($_POST['numThem']);
$libThem = sql_select('THEMATIQUE', 'libThem', "numThem = '$numThem'");

// VERIFIER FIELDS

$requiredFields = ['libTitrArt', 'dtCreaArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt'];

  foreach ($requiredFields as $field) {
   if (empty($_POST[$field])) {
   echo "Veuillez remplir tous les champs du formulaire.";
  exit();
     }
  }


// VARIABLES POUR FONCTION UPDATE
$set_art = "libTitrArt = '$libTitrArt',
libChapoArt = '$libTitrArt', 
libAccrochArt = '$libAccrochArt',
parag1Art = '$parag1Art', 
libSsTitr1Art = '$libSsTitr1Art',
parag3Art = '$parag3Art',
libConclArt = '$libConclArt', 
numThem = '$numThem'";
$where_num = "numArt = '$numArt'";
$table_art = "ARTICLE";

// UPDATE INFOS GENERALES
sql_delete('MOTCLEARTICLE', $where_num);
sql_update($table_art, $set_art, $where_num);

foreach ($numMotCle as $mot){
    sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "$numArt, $mot");
}

header('Location: ../../views/backend/articles/list.php');

?>