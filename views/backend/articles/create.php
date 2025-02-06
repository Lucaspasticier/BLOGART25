<?php
require_once '../../../header.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" id="form" type="post">
                <div class="form-group">
                    <label for="libStat">Titre</label>
                    <input id="titre" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Chapeau</label>
                    <textarea id="Chapeau" name="libChapoArt" class="form-control" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Accroche paragraphe 1</label>
                    <input id="Accroche1" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="">
                    <br>sur 100 car.
                    <label for="libStat">Paragraphe 1</label>
                    <textarea id="Paragraphe1" name="parag1Art" class="form-control" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 1</label>
                    <input id="Soustitre1" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 2</label>
                    <textarea id="Paragraphe2" name="parag2Art" class="form-control" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 2</label>
                    <input id="Soustitre2" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 3</label>
                    <textarea id="Paragraphe3" name="parag3Art" class="form-control" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Conclusion</label>
                    <textarea id="Conclusion" name="libConclArt" class="form-control" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" style="height: 200px;"></textarea>
                    <br>

                    <!-- choix de la thématique !-->
                    <p><br></p>
                    <label for="libThem">Thématique :<br></label>
                    <select name="thematique" id="libThem">
                        <option value="">Cliquez et selectionnez une thématique</option>
                        <?php
                        $result = sql_select('THEMATIQUE');
                        foreach ($result as $req) {
                            echo '<option value="' . $req['numThem'] . '">' . $req['libThem'] . '</option>';
                        }
                        ?>
                    </select>
                    <p><br></p>
                    <!-- MOTS CLES -->
                    <label for="addMotCle">Choisissez des Mots-Clés:</label>
                    <select name="addMotCle" id="addMotCle" size="5">
                        <?php
                        $result = sql_select('MOTCLE');
                        foreach ($result as $req) {
                            echo '<option id="mot" value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                        }
                        ?>
                    </select>
                    <p style="margin: 0 32px; display : inline-block; text-align : center;" id="addKeyWords">Ajouter Mots-Clés ?</p>
                    <select id="newMotCle" name="motCle[]" multiple size="5" style="margin-left: 32px;">

                    </select>
                    <script>
                        const addMotCle = document.getElementById('addMotCle');
                        const newMotCle = document.getElementById('newMotCle');
                        const options = addMotCle.options;
                        const newOptions = newMotCle.options;

                        addMotCle.addEventListener('click', (e) => {
                            if (e.target.tagName !== "OPTION") {
                                return;
                            }
                            e.target.setAttribute('selected', true);+
                            
                            newMotCle.appendChild(e.target);
                        })
                        newMotCle.addEventListener('click', (e) => {
                            console.log(newOptions);
                            if (e.target.tagName !== "OPTION") {
                                return;
                            }
                            e.stopPropagation();
                            e.preventDefault();
                            e.stopImmediatePropagation();
                            e.target.setAttribute('selected', false);
                            addMotCle.appendChild(e.target);
                            for (let option of newMotCle.children){
                                option.setAttribute('selected',true);
                                console.log(option);
                            }
                        });
                    </script>
                </div>
                <br>
                <div class="form-group mt-2" style="margin: 32px auto 128px;">
                    <button type="submit" class="btn btn-primary ">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?>
<!-- fetch('create.php', {
    method: 'POST',
    body: JSON.stringify({
        motCle: motCle
    }),
    headers: {
        'Content-Type': 'application/json'
    }
}); -->