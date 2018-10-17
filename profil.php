<?php
require_once 'inc/init.inc.php';

if (!internauteEstConnecte()) {
    header('location:../index.php');
    exit();
}

extract($_SESSION['membre']);

require_once 'inc/haut.inc.php';

?>

<div class="yoloooo container bg-primary p-3">
    <div class="container bg-dark p-3">

        <div class="row">
            
            <div class="col-6 photoo">
                ICI IL MANQUE UNE PHOTO
            </div>

            <div class="col-6">
                nom :  <?php  echo $nom  ?> <br>
                prénom : <?php  echo $prenom  ?> <br>
                pseudo : <?php  echo $pseudo  ?> <br>
                value : <?php  echo $value  ?> <br>
            </div>

        </div>


        <div class="row">

            <div class="col-6">
                email : <?php  echo $email  ?> <br>
                mdp : <?php  echo $mdp  ?> <br>
                téléphone : <?php  echo $telephone  ?> <br>
                motif_inscription : <?php  echo $motif_inscription  ?> <br>
            </div>

            <div class="col-6">
                adresse : <?php  echo $adresse  ?> <br>
                code postal : <?php  echo $code_postal  ?> <br>
                ville : <?php  echo $ville  ?> <br>
                pays : <?php  echo $pays  ?> <br>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <br>
                <a class="btn bg-primary text-light" href="modifierprofil.php">Modifier</a>
            </div>
        </div>

    </div>
</div>














<?php
require_once 'inc/bas.inc.php';