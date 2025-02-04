<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);
$libArt = ctrlSaisies($_POST['libArt']);

sql_update('ARTICLE', 'libArt = "' .$libArt.'"',"numArt = $numArt");


header('Location: ../../views/backend/articles/list.php');