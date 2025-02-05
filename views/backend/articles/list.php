<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$Arts = sql_select("ARTICLE", "*");
$MotCles = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead> 
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Titre</th>
                        <th>Chapeau</th>
                        <th>Accroche</th>
                        <th>Mots clés</th>
                        <th>Thématique</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Arts as $Art){ ?>
                    
                        <tr>
                            <td><?php echo($Art['numArt']); ?></td>
                            <td><?php echo($Art['dtCreaArt']); ?></td>
                            <td><?php echo($Art['libTitrArt']); ?></td>
                            <td><?php echo($Art['libChapoArt']); ?></td>
                            <td><?php echo($Art['libAccrochArt']); ?></td>
                            <td><?php echo($MotCles['']); ?></td>
                            <td><?php echo($Art['numThem']); ?></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo($Art['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo($Art['numArt']); ?>" class="btn btn-danger">Delete</a>     
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php

include '../../../footer.php'; // contains the footer