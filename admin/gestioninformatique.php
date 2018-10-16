<?php
    require_once '../inc/init.inc.php';

    if (!internauteEstConnecteEtAdmin()) {
        header('location:../index.php');
        exit();
    }

    require_once '../inc/haut.inc.php';
?>

<a href="../index.php">Retour</a>

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
    echo '<td> <a href="#"> Modifier ***</a> | <a href="#"> Supprimer ***</a> </td>';
    echo '</tr>';
    
}
?>
</table>

<?php
    require_once '../inc/bas.inc.php';
?>