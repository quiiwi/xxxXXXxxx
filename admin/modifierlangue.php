<?php

    require_once '../inc/init.inc.php';

    require_once '../inc/haut.inc.php';

    if(!empty($_POST)){

        if (!isset($_POST['imgcompetence'])) $alert .= '<div class="bg-danger"> Erreur id </div>';
        if (!isset($_POST['nomcompetence'])) $alert .= '<div class="bg-danger"> Erreur nom </div>';
        if (!isset($_POST['niveaucompetence'])) $alert .= '<div class="bg-danger"> Erreur prénom </div>';
        if (!isset($_POST['anneecompetence'])) $alert .= '<div class="bg-danger"> Erreur pseudo </div>';
        if (!isset($_POST['typecompetence'])) $alert .= '<div class="bg-danger"> Erreur email </div>';
        if (!isset($_POST['projetcompetence'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        
        if (empty($alert)){
            $imgcompetence=addslashes($_POST['imgcompetence']);
            $nomcompetence=addslashes($_POST['nomcompetence']);
            $niveaucompetence=addslashes($_POST['niveaucompetence']);
            $anneecompetence=addslashes($_POST['anneecompetence']);
            $typecompetence=addslashes($_POST['typecompetence']);
            $projetcompetence=addslashes($_POST['projetcompetence']);
            $idcompetence=addslashes($_GET['idcompetence']);
    
            $pdo2->exec("UPDATE competence SET imgcompetence ='$imgcompetence', nomcompetence='$nomcompetence', niveaucompetence='$niveaucompetence', anneecompetence='$anneecompetence', typecompetence='$typecompetence', projetcompetence='$projetcompetence' WHERE idcompetence = '$idcompetence'");
    
            // header('location:'. RACINE_SITE .'index.php');
            // exit();

        } //fin du if (empty($alert)){
    }

    if(isset($_GET['idcompetence'])){

        $resultat = executeRequete2("SELECT * FROM competence WHERE idcompetence = :idcompetence",array(':idcompetence' => $_GET['idcompetence']));

        $competence = $resultat->fetch(PDO::FETCH_ASSOC);

        extract($competence);

        ?>

        <a  class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>index.php">Retour à l'Accueil Administrateur</a>
        <a  class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>gestioninformatique.php">Retour</a>

        <form method="post">

            <div class="form-group">

                <label class="form-control" for="imgcompetence"> Image Competence : </label> 
                <input class="form-control bg-info" type="text" id="imgcompetence" name="imgcompetence" placeholder="imgcompetence" value="<?php echo $competence['imgcompetence'] ?>"><br>

            </div>
            
            <div class="form-group">
                <label class="form-control" for="nomcompetence"> Nom Competence : </label> 
                <input class="form-control bg-info" type="text" id="nomcompetence" name="nomcompetence" placeholder="nomcompetence" value="<?php echo $competence['nomcompetence'] ?>"><br>
            </div>
            
            <div class="form-group">
                <label class="form-control" for="niveaucompetence"> Niveau Competence : </label> 
                <input class="form-control bg-info" type="text" id="niveaucompetence" name="niveaucompetence" placeholder="niveaucompetence" value="<?php echo $competence['niveaucompetence'] ?>"><br>
            </div>
            
            <div class="form-group">
                <label class="form-control" for="anneecompetence"> Annee Competence : </label> 
                <input class="form-control bg-info" type="text" id="anneecompetence" name="anneecompetence" placeholder="anneecompetence" value="<?php echo $competence['anneecompetence'] ?>"><br>
            </div>
            
            <div class="form-group">
                <label class="form-control" for="typecompetence"> Type Competence : </label> 
                <input class="form-control bg-info" type="text" id="typecompetence" name="typecompetence" placeholder="typecompetence" value="<?php echo $competence['typecompetence'] ?>"><br>
            </div>
            
            <div class="form-group">
                <label class="form-control" for="projetcompetence"> Projet Competence : </label>
                <input class="form-control bg-info" type="text" id="projetcompetence" name="projetcompetence" placeholder="projetcompetence" value="<?php echo $competence['projetcompetence'] ?>"><br>
            </div>

            <input type="submit" value="modifier" id="submit">

        </form>

        <?php

        echo $alert;

    }



    require_once '../inc/bas.inc.php';

?>