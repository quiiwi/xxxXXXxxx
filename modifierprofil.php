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


        // cette partie du code ne marche pas avec bindParam, il manque un niveau de sécurité

        // foreach($_POST as $indice => $valeur) {
        //     $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        // }

        // $dispo = executeRequete("SELECT * FROM quiiwi_inscrits WHERE pseudo = :pseudo", array(':pseudo' => $_POST['pseudo']));

        // $result = $pdo->prepare("UPDATE quiiwi_inscrits SET (id_inscrit, value, nom, prenom, pseudo, email, mdp, telephone, motif_inscription, adresse, code_postal, ville, pays) VALUES (:id_inscrit, 0, :nom, :prenom, :pseudo, :email, :mdp, :telephone, :motif_inscription, :adresse, :code_postal, :ville, :pays) WHERE :id_inscrit = id_inscrit", array(':id_inscrit' => $_GET['id_inscrit']));


        // $result->bindParam(':id_inscrit', $_POST['id_inscrit']);
        // $result->bindParam(':nom', $_POST['nom']);
        // $result->bindParam(':prenom', $_POST['prenom']);
        // $result->bindParam(':pseudo', $_POST['pseudo']);
        // $result->bindParam(':email', $_POST['email']);
        // $result->bindParam(':mdp', $_POST['mdp']);
        // $result->bindParam(':telephone', $_POST['telephone']);
        // $result->bindParam(':motif_inscription', $_POST['motif_inscription']);
        // $result->bindParam(':adresse', $_POST['adresse']);
        // $result->bindParam(':code_postal', $_POST['code_postal']);
        // $result->bindParam(':ville', $_POST['ville']);
        // $result->bindParam(':pays', $_POST['pays']);

        // $req = $result->execute();

        // if ($req) {
        //     $alert .= '<div>Bravo, vous faîtes desormais parti des inscrits</div>';
        // } else {
        //     $alert .= '<div>Erreur lors de votre inscription</div>';
        // }

        // var_dump($req);

        $idinscrit=addslashes($_POST['id_inscrit']);
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


        $pdo->exec("UPDATE quiiwi_inscrits SET id_inscrit ='$idinscrit', value='$value', nom='$nom', prenom='$prenom', pseudo='$pseudo', email='$email', mdp='$mdp', telephone='$email', motif_inscription='$motif_inscription', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays' WHERE id_inscrit='$idinscrit'");

        header('location:profil.php');
        exit();

    } //fin du if (empty($alert)){

}

require_once 'inc/haut.inc.php';

$donneesP = $pdo->query("SELECT * FROM quiiwi_inscrits WHERE id_inscrit = $id_inscrit");
while($info = $donneesP->fetch(PDO::FETCH_ASSOC)){

?>

    <div class="container p-3">

        <form action="" method="post">
            <!-- <div class="row">
                <div class="col-6 photoo">
                    ICI IL MANQUE UNE PHOTO
                </div>
                <div class="col-6"> -->
                    
                <div class="form-group">
                    <label class="form-control" for="id_inscrit">ID :</label>
                    <input class="form-control bg-info" type="text" id="id_inscrit" name="id_inscrit" value="<?php echo $info['id_inscrit'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="nom">Nom :</label>
                    <input class="form-control bg-info" type="text" id="nom" name="nom" value="<?php echo $info['nom'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="prenom">Prenom :</label>
                    <input class="form-control bg-info" type="text" id="prenom" name="prenom" value="<?php echo $info['prenom'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="pseudo">Pseudo :</label>
                    <input class="form-control bg-info" type="text" id="pseudo" name="pseudo" value="<?php echo $info['pseudo'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="value">Value :</label>
                    <input class="form-control bg-info" type="text" id="value" name="value" value="<?php echo $info['value'] ?>"> <br>
                </div>

                <!-- </div>
            </div>
            <div class="row">
                <div class="col-6"> -->
                <div class="form-group">
                    <label class="form-control" for="email">Email :</label>
                    <input class="form-control bg-info" type="text" id="email" name="email" value="<?php echo $info['email'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="mdp">MDP :</label>
                    <input class="form-control bg-info" type="text" id="mdp" name="mdp" value="<?php echo $info['mdp'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="telephone">Telephone :</label>
                    <input class="form-control bg-info" type="text" id="telephone" name="telephone" value="<?php echo $info['telephone'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="motif_inscription">Motif d'insccription :</label>
                    <input class="form-control bg-info" type="text" id="motif_inscription" name="motif_inscription" value="<?php  echo $info['motif_inscription'] ?>"> <br>
                </div>

                <!-- </div>
                <div class="col-6"> -->

                <div class="form-group">
                    <label class="form-control" for="adresse">Adresse :</label>
                    <input class="form-control bg-info" type="text" id="adresse" name="adresse" value="<?php echo $info['adresse'] ?>"> <br>

                <div class="form-group">
                    <label class="form-control" for="code_postal">Code Postal :</label>
                    <input class="form-control bg-info" type="text" id="code_postal" name="code_postal" value="<?php echo $info['code_postal'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="ville">Ville :</label>
                    <input class="form-control bg-info" type="text" id="ville" name="ville" value="<?php echo $info['ville'] ?>"> <br>
                </div>

                <div class="form-group">
                    <label class="form-control" for="pays">Pays :</label>
                    <input class="form-control bg-info" type="text" id="pays" name="pays" value="<?php echo $info['pays'] ?>"> <br>
                </div>
                <!-- </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br> -->
                    <input type="submit" value="modifier" class="btn bg-primary light-text">
                <!-- </div>
            </div> -->
        </form>

    </div>

<?php
}

require_once 'inc/bas.inc.php';