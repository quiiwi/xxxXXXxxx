<?php

    require_once '../inc/init.inc.php';

    require_once '../inc/haut.inc.php';

    if(!empty($_POST)){

        if (!isset($_POST['value'])) $alert .= '<div class="bg-danger"> Erreur id </div>';
        if (!isset($_POST['nom'])) $alert .= '<div class="bg-danger"> Erreur nom </div>';
        if (!isset($_POST['prenom'])) $alert .= '<div class="bg-danger"> Erreur prénom </div>';
        if (!isset($_POST['pseudo'])) $alert .= '<div class="bg-danger"> Erreur pseudo </div>';
        if (!isset($_POST['email'])) $alert .= '<div class="bg-danger"> Erreur email </div>';
        if (!isset($_POST['mdp'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['telephone'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['motif_inscription'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['adresse'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['code_postal'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['ville'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        if (!isset($_POST['pays'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
        
        if (empty($alert)){
            $value=addslashes($_POST['value']);
            $nom=addslashes($_POST['nom']);
            $prenom=addslashes($_POST['prenom']);
            $pseudo=addslashes($_POST['pseudo']);
            $email=addslashes($_POST['email']);
            $mdp=addslashes($_POST['mdp']);
            $telephone=addslashes($_POST['telephone']);
            $motif_inscription=addslashes($_POST['motif_inscription']);
            $adresse=addslashes($_POST['adresse']);
            $code_postal=addslashes($_POST['code_postal']);
            $ville=addslashes($_POST['ville']);
            $pays=addslashes($_POST['pays']);
            $id_inscrit=addslashes($_GET['idmembre']);

            $pdo->exec("UPDATE quiiwi_inscrits SET value ='$value', nom='$nom', prenom='$prenom', pseudo='$pseudo', email='$email', mdp='$mdp', telephone='$telephone', motif_inscription='$motif_inscription', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays' WHERE id_inscrit = '$id_inscrit'");
    
            // header('location:' . RACINE_SITE . 'profil.php');
            // exit();

        } //fin du if (empty($alert)){
    }

    if(isset($_GET['idmembre'])){

        $resultat = executeRequete("SELECT * FROM quiiwi_inscrits WHERE id_inscrit = :idmembre",array(':idmembre' => $_GET['idmembre']));

        $competence = $resultat->fetch(PDO::FETCH_ASSOC);

        extract($competence);

        ?>
        <a  class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>index.php">Retour à l'Accueil Administrateur</a>
        <a class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>gestionmembre.php">Retour</a>

        <form method="post">

            <div class="form-group">

                <label class="form-control" for="value"> value </label> 
                <input class="form-control bg-info"  type="text" id="value" name="value" placeholder="value" value="<?php echo $competence['value'] ?>"><br>

            </div>
                    
            <div class="form-group">
                <label class="form-control"  for="nom"> nom </label> 
                <input class="form-control bg-info"  type="text" id="nom" name="nom" placeholder="nom" value="<?php echo $competence['nom'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="prenom"> prenom </label> 
                <input class="form-control bg-info"  type="text" id="prenom" name="prenom" placeholder="prenom" value="<?php echo $competence['prenom'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="pseudo"> pseudo </label> 
                <input class="form-control bg-info"  type="text" id="pseudo" name="pseudo" placeholder="pseudo" value="<?php echo $competence['pseudo'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="email"> email </label> 
                <input class="form-control bg-info"  type="text" id="email" name="email" placeholder="email" value="<?php echo $competence['email'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="mdp"> mdp </label>
                <input class="form-control bg-info"  type="text" id="mdp" name="mdp" placeholder="mdp" value="<?php echo $competence['mdp'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="telephone"> telephone </label>
                <input class="form-control bg-info"  type="text" id="telephone" name="telephone" placeholder="telephone" value="<?php echo $competence['telephone'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="motif_inscription"> motif_inscription </label>
                <input class="form-control bg-info"  type="text" id="motif_inscription" name="motif_inscription" placeholder="motif_inscription" value="<?php echo $competence['motif_inscription'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="adresse"> adresse </label>
                <input class="form-control bg-info"  type="text" id="adresse" name="adresse" placeholder="adresse" value="<?php echo $competence['adresse'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="code_postal"> code_postal </label>
                <input class="form-control bg-info"  type="text" id="code_postal" name="code_postal" placeholder="code_postal" value="<?php echo $competence['code_postal'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="ville"> ville </label>
                <input class="form-control bg-info"  type="text" id="ville" name="ville" placeholder="ville" value="<?php echo $competence['ville'] ?>"><br>
            </div>
                
            <div class="form-group">
                <label class="form-control"  for="pays"> pays </label>
                <input class="form-control bg-info"  type="text" id="pays" name="pays" placeholder="pays" value="<?php echo $competence['pays'] ?>"><br>
            </div>
                
                <input class="btn btn-primary" type="submit" value="modifier" id="submit">
           
            </div>

        </form>

        <?php

        echo $alert;

    }



    require_once '../inc/bas.inc.php';

?>