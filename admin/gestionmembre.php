<?php
    require_once '../inc/init.inc.php';

    if (!internauteEstConnecteEtAdmin()) {
        header('location:../index.php');
        exit();
    }

    require_once '../inc/haut.inc.php';

    if(isset($_GET['idmembre'])){
        
        $resultat = executeRequete("DELETE FROM quiiwi_inscrits WHERE id_inscrit = :idmembre", array(':idmembre' => $_GET['idmembre']));
    
    }
?>
<a  class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>index.php">Retour à l'Accueil Administrateur</a>
<a  class="btn btn-primary" role="button" href="index.php">Retour</a>

    <h1 class="align-middle">Gestion Membre</h1>
<div class="">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Value</th>
            <th>nom</th>
            <th>prenom</th>
            <th>pseudo</th>
            <th>email</th>
            <th>mdp</th>
            <th>telephone</th>
            <th>motif</th>
            <th>adresse</th>
            <th>code postal</th>
            <th>ville</th>
            <th>pays</th>
        </tr>

        <?php
        $competence = $pdo->query("SELECT * FROM quiiwi_inscrits");
        while($info = $competence->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            echo '<td>' . $info['id_inscrit'] . '</td>';
            echo '<td>' . $info['value'] . '</td>';
            echo '<td>' . $info['nom'] . '</td>';
            echo '<td>' . $info['prenom'] . '</td>';
            echo '<td>' . $info['pseudo'] . '</td>';
            echo '<td>' . $info['email'] . '</td>';
            echo '<td>' . $info['mdp'] . '</td>';
            echo '<td>' . $info['telephone'] . '</td>';
            echo '<td>' . $info['motif_inscription'] . '</td>';
            echo '<td>' . $info['adresse'] . '</td>';
            echo '<td>' . $info['code_postal'] . '</td>';
            echo '<td>' . $info['ville'] . '</td>';
            echo '<td>' . $info['pays'] . '</td>';
            echo '<td> <a href="gererinscrits.php?idmembre='. $info['id_inscrit'] .'"> Modifier</a> | <a href="?idmembre='.$info['id_inscrit'].'" onclick="return(confirm(\'Etes-vous certain de vouloir supprimer ce produit?\'))">Supprimer</a> </td>';
            echo '</tr>';
            
        }
        ?>
    </table>
</div>
<?php
    require_once '../inc/bas.inc.php';
?>