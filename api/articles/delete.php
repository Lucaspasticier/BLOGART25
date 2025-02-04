<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);
$numArt = ctrlSaisies($_POST['dtCreaArt']);
$numArt = ctrlSaisies($_POST['libTitrArt']);
$numArt = ctrlSaisies($_POST['libChapoArt']);
$numArt = ctrlSaisies($_POST['libAccrochArt']);
$numArt = ctrlSaisies($_POST['libSsTitr1Art']);


sql_delete('ARTICLE', "numArt = $numArt");
sql_delete('ARTICLE', "dtCreaArt = $dtCreaArt");
sql_delete('ARTICLE', "libTitrArt = $libTitrArt");
sql_delete('ARTICLE', "libChapoArt = $libChapoArt");
sql_delete('ARTICLE', "libAccrochArt = $libAccrochArt");
sql_delete('ARTICLE', "libSsTitr1Art = $libSsTitr1Art");

header('Location: ../../views/backend/articles/list.php');