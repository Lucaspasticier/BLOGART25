<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$motcles = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mots clé</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom des thématiques</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($motcles as $MotCle){ ?>
                        <tr>
                            <td><?php echo($MotCle['numMotCle']); ?></td>
                            <td><?php echo($MotCle['libMotCle']); ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo($MotCle['numMotCle']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo($MotCle['numMotCle']); ?>" class="btn btn-danger">Delete</a>
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