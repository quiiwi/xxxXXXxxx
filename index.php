<?php
    require_once 'inc/init.inc.php';
    require_once 'inc/haut.inc.php';
?>

<br>
<h1 style="border: auto;">***** Bonjour 

<?php
    if (internauteEstConnecte()) {
        echo ','. ($_SESSION['membre']['pseudo']);
    }elseif(internauteEstConnecteEtAdmin()){
        echo ','. ($_SESSION['membre']['pseudo']);
    }
?>

! *****</h1>
<br>


<div id="carouselExampleIndicators" class="carousel slide pb-3" data-ride="carousel">
    <!--<ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>-->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <a href="informatique.php"><img class="d-block w-100" src="img/1.jpg" alt="First slide"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
                <h5>INFORMATIQUE</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="experiencespro.php"><img class="d-block w-100" src="img/2.jpg" alt="Second slide"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
                <h5>EXPERIENCE PROFESSIONNELLE</h5>
            </div>
        </div>

        <div class="carousel-item">
            <a href="inscription.php"><img class="d-block w-100" src="img/3.jpg" alt="Third slide"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
               <h5>INSCRIPTION</h5>
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
            
            <div class="row">

                <div class="col-sm-4">
                    
                    <div class="container">
                        <img src="img/BGDU93.JPG" alt="une photo de mwa" height="200">
                    </div>

                </div>

                <div class="col-sm-8">
                    <h3>KILIC ASLAN</h3>
                    <h5>INTEGRATEUR WEB, DEVELOPPEUR, INFORMATICIEN, CHEF CUISINIER, SERVEUR, CAISSIER, MANUTENTIONNAIRE, BENEVOL CROIX ROUGE / HANDICAP INTERNATIONNAL, BABYSITTER (1 à 5 ans), GRAND FRERE, ET SURTOUT AMOUREUX <i class="fas fa-heart"></i> </h5>
                </div>

            </div> <!-- fin de <div class="row"> -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Diplômes et Formations</h1>
                            <br>

                            <h4>Formation intégrateur développeur WEB</h4>
                            <p>-Depuis mai 2018</p>
                            <p>Formation de 10 mois labellisée Grande Ecole du Numérique (GEN) Technique de développement web et mobile</p>
                            <br>

                            <h4>HTML / CSS </h4>
                            <p>-De mai 2017 à juin 2017</p>
                            <br>

                            <h4>BAC Pro</h4>
                            <p>-De septembre 2011 à juin 2012</p>
                            <p>2nd et 1er en Electronique et Télécommunications</p>
                        </div>
                    </div>
                    


                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Expériences professionnelles</h1>
                            <br>

                            <!-- QUAND JE CLIQUE SUR LE h4, JE CHARGE LA PAGE DU MAGASIN(AVEC UNE GOOGLEMAP DETAILS DE CE QUE JE FESAIS LA BAS....) -->
                            <h4><a href="#">Developpeur indé</a></h4>
                            <p>-De décembre 2017 à février 2017</p>
                            <p>Développement de jeux sur Unity en C# avec Visuel Studio Code, créer un monde en 3D / 2D, créer des objets, pouvoir les déplacer, gérer les collisions, la texture, les forces, créer les scripts, modélisation 3D, utilisation de librarys....</p>
                            <br>

                            <h4><a href="#">Manutentionnaire</a></h4>
                            <p>-De mai 2017 à novembre 2017</p>
                            <p>Préparation des commandes, les changer dans des pallets, deplacer les pallets avec un véhicule, livraison des commandes sur PARIS, une fois par semaine, reçevoir un client potentiel et lui servir "d'homme de main"</p>
                            <br>

                            <h4><a href="#">Petits Jobs</a></h4>
                            <p>-De janvier 2015 à août 2017</p>
                            <p>Baby-sitting, fast-food</p>

                            <h4><a href="#">Chef Cuisinier</a></h4>
                            <p>-De septembre 2014 à mars 2015</p>
                            <p>Je gérais un restaurant quasiment à moi tout seul ^^</p>

                            <h4><a href="#">Petits Jobs</a></h4>
                            <p>-De janvier 2013 à août 2014</p>
                            <p>Baby-sitting, fast-food</p>

                            <h4><a href="#">Informaticien Stagiaire</a></h4>
                            <p>-De janvier 2012 à mars 2012</p>
                            <p>Entretien informatique, réparations, débogage, installation d'OS. Remplacer la carte mère, barettes de RAM, l'alimentation, le processeur, monter le boîtier les ventillateurs...</p>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- fin de <div class="col-sm-9"> -->

        <div class="col-12 col-sm-3">

           <div class="row">
               <div class="col-12">
                   -EMAIL <br>
                   -GIT <br>
                   -FACE    <br>
                   -INSTA   <br>
                   -YT <br>
                    <br>
                    ------------
               </div>
               <div class="col-12">
                   ICI REQUETE SQL POUR RECUPERER LES DONNEES DE LA BDD (Langages)
                   <br>
                   ------------
               </div>
               <div class="col-12">
                   ICI REQUETE SQL POUR RECUPERER LES DONNEES DE LA BDD (CMS)
                   <br>
                   ------------
               </div>
               <div class="col-12">
                   ICI REQUETE SQL POUR RECUPERER LES DONNEES DE LA BDD (CMV)
                   <br>
                   ------------
               </div>
               <div class="col-12">
                   ICI REQUETE SQL POUR RECUPERER LES DONNEES DE LA BDD (LOGICIELS)
                   <br>
                   ------------
               </div>
           </div>

        </div> <!-- fin de <div class="col-sm-3"> -->

    </div> <!-- fin de <div class="row"> -->

</div> <!-- fin de <div class="container"> -->



















<?php

    require_once 'inc/bas.inc.php';
?>