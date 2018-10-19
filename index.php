<?php
    require_once 'inc/init.inc.php';

    require_once 'inc/haut.inc.php';
?>

<br>
<h1 id="Jjjj" style="border: auto;">Bonjour 

<?php
    if (internauteEstConnecte()) {
        echo ' , '. ($_SESSION['membre']['pseudo']);
    }elseif(internauteEstConnecteEtAdmin()){
        echo ' , '. ($_SESSION['membre']['pseudo']);
    }
?>

!</h1>
<br>


<div id="carouselExampleIndicators" class="carousel slide pb-3" data-ride="carousel">
    <!--<ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>-->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <a href="<?php RACINE_SITE ?>informatique.php?type=Langage"><img class="d-block w-100" src="img/1.jpg" alt="Un slider"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
                <h5>Mes langages informatique</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="<?php RACINE_SITE ?>connexion.php"><img class="d-block w-100" src="img/2.jpg" alt="Sa soeur jumelle"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
                <h5>Connecte-toi!</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="<?php RACINE_SITE ?>reseausociaux.php"><img class="d-block w-100" src="img/3.jpg" alt="jamais 2 sans 3"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
               <h5>Laisse un commentaire</h5>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">

    <div class="row">

        <div class="col-12 col-sm-9">
            
            <div class="row" id="marchons">

                <div class="col-sm-4">
                    
                    <div class="container">
                        <img src="img/BGDU93.JPG" alt="une photo de mwa" height="200">
                    </div>

                </div>

                <div class="col-sm-8"  >
                    <h3>KILIC ASLAN</h3>
                    <h5 >INTEGRATEUR WEB, DEVELOPPEUR, INFORMATICIEN, CHEF CUISINIER, SERVEUR, CAISSIER, MANUTENTIONNAIRE, BENEVOL CROIX ROUGE / HANDICAP INTERNATIONNAL, BABYSITTER (1 à 5 ans), GRAND FRERE, ET SURTOUT DEPRIMEUX <i class="fas fa-frown"></i></h5>
                </div>

            </div> <!-- fin de <div class="row"> -->

            <div class="row" >
                <div class="col-sm-12">

                    <div class="row" id="marchons">
                        <div class="col-sm-12">
                            <h1>Diplômes et Formations</h1>
                            <br>

                            <div class="" id="marchonssupp">
                                <h4>Formation intégrateur développeur WEB</h4>
                                <p>-Depuis mai 2018</p>
                                <p>Formation de 10 mois labellisée Grande Ecole du Numérique (GEN) Technique de développement web et mobile</p>
                                <br>
                            </div>  

                            <div class="" id="marchonssupp">
                                <h4>HTML / CSS </h4>
                                <p>-De mai 2017 à juin 2017</p>
                                <br>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4>BAC Pro</h4>
                                <p>-De septembre 2011 à juin 2012</p>
                                <p>2nd et 1er en Electronique et Télécommunications</p>
                            </div>
                        </div>
                    </div>
                    


                    <div class="row" id="marchons">
                        <div class="col-sm-12">
                            <h1>Expériences professionnelles</h1>
                            <br>

                            <!-- QUAND JE CLIQUE SUR LE h4, JE CHARGE LA PAGE DU MAGASIN(AVEC UNE GOOGLEMAP DETAILS DE CE QUE JE FESAIS LA BAS....) -->
                            <div class="" id="marchonssupp">
                                <h4><a href="#">Developpeur indé</a></h4>
                                <p>-De décembre 2017 à février 2017</p>
                                <p>Développement de jeux sur Unity en C# avec Visuel Studio Code, créer un monde en 3D / 2D, créer des objets, pouvoir les déplacer, gérer les collisions, la texture, les forces, créer les scripts, modélisation 3D, utilisation de librarys....</p>
                                <br>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4><a href="#">Manutentionnaire</a></h4>
                                <p>-De mai 2017 à novembre 2017</p>
                                <p>Préparation des commandes, les changer dans des pallets, deplacer les pallets avec un véhicule, livraison des commandes sur PARIS, une fois par semaine, reçevoir un client potentiel et lui servir "d'homme de main"</p>
                                <br>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4><a href="#">Petits Jobs</a></h4>
                                <p>-De janvier 2015 à août 2017</p>
                                <p>Baby-sitting, fast-food</p>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4><a href="#">Chef Cuisinier</a></h4>
                                <p>-De septembre 2014 à mars 2015</p>
                                <p>Je gérais un restaurant quasiment à moi tout seul ^^</p>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4><a href="#">Petits Jobs</a></h4>
                                <p>-De janvier 2013 à août 2014</p>
                                <p>Baby-sitting, fast-food</p>
                            </div>

                            <div class="" id="marchonssupp">
                                <h4><a href="#">Informaticien Stagiaire</a></h4>
                                <p>-De janvier 2012 à mars 2012</p>
                                <p>Entretien informatique, réparations, débogage, installation d'OS. Remplacer la carte mère, barettes de RAM, l'alimentation, le processeur, monter le boîtier les ventillateurs...</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- fin de <div class="col-sm-9"> -->

        <div class="col-12 col-sm-3">

            <div class="row ">

                <div class="col-12">

                    <?php

                        $competence = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'Langage'");
                            echo'<h3>Langages</h3>';
                        while($info = $competence->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'. RACINE_SITE .'informatique.php?type=Langage">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                        echo'<br>';
                            
                        $competence2 = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'Logiciels'");
                            echo'<h3>Logiciels</h3>';
                        while($info = $competence2->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'.RACINE_SITE.'informatique.php?type=Logiciels">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                        echo'<br>';
                            
                        $competence3 = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'CMV'");    
                            echo'<h3>CMV</h3>';
                        while($info = $competence3->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'. RACINE_SITE .'informatique.php?type=CMV">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                        echo'<br>';
                            
                        $competence4 = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'CMS'");    
                            echo'<h3>CMS</h3>';
                        while($info = $competence4->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'. RACINE_SITE .'informatique.php?type=CMS">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                        echo'<br>';
                            
                        $competence5 = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'Librairies'");
                            echo'<h3>Libraries</h3>';
                        while($info = $competence5->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'. RACINE_SITE .'informatique.php?type=Librairies">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                        echo'<br>';

                        $competence6 = $pdo2->query("SELECT * FROM competence WHERE typecompetence = 'Autres'");
                            echo'<h3>Autres</h3>';
                        while($info = $competence6->fetch(PDO::FETCH_ASSOC)){
                            echo '<div id="bootperso"><a href="'. RACINE_SITE .'informatique.php?type=Autres">'.$info['nomcompetence'] . '<a><br>';
                            echo'
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$info['niveaucompetence'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div></div>';
                        }

                    ?>
                </div>
            </div>
        </div> 
    </div> <!-- fin de <div class="row"> -->
</div> <!-- fin de <div class="container"> -->

<?php

    require_once 'inc/bas.inc.php';
?>