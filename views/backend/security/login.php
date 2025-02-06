<?php
include '../../../header.php';


if (isset($_GET['numCom'])){
    $numCom = $_GET['numCom'];
    $comment = sql_select('comment', '*', "numCom ='$numCom'")[0];
    $pseudoMemb = $comment['pseudoMemb'];
    $numArt = $comment['numArt'];
    $libCom = $comment['libCom'];
   } else {
    header('/index.php');
   }
   
?>

<!-- Bootstrap form to create a new member -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new member -->
            <form action="<?php echo ROOT_URL . '/api/members/create.php' ?>" method="post" id="formCreate">
                <div class="form-group">
                    <!-- PSEUDO -->
                    <label for="pseudoMemb">Pseudo du membre (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                    <p>(entre 6 et 70 caractères)</p>

                    <label for="passMemb">Mot de passe du membre</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" />
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    <button type="button" id="afficher"  class="btn btn-secondary">Afficher le mot de passe</button><br><br>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JS POUR CACHER/AFFICHER MDP-->
<script>
document.getElementById( 'afficher' ).addEventListener( "click", function() {
   
    attribut = document.getElementById( 'passMemb' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'passMemb' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'passMemb' ).setAttribute( 'type', 'password');
    }
    
 });
 
 document.getElementById( 'afficher2' ).addEventListener( "click", function() {
   
   attribut = document.getElementById( 'passMemb2' ).getAttribute( 'type');
   if(attribut == 'password'){
       document.getElementById( 'passMemb2' ).setAttribute( 'type', 'text');
   } else {
       document.getElementById( 'passMemb2' ).setAttribute( 'type', 'password');
   }
   
});

// CAPTCHA 
/*function onSubmit(token) {
document.getElementById("recaptcha").submit();
console.log(document.getElementById("recaptcha"));
}*/

</script>
