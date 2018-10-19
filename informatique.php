<?php
    require_once 'inc/init.inc.php';

    if(isset($_GET['type'])){

        $competence = $pdo2->query("SELECT * FROM competence ");

        while($info = $competence->fetch(PDO::FETCH_ASSOC)) {

            if($info['typecompetence'] == $_GET['type']){

                $titre = $info['typecompetence'] . ' ';
                $titre1 = substr($titre, 0, strpos($titre, ' '));

                $text .= 
                '<div class="yaramiop col-sm-4 p-3 ">

                        <div class="specialcarddd2 card text-black mb-3" style="max-width: 18rem;">
                        
                            <img class="card-img-top" src="logo/'. $info['imgcompetence'] .'" alt="Card image cap">
                                    
                            <div class="card-header"> '. $info['nomcompetence'] .' </div>
                                    
                            <div class="card-body">
                                <ul class="list-group list-group-flush">Niveau : '. $info['niveaucompetence'] .' </ul>
                            </div>

                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '. $info['niveaucompetence'] .'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                                        
                            <div class="card-body">
                                        
                                <p class="card-text">Date d\'apprentissage : '. $info['anneecompetence'] .' </p>
                                
                                <p class="card-text">Projets terminés : '. $info['projetcompetence'] .' </p>
                                                
                            </div>
                        </div>                 
                </div>';
            }
        }
    }

    require_once 'inc/haut.inc.php';
?>

<div class="container">

    <a class="text-dark" href="informatique.php?type=Langage">Langages</a> || 
    <a class="text-dark" href="informatique.php?type=CMS">CMS</a> || 
    <a class="text-dark" href="informatique.php?type=CMV">CMV</a> || 
    <a class="text-dark" href="informatique.php?type=Logiciels">Logiciels</a> || 
    <a class="text-dark" href="informatique.php?type=Librairies">Librairies</a> || 
    <a class="text-dark" href="informatique.php?type=Autres">Autres</a>

</div>

<?php

    echo '<h2 class="align-middle" style="text-align: center;">'. $titre1 .'</h2>';

    echo '<div class="row">' . $text;

    if (internauteEstConnecteEtAdmin()){ 
        echo
        '
    <div class="yaramiop col-sm-4 p-3 " onclick="location.href=\''. RACINE_SITE .'admin/nouvellelangue.php\';">

        <div class="specialcarddd2 card text-black mb-3" style="max-width: 18rem;">
        
            <img class="card-img-top" src="logo/plus.png" alt="Card image cap">
                    
            <div class="card-header"> Ajouter une nouvelle compétence </div>
                    
            <div class="card-body">
                <ul class="list-group list-group-flush">Niveau : ... </ul>
            </div>

            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    
            <div class="card-body">
                    
                <p class="card-text">Date d\'apprentissage : ... </p>
                
                <p class="card-text">Projets terminés : ... </p>

            </div>
                                
        </div>                 
    </div>
</div>';
}
    require_once 'inc/bas.inc.php';
?>