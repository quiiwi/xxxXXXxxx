<?php
    require_once 'inc/init.inc.php';

    if(!empty($_POST)){
    
        if (!isset($_POST['pseudoutilisateur']) || strlen($_POST['pseudoutilisateur']) <1 || strlen($_POST['pseudoutilisateur']) >20    ) $alert .= '<div class="bg-danger"> Erreur pseudoutilisateur </div>';
    
        if (!isset($_POST['titrecommentaire']) || strlen($_POST['titrecommentaire']) <1 || strlen($_POST['titrecommentaire']) >30    ) $alert .= '<div class="bg-danger"> Erreur titrecommentaire </div>';
    
        if (!isset($_POST['commentaire']) || strlen($_POST['commentaire']) <1 || strlen($_POST['commentaire']) >2000    ) $alert .= '<div class="bg-danger"> Erreur commentaire </div>';
    
        if (empty($alert)){

            foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
            }

            $date=time();
    
            $result = $pdo3->prepare("INSERT INTO commentaire (datecommentaire, titrecommentaire, pseudoutilisateur, idutilisateur, commentaire) VALUES ($date, :titrecommentaire, :pseudoutilisateur, 1, :commentaire) ");
    
            $result->bindParam(':titrecommentaire', $_POST['titrecommentaire']);
            $result->bindParam(':pseudoutilisateur', $_POST['pseudoutilisateur']);
            $result->bindParam(':commentaire', $_POST['commentaire']); 
    
            $req = $result->execute();
    
            if ($req) {
                $alert .= '<div>Votre commentaire à été posté</div>';
            } else {
                $alert .= '<div>Erreur lors du post de votre commentaire</div>';
            }

        }
    }

    if (internauteEstConnecteEtAdmin()){
        extract($_SESSION['membre']);
    }elseif(internauteEstConnecte()){
        extract($_SESSION['membre']);
    }



    require_once 'inc/haut.inc.php';

?>
<!-- Contenue de la page -->

<h1 class="align-middle">Réseaux sociaux</h1>

<a href="https://github.com/" target="_blank">GitHub</a> || <a href="#">Youtube</a> || <a href="#">Twitch</a> || <a href="#">LinkedIn</a> <br>
<br>
<br>


    
    <form action="" method="post">
        <p>Ecrire un commentaire</p>
        
        <div class="form-group">
            <label class="form-control" for="pseudoutilisateur">Pseudo</label>
            <input class="form-control bg-info" id="pseudoutilisateur" name="pseudoutilisateur" type="text" value="<?php 
             if (internauteEstConnecteEtAdmin()){
                echo $_SESSION['membre']['pseudo'];
             }elseif(internauteEstConnecte()){
                echo $_SESSION['membre']['pseudo'];
             }
            ?>">
        </div>

        <div class="form-group">
            <label class="form-control" for="titrecommentaire">Titre</label>
            <input class="form-control bg-info" type="text" id="titrecommentaire" name="titrecommentaire"><br>
        </div>
            
        <div class="form-group">
            <textarea class="form-control bg-info" name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Blabla"></textarea>
        </div>

        <input type="submit" value="commentez">

    </form><br><br>


    <?php $competence = $pdo3->query("SELECT * FROM commentaire ORDER BY datecommentaire DESC"); 
    while($info = $competence->fetch(PDO::FETCH_ASSOC)){
        echo '<div class="container bg-success m-1">';
        echo '<strong>id commentaire:</strong><label class="form-control" for="idcommentaire">' . $info['idcommentaire'] . '</label>';
        echo 'date commentaire<label class="form-control" for="datecommentaire">' . $info['datecommentaire'] . '</label>';
        echo 'titre commentaire<label class="form-control" for="titrecommentaire">' . $info['titrecommentaire'] . '</label>';
        echo 'pseudoutilisateur<label class="form-control" for="pseudoutilisateur">' . $info['pseudoutilisateur'] . '</label>';
        echo 'idutilisateur<label class="form-control" for="idutilisateur">' . $info['idutilisateur'] . '</label>';
        echo 'idutilisateur<label class="form-control" for="commentaire">' . $info['commentaire'] . '</label>';
        echo '</div>';   
    }
?>


<?php

    echo $alert;

    require_once 'inc/bas.inc.php';