<?php
    require_once  '../inc/init.inc.php';

    if (!internauteEstConnecteEtAdmin()) {
        header('location:../index.php'); //si pas admin, on le redirige vers la page de connexion
        exit();
    }

    if(!empty($_POST)){
	
        if (!isset($_POST['imgcompetence']) || strlen($_POST['imgcompetence']) <1 || strlen($_POST['imgcompetence']) >254    ) $alert .= '<div class="bg-danger"> Erreur img </div>';
        if (!isset($_POST['nomcompetence']) || strlen($_POST['nomcompetence']) <1 || strlen($_POST['nomcompetence']) >254    ) $alert .= '<div class="bg-danger"> Erreur nom </div>';
        if (!isset($_POST['niveaucompetence']) || strlen($_POST['niveaucompetence']) <1 || strlen($_POST['niveaucompetence']) >3    ) $alert .= '<div class="bg-danger"> Erreur niveau </div>';
        if (!isset($_POST['anneecompetence']) || strlen($_POST['anneecompetence']) != 4 ) $alert .= '<div class="bg-danger"> Erreur date </div>';
        if (!isset($_POST['projetcompetence']) || strlen($_POST['projetcompetence']) <1 || strlen($_POST['projetcompetence']) >254    ) $alert .= '<div class="bg-danger"> Erreur projet </div>';
        if (!isset($_POST['typecompetence']) || ($_POST['typecompetence'] != 'Langage' && $_POST['typecompetence'] != 'Logiciels' && $_POST['typecompetence'] != 'CMV' && $_POST['typecompetence'] != 'CMS' && $_POST['typecompetence'] != 'Librairies' && $_POST['typecompetence'] != 'Autres'  )) $alert .= '<div class="bg-danger"> Erreur type </div>';

        if (empty($alert)){

            foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
            }

            $result = $pdo2->prepare(" INSERT INTO competence (imgcompetence, nomcompetence, niveaucompetence, anneecompetence, projetcompetence, typecompetence ) VALUES ( :imgcompetence, :nomcompetence, :niveaucompetence, :anneecompetence, :projetcompetence, :typecompetence ) ");

            $result->bindParam(':imgcompetence', $_POST['imgcompetence']);
            $result->bindParam(':nomcompetence', $_POST['nomcompetence']);
            $result->bindParam(':niveaucompetence', $_POST['niveaucompetence']);
            $result->bindParam(':anneecompetence', $_POST['anneecompetence']);
            $result->bindParam(':projetcompetence', $_POST['projetcompetence']);
            $result->bindParam(':typecompetence', $_POST['typecompetence']);
            $req = $result->execute();
        }
    }

    require_once '../inc/haut.inc.php';
    //------------ CONTENUE DE LA PAGE --------------------//
?>

    <a href="../index.php">Retour</a>
    <h1>Nouvelle Langue</h1>

    <?php echo $alert ?>
    
    <form action="" method="post">

        <label for="imgcompetence">Image :</label>
        <input type="text" id="imgcompetence" name="imgcompetence"><br>

        <label for="nomcompetence">Nom :</label>
        <input type="text" id="nomcompetence" name="nomcompetence"><br>

        <label for="niveaucompetence">Niveau :</label>
    <?php
        $niveau = '';
            $niveau .= '<select name="niveaucompetence">';
            for($i=100;$i>=1;$i--){
                $niveau .= "<option>" . $i . "</option>";
            }
            $niveau .= '</select> <br>';
        echo $niveau;
    ?>

        <label for="anneecompetence">Année : </label>
    <?php
        $annees = '';
            $annees .= '<select id="anneecompetence" name="anneecompetence" >';
            for($i = date('Y'); $i >= date('Y')-25; $i--){
                $annees .= '<option value="'. $i .'">'. $i .'</option>';
            }
            $annees .= '</select> <br>';
        echo $annees;
    ?>

        <label for="projetcompetence">projet :</label>
        <input type="text" id="projetcompetence" name="projetcompetence"><br>

        <label for="typecompetence">Type :</label>
        <select id="typecompetence" name="typecompetence">
            <option value="Langage" selected>Langage</option> 
            <option value="Logiciels">Logiciels</option>
            <option value="CMV">CMV</option>
            <option value="CMS">CMS</option>
            <option value="Librairies">Librairies</option>
            <option value="Autres">Autres</option>
        </select><br>

        <input type="submit" value="enregistrer une nouvelle compétence"><br>












    </form>






<?php
    require_once '../inc/bas.inc.php';