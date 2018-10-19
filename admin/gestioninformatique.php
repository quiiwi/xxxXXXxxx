<?php
    require_once '../inc/init.inc.php';

    if (!internauteEstConnecteEtAdmin()) {
        header('location:../index.php');
        exit();
    }


    if(isset($_GET['idcompetence'])){
        
        $resultat = executeRequete2("DELETE FROM competence WHERE idcompetence = :idcompetence", array(':idcompetence' => $_GET['idcompetence']));
    
    
    }



    require_once '../inc/haut.inc.php';
?>
<a  class="btn btn-primary" role="button" href="<?php RACINE_SITE ?>index.php">Retour à l'Accueil Administrateur</a>
<a  class="btn btn-primary" role="button" href="index.php">Retour</a>

    <h1 class="align-middle">Gestion Informatique</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Nom</th>
        <th>Niveau</th>
        <th>Année</th>
        <th>Projets</th>
        <th>Type</th>
        <th>Actions</th>
    </tr>

<?php
$competence = $pdo2->query("SELECT * FROM competence");
while($info = $competence->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
    echo '<td>' . $info['idcompetence'] . '</td>';
    echo '<td>' . $info['imgcompetence'] . '</td>';
    echo '<td>' . $info['nomcompetence'] . '</td>';
    echo '<td>' . $info['niveaucompetence'] . '</td>';
    echo '<td>' . $info['anneecompetence'] . '</td>';
    echo '<td>' . $info['projetcompetence'] . '</td>';
    echo '<td>' . $info['typecompetence'] . '</td>';
    echo '<td> <a href="modifierlangue.php?idcompetence='. $info['idcompetence'] .'">Modifier</a> | <a href="?idcompetence='. $info['idcompetence'] .'" onclick="return(confirm(\'Etes-vous certain de vouloir supprimer ce produit?\'))" >Supprimer</a> </td>';
    echo '</tr>';
    
}
?>
</table>

<?php
    require_once '../inc/bas.inc.php';
?>