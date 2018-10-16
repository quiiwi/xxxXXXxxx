<?php
    require_once 'inc/init.inc.php';

    if (isset($_GET['action']) && $_GET['action'] == 'deconnexion'){

        session_destroy(); 

        header('location:index.php');
        
		exit();
    
    }



    if(!empty($_POST)){
        if(!isset($_POST['pseudo']) || empty($_POST['pseudo'])) {
            $alert .= '<div class="bg-danger"> Le pseudo est requis. </div>';
        }
        if(!isset($_POST['mdp']) || empty($_POST['mdp'])) {
            $alert .= '<div class="bg-danger"> Le mot de passe est requis. </div>';
        }
        if (empty($alert)) {

            $membre = executeRequete("SELECT * FROM quiiwi_inscrits WHERE pseudo = :pseudo AND mdp = :mdp", array( ':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));

            if ($membre -> rowCount() >0 ){ 

                $informations = $membre->fetch(PDO::FETCH_ASSOC); 
                $_SESSION['membre'] = $informations;
                header('location:profil.php');
                exit();
                
            } else {
                $alert .= '<div class="bg-danger"> Erreur sur les identifiants. </div>';
            }
        } 
    }

    require_once 'inc/haut.inc.php';
?>


<div class="container p-3">



    <div class="row">


        <div class="col-lg-5 p-3 bg-light hjhjhj">

            <h1 class="align-middle">Connecte toi!</h1>
            

            <form action="" method="post">

                <label for="pseudo">Pseudo : *</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo"><br>

                <label for="mdp">Mot de passe : *</label>
                <input type="text" id="mdp" name="mdp" placeholder="Entrez votre mot de passe"><br>

                <input type="submit" name="connexion" value="se connecter" class="btn btn-primary">

                <?php
                    echo $alert;
                ?>

            </form>

        </div>

    </div>

</div>

<?php
    require_once 'inc/bas.inc.php';
?>