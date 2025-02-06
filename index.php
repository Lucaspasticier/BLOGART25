<?php
    require_once 'header.php';
    $article1 = sql_select('ARTICLE', '*', "numArt = '1'")[0];
    $libTitrArt1 = $article1['libTitrArt'];
    $libChapoArt1 = $article1['libChapoArt'];
    $article2 = sql_select('ARTICLE', '*', "numArt = '2'")[0];
    $libTitrArt2 = $article2['libTitrArt'];
    $libChapoArt2 = $article2['libChapoArt'];