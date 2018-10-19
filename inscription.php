<?php
    require_once 'inc/init.inc.php';


    if(!empty($_POST)){
	
        if (!isset($_POST['nom']) || strlen($_POST['nom']) <1 || strlen($_POST['nom']) >20    ) $alert .= '<div class="alert alert-danger"> Erreur nom </div>';

        if (!isset($_POST['prenom']) || strlen($_POST['prenom']) <1 || strlen($_POST['prenom']) >20    ) $alert .= '<div class="alert alert-danger"> Erreur prénom </div>';

        if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) <1 || strlen($_POST['pseudo']) >20    ) $alert .= '<div class="alert alert-danger"> Erreur pseudo </div>';

        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $alert .= '<div class="alert alert-danger"> Erreur email </div>';

        if (!isset($_POST['mdp']) || strlen($_POST['mdp']) <1 || strlen($_POST['mdp']) >20    ) $alert .= '<div class="alert alert-danger"> Erreur mot de passe </div>';
    
        if (!isset($_POST['telephone']) || !ctype_digit($_POST['telephone']) || strlen($_POST['telephone']) != 10) $alert .= '<div class="alert alert-danger"> Erreur telephone </div>';
    
        if (!isset($_POST['motif_inscription']) || ($_POST['motif_inscription'] != 'pro' && $_POST['motif_inscription'] != 'perso' && $_POST['motif_inscription'] != 'questions' && $_POST['motif_inscription'] != 'me_contacter'  )) $alert .= '<div class="alert alert-danger"> Erreur motif </div>';
    
        
        if (empty($alert)){

            foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
            }

            $dispo = executeRequete("SELECT * FROM quiiwi_inscrits WHERE pseudo = :pseudo", array(':pseudo' => $_POST['pseudo']));
    
            $result = $pdo->prepare("INSERT INTO quiiwi_inscrits (value, nom, prenom, pseudo, email, mdp, telephone, motif_inscription, adresse, code_postal, ville, pays) VALUES (0, :nom, :prenom, :pseudo, :email, :mdp, :telephone, :motif_inscription, :adresse, :code_postal, :ville, :pays) ");
    
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
                $alert .= '<div class="alert alert-info">Bravo, vous faîtes desormais parti des inscrits</div>';
            } else {
                $alert .= '<div class="alert alert-danger">Erreur lors de votre inscription</div>';
            }
    
        } //fin du if (empty($alert)){

    }


    require_once 'inc/haut.inc.php';
?>
<div class="container p-3">

    <div class="row">

        <div class="col-4">
        
            <h1 class="align-middle">Inscrit toi !</h1>

            <?php echo $alert; ?>

        </div>

        <div class="col-8">

            <form action="" method="post">

                <div class="form-group">
                    <label for="nom">Nom :</label><br>
                    <input class="form-control" type="text" id="nom" name="nom" placeholder="Entrez votre nom">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom :</label><br>
                    <input class="form-control" type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
                </div>

                <div class="form-group">
                    <label for="pseudo">Pseudo :</label><br>
                    <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
                </div>

                <div class="form-group">
                    <label for="email">Email :</label><br>
                    <input class="form-control" type="text" id="email" name="email" placeholder="Entrez votre email">
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe :</label><br>
                    <input class="form-control" type="text" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
                </div>

                <div class="form-group">
                    <label for="telephone">Télephone :</label><br>
                    <input class="form-control" type="text" id="telephone" name="telephone" placeholder="Entrez votre télephone">
                </div>

                <div class="form-group">
                    <label for="motif_inscription">Motif de votre inscription :</label><br>
                    <select class="form-control" name="motif_inscription" id="motif_inscription">
                        <option value="pro">Professionnel</option>
                        <option value="perso">Personnelle</option>
                        <option value="questions">Questions</option>
                        <option value="me_contacter">Me contacter</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse :</label><br>
                    <input class="form-control" type="text" id="adresse" name="adresse" placeholder="Entrez votre adresse">
                </div>

                <div class="form-group">
                    <label for="code_postal">Code postal :</label><br>
                    <input class="form-control" type="text" id="code_postal" name="code_postal" placeholder="Entrez votre code postal">
                </div>

                <div class="form-group">
                    <label for="ville">Ville :</label><br>
                    <input class="form-control" type="text" id="ville" name="ville" placeholder="Entrez votre ville">
                </div>

                <div class="form-group">
                    <label for="pays">Pays :</label><br>
                    <input class="form-control" type="text" id="pays" name="pays" placeholder="Entrez votre pays">
                </div>

                <input type="submit" name="inscription" value="s'inscrire" class="btn btn-primary">
            
            </form>
        
        </div>

    </div>

</div>

<?php
    require_once 'inc/bas.inc.php';
?>