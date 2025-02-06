<?php
include '../../../header.php';


if(isset($_GET['numThem'])){
    $numThem = $_GET['numThem'];
    $libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];
 ?>
<!-- Bootstrap form to delete a thematique -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Thématique</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom du statut</label>
                    <input id="numThem" name="numThem" class="form-control" style="display: none" type="text" value="<?php echo($numThem); ?>" readonly="readonly" />
                    <input id="libThem" name="libThem" class="form-control" type="text" value="<?php echo($libThem); ?>" readonly="readonly" disabled />
                    <p>Attention, la thématique à supprimer ne doit pas être utilisée dans un article du blog.</p>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<?php } else {
    ?> 
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Thématique</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numThem">Nom de la Thématique</label>
                    <br>
                    <select name="numThem" id="numThem">
                        <option value="">Choisir une thématique</option>
                        <?php 
                            $result = sql_select('thematique');
                            foreach($result as $req){
                                echo '<option value="' . $req['numThem'] . '">' . $req['libThem'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
}
include '../../../footer.php'; // contains the footer