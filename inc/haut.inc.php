<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	<title>Kilic Aslan</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo RACINE_SITE ?>css/style.css">
    
    <!-- FONT AWESOMEEEEE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    
    <!-- Bootstrap Core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=K2D|Mali|Niramit" rel="stylesheet"> 
    

</head>
<body>
    <div class="main" id="yyyYYY">
        

        <!-- Y A PLEIN D'ERREURS DANS LA NAV A CORRIGER UNE FOIS QUE J'AURAIS GUERIT -->

        <nav id="navbarr" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo RACINE_SITE ?>index.php">Quiiwi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    

                    <li class="nav-item">
                        <?php 
                            echo '<a class="nav-link ';
                            echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/projetsperso.php') .' " href="'. RACINE_SITE .'projetsperso.php"> Projets Perso </a>';
                        ?>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  <?php classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/informatique.php') ?> " data-toggle="dropdown" href="<?php echo RACINE_SITE ?>informatique.php" role="button" aria-haspopup="true" aria-expanded="false">Informatique</a>
                        <div class="dropdown-menu">
                            <?php 
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=Langage">Langages</a>';
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=CMS">CMS</a>';
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=CMV">CMV</a>';
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=Logiciels">Logiciels</a>';
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=Librairies">Librairies</a>';
                                echo '<a class="dropdown-item" href="'. RACINE_SITE .'informatique.php?type=Autres">Autres</a>';
                            ?>
                        </div>
                    </li>
                    
                    <?php
                        if (internauteEstConnecteEtAdmin()){
                            echo
                            '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  ';
                                echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/profil.php'); 
                                echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/modifierprofil.php'); 
                                echo '" data-toggle="dropdown" href="'. RACINE_SITE .'profil.php" role="button" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . RACINE_SITE . 'profil.php">Profil</a>
                                    <a class="dropdown-item" href="' . RACINE_SITE . 'modifierprofil.php">Modifier votre profil</a>
                                    <a class="dropdown-item" href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Déconnexion</a>
                                </div>
                            </li>
                            '
                            ;
                            // FAUT QUE JE BOUGE CETTE PARTIE DU CODE
                            
                        }elseif(internauteEstConnecte()){
                            echo 
                            '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/informatique.php\') ?> " data-toggle="dropdown" href="profil.php" role="button" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="connexion.php?action=deconnexion">Déconnexion</a>
                                    <a class="dropdown-item" href="modifierprofil.php">Modifier mon profil</a>
                                    <a class="dropdown-item" href="profil.php">Profil</a>
                                </div>
                            </li>';
                        }
                    ?> 

                    <li class="nav-item">
                        <a id="swaggyyer" class=" nav-link" href="<?php echo RACINE_SITE ?>reseausociaux.php"> Me contacter </a>
                    </li>

                        <?php
                        if (internauteEstConnecteEtAdmin()){
                                echo '<li class="nav-item samerrit"> <a class="nav-item nav-link" href="'. RACINE_SITE .'connexion.php?action=deconnexion">Déconnexion</a> </li>';
                            }elseif(internauteEstConnecte()){
                                echo '<li class="nav-item samerrit"> <a class="nav-item nav-link" href="'. RACINE_SITE .'connexion.php?action=deconnexion">Déconnexion</a> </li>';
                            }else{
                                echo '<li class="nav-item samerrit"> <a class="nav-item nav-link <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/connexion.php\') ?>" href="connexion.php">connexion</a> </li>';

                                echo '<li class="nav-item "> <a class=" nav-item nav-link <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/inscription.php\') ?>" href="inscription.php">inscription</a></li>';
                            }
                        ?>
                    
                    
                    <?php 
                        if (internauteEstConnecteEtAdmin()){
                            echo '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  ';
                                echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/admin/nouvellelangue.php') ;
                                echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/admin/gestioninformatique.php') ;
                                echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/admin/gestionmembre.php') ;
                                echo '" data-toggle="dropdown" href="'. RACINE_SITE .'admin/index.php" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="'. RACINE_SITE .'admin/nouvellelangue.php">Nouvelle Langue</a>
                                    <a class="dropdown-item" href="'. RACINE_SITE .'admin/gestioninformatique.php">Gestion Informatique</a>
                                    <a class="dropdown-item" href="'. RACINE_SITE .'admin/gestionmembre.php">Gestion Membre</a>
                                </div>
                            </li>';
                        }
                    ?>
                   

                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-9">
                                    <?php
                                        if (internauteEstConnecteEtAdmin()){
                                            echo '<p class="text-primary mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> SUPER ADMIN </p>';
                                        }elseif(internauteEstConnecte()){
                                            echo '<p class="text-success mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> Utilisateur </p>';
                                        }else{
                                            echo '<p class="text-secondary mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> Visiteur </p>';
                                        }
                                    ?>  
                                </div>
                                <div class="col-3">
                                    <?php
                                        if (internauteEstConnecteEtAdmin()){
                                            echo '<p class="text-primary mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> <i class="fas fa-circle"></i> </p>';
                                        }elseif(internauteEstConnecte()){
                                            echo '<p class="text-success mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> <i class="fas fa-circle"></i> </p>';
                                        }else{
                                            echo '<p class="text-secondary mt-2" title="Je suis Connecté Et Admin" data-toggle="tooltip"> <i class="fas fa-circle"></i> </p>';
                                        }
                                    ?>    
                                </div>
                            </div>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </nav>

        <div id="app">
            <div class="container " id="objP">
