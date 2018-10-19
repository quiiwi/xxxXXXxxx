<?php
require_once 'inc/init.inc.php';

if (!internauteEstConnecte()) {
    header('location:../index.php');
    exit();
}

extract($_SESSION['membre']);


require_once 'inc/haut.inc.php';

$donneesP = $pdo->query("SELECT * FROM quiiwi_inscrits WHERE id_inscrit = $id_inscrit");

while($info = $donneesP->fetch(PDO::FETCH_ASSOC)){

?>


    <div class="container p-3 bg-info">

        <div class="row">
            
            <div class="col-6 photoo">
                ICI IL MANQUE UNE PHOTO
            </div>

            <div class="col-6">
                nom :  <?php  echo $info['nom'];  ?> <br>
                prénom : <?php  echo $info['prenom'];  ?> <br>
                pseudo : <?php  echo $info['pseudo'];  ?> <br>
                value : <?php  echo $info['value'];  ?> <br>
            </div>

        </div>


        <div class="row">

            <div class="col-6">
                email : <?php  echo $info['email'];  ?> <br>
                mdp : <?php  echo $info['mdp'];  ?> <br>
                téléphone : <?php  echo $info['telephone'];  ?> <br>
                motif_inscription : <?php  echo $info['motif_inscription'];  ?> <br>
            </div>

            <div class="col-6">
                adresse : <?php  echo $info['adresse'];  ?> <br>
                code postal : <?php  echo $info['code_postal'];  ?> <br>
                ville : <?php  echo $info['ville'];  ?> <br>
                pays : <?php  echo $info['pays'];  ?> <br>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <br>
                <a class="btn bg-primary text-light" href="modifierprofil.php">Modifier</a>
            </div>
        </div>

    </div>

<?php

}

require_once 'inc/bas.inc.php';