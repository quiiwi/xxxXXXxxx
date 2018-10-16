<?php
    require_once 'inc/init.inc.php';


    if(!empty($_POST)){
	
        if (!isset($_POST['nom']) || strlen($_POST['nom']) <1 || strlen($_POST['nom']) >20    ) $alert .= '<div class="bg-danger"> Erreur nom </div>';

        if (!isset($_POST['prenom']) || strlen($_POST['prenom']) <1 || strlen($_POST['prenom']) >20    ) $alert .= '<div class="bg-danger"> Erreur prénom </div>';

        if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) <4 || strlen($_POST['pseudo']) >20    ) $alert .= '<div class="bg-danger"> Erreur pseudo </div>';

        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $alert .= '<div class="bg-danger"> Erreur email </div>';

        if (!isset($_POST['mdp']) || strlen($_POST['mdp']) <4 || strlen($_POST['mdp']) >20    ) $alert .= '<div class="bg-danger"> Erreur mot de passe </div>';
    
        if (!isset($_POST['telephone']) || !ctype_digit($_POST['telephone']) || strlen($_POST['telephone']) != 10) $alert .= '<div class="bg-danger"> Erreur telephone </div>';
    
        if (!isset($_POST['motif_inscription']) || ($_POST['motif_inscription'] != 'pro' && $_POST['motif_inscription'] != 'perso' && $_POST['motif_inscription'] != 'questions' && $_POST['motif_inscription'] != 'me_contacter'  )) $alert .= '<div class="bg-danger"> Erreur motif </div>';
    
        
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
                $alert .= '<div>Bravo, vous faîtes desormais parti des inscrits</div>';
            } else {
                $alert .= '<div>Erreur lors de votre inscription</div>';
            }
    
        } //fin du if (empty($alert)){

    }


    // if(!empty($_POST('pseudo'))){

    //     // validation des champs :
    
    //     if(!isset($_POST['pseudo']) || empty($_POST['pseudo'])) {
    
    //         $contenu .= '<div class="bg-danger"> Le pseudo est requis. </div>';
    
    //     }
    
    
    //     if(!isset($_POST['mdp']) || empty($_POST['mdp'])) {
    
    //         $contenu .= '<div class="bg-danger"> Le mot de passe est requis. </div>';
    //     }
    
    
    //     if (empty($contenu)) { // s'il n'y a pas d'erreur sur le formulaire'
    
    //         $membre = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp", array( ':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));
    
    //         if ($membre -> rowCount() >0 ){ // si le nombre de ligne est sup�rieur � 0, alors le login et le mdp existent ensemble en bdd
    //             //on cr�e une session avec les informations du membre : 
    
    //             $informations = $membre->fetch(PDO::FETCH_ASSOC); // on fait un fetch pour transformer l'objet $membre en un array associatif qui contient en indices le nom de tous les champ de la requ�te
    //             debug($informations);
    
    //             $_SESSION['membre'] = $informations;
    //              // nous cr�ons une session avec les infos du membre qui proviennent de la bdd
    
    //             header('location:profil.php');
    //             exit(); // On redirige l'internaute vers sa page de profil, et on quitte ce script avec exit()
            
    //         } else {
    //             $contenu .= '<div class="bg-danger"> Erreur sur les identifiants. </div>';
    //         }
        
    //     } 
    
    
    // }

    require_once 'inc/haut.inc.php';
?>
<div class="container p-3">



<div class="row">


    <div class="col-lg-5 p-3 bg-light hjhjhj">

        <h1 class="align-middle">Inscription</h1>

        <?php echo $alert; ?>

        <form action="" method="post">

            <div class="form-group">
                <label for="nom">Nom : *</label><br>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom : *</label><br>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
            </div>

            <div class="form-group">
                <label for="pseudo">Pseudo : *</label><br>
                <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
            </div>

            <div class="form-group">
                <label for="email">Email : *</label><br>
                <input type="text" id="email" name="email" placeholder="Entrez votre email">
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe : *</label><br>
                <input type="text" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
            </div>

            <div class="form-group">
                <label for="telephone">Télephone : *</label><br>
                <input type="text" id="telephone" name="telephone" placeholder="Entrez votre télephone">
            </div>

            <div class="form-group">
                <label for="motif_inscription">Motif de votre inscription : *</label><br>
                <select class="form-control" name="motif_inscription" id="motif_inscription">
                    <option value="pro">Professionnel</option>
                    <option value="perso">Personnelle</option>
                    <option value="questions">Questions</option>
                    <option value="me_contacter">Me contacter</option>
                </select>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse :</label><br>
                <input type="text" id="adresse" name="adresse" placeholder="Entrez votre adresse">
            </div>

            <div class="form-group">
                <label for="code_postal">Code postal :</label><br>
                <input type="text" id="code_postal" name="code_postal" placeholder="Entrez votre code postal">
            </div>

            <div class="form-group">
                <label for="ville">Ville :</label><br>
                <input type="text" id="ville" name="ville" placeholder="Entrez votre ville">
            </div>

            <div class="form-group">
                <label for="pays">Pays :</label><br>
                <input type="text" id="pays" name="pays" placeholder="Entrez votre pays">
            </div>

            <input type="submit" name="inscription" value="s'inscrire" class="btn btn-primary">
        
        </form>

    </div>
    </div>


</div>

<?php
    require_once 'inc/bas.inc.php';
?>