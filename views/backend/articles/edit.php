<?php
include '../../../header.php';

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $libArt = sql_select("ARTICLE", "libArt", "numArt = $numArt")[0]['libArt'];}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification de l'Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libArt">Nom de l'article</label>
                    <input id="numArt" name="numArt" class="form-control" style="display: none" type="text"
                        value="<?php echo($numArt); ?>" readonly="readonly" />
                    <input id="libArt" name="libArt" class="form-control" type="text"
                        value="<?php echo($libArt); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer mot clé ?</button>
                </div>
            </form>
        </div>
    </div>
</div>