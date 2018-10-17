<?php
require_once 'inc/init.inc.php';

if (!internauteEstConnecte()) {
    header('location:../index.php');
    exit();
}

extract($_SESSION['membre']);

if(!empty($_POST)){
    
    if (!isset($_POST['id_inscrit'])) $alert .= '<div class="bg-danger"> Erreur id </div>';
	
    if (!isset($_POST['nom'])) $alert .= '<div class="bg-danger"> Erreur nom </div>';

    if (!isset($_POST['prenom'])) $alert .= '<div class="bg-danger"> Erreur prénom </div>';

    if (!isset($_POST['pseudo'])) $alert .= '<div class="bg-danger"> Erreur pseudo </div>';

    if (!isset($_POST['email'])) $alert .= '<div class="bg-danger"> Erreur email </div>';

    if (!isset($_POST['mdp'])) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';

    if (!isset($_POST['telephone'])) $alert .= '<div class="bg-danger"> Erreur telephone </div>';
    
    if (!isset($_POST['motif_inscription']) || ($_POST['motif_inscription'] != 'pro' && $_POST['motif_inscription'] != 'perso' && $_POST['motif_inscription'] != 'questions' && $_POST['motif_inscription'] != 'me_contacter'  )) $alert .= '<div class="bg-danger"> Erreur motif </div>';
    
    if (!isset($_POST['adresse'])) $alert .= '<div class="bg-danger"> Erreur adresse </div>';
    
    if (!isset($_POST['code_postal'])) $alert .= '<div class="bg-danger"> Erreur code_postal </div>';
    
    if (!isset($_POST['ville'])) $alert .= '<div class="bg-danger"> Erreur ville </div>';
    
    if (!isset($_POST['pays'])) $alert .= '<div class="bg-danger"> Erreur pays </div>';
    
    if (empty($alert)){

        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        }

        $dispo = executeRequete("SELECT * FROM quiiwi_inscrits WHERE pseudo = :pseudo", array(':pseudo' => $_POST['pseudo']));

        $result = $pdo->prepare("UPDATE quiiwi_inscrits SET (id_inscrit, value, nom, prenom, pseudo, email, mdp, telephone, motif_inscription, adresse, code_postal, ville, pays) VALUES (:id_inscrit, 0, :nom, :prenom, :pseudo, :email, :mdp, :telephone, :motif_inscription, :adresse, :code_postal, :ville, :pays) WHERE id_inscrit = :id_inscrit", array(':id_inscrit' => $_POST['id_inscrit']));

        $result->bindParam(':id_inscrit', $_POST['id_inscrit']);
        $result->bindParam(':nom', $_POST['nom']);
        $result->bindParam(':prenom', $_POST['prenom']);
        $result->bindParam(':pseudo', $_POST['pseudo']);
        $result->bindParam(':email', $_POST['email']);
        $result->bindParam(':mdp', $_POST['mdp']);
        $result->bindParam(':telephone', $_POST['telephone']);
        $result->bindParam(':motif_inscription', $_POST['motif_inscription']);
        $result->bindParam(':adresse', $_POST['adresse']);
        $result->bindParam(':code_postal', $_POST['code_postal']);
        $result->bindParam(':ville', $_POST['ville']);
        $result->bindParam(':pays', $_POST['pays']);

        $req = $result->execute();

        if ($req) {
            $alert .= '<div>Bravo, vous faîtes desormais parti des inscrits</div>';
        } else {
            $alert .= '<div>Erreur lors de votre inscription</div>';
        }

    } //fin du if (empty($alert)){

}

require_once 'inc/haut.inc.php';

?>

<div class="yoloooo container bg-primary p-3">
    <div class="container bg-dark p-3">

        <form action="" method="post">
            <div class="row">
                
                <div class="col-6 photoo">
                    ICI IL MANQUE UNE PHOTO
                </div>

                <div class="col-6">
                    id : <input type="text" id="id_inscrit" name="id_inscrit" value="<?php echo $id_inscrit ?>"> <br>
                    nom :  <input type="text" id="nom" name="nom" value="<?php  echo $nom  ?>">  <br>
                    prénom : <input type="text" id="prenom" name="prenom" value="<?php  echo $prenom  ?>">  <br>
                    pseudo : <input type="text" id="pseudo" name="pseudo" value="<?php  echo $pseudo  ?>">  <br>
                    value : <input type="text" id="value" name="value" value="<?php  echo $value  ?>">  <br>
                </div>

            </div>

            <div class="row">

                <div class="col-6">
                    email : <input type="text" id="email" name="email" value="<?php  echo $email  ?>">  <br>
                    mdp : <input type="text" id="mdp" name="mdp" value="<?php  echo $mdp  ?>">  <br>
                    téléphone : <input type="text" id="telehpone" name="telephone" value="<?php  echo $telephone  ?>">  <br>
                    motif_inscription : <input type="text" id="motif_inscription" name="motif_inscription" value="<?php  echo $motif_inscription  ?>">  <br>
                </div>

                <div class="col-6">
                    adresse : <input type="text" id="adresse" name="adresse" value="<?php  echo $adresse  ?>">  <br>
                    code postal : <input type="text" id="code_postal" name="code_postal" value="<?php  echo $code_postal  ?>">  <br>
                    ville : <input type="text" id="ville" name="ville" value="<?php  echo $ville  ?>">  <br>
                    pays : <input type="text" id="pays" name="pays" value="<?php  echo $pays  ?>">  <br>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <br>
                    <input type="submit" value="*** modifier ***" class="btn bg-primary light-text">
                </div>
            </div>
        </form>

    </div>
</div>
