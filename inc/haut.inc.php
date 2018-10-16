<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
   
	<title>Kilic Aslan</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- FONT AWESOMEEEEE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

</head>
<body>
    <div class="main">

        <nav id="navbarr" class="container navbar-dark bg-dark">
            <ul class="nav nav-pills ">

                <li>
                    <div class="container">
                        <?php
                            if (internauteEstConnecteEtAdmin()){

                                echo '<p class="text-primary mt-2"> <i class="fas fa-circle"></i> </p>';

                            }elseif(internauteEstConnecte()){

                                echo '<p class="text-success mt-2"> <i class="fas fa-circle"></i> </p>';

                            }else{

                                echo '<p class="text-secondary mt-2"> <i class="fas fa-circle"></i> </p>';

                            }
                        ?>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="text-white nav-item nav-link <?php classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/index.php') ?>" href="index.php">Accueil</a>
                </li> -->

                            <!-- TESTTT -->
                <li class="nav-item">
                    <?php 
                        echo '<a class="text-white nav-item nav-link ';
                        echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/index.php') . '" href="'. RACINE_SITE .'index.php">Accueil</a>';
                    ?>
                </li>

                <li class="nav-item">
                    <?php 
                        echo '<a class="text-white nav-item nav-link ';
                        echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/projetsperso.php') . '" href="'. RACINE_SITE .'projetsperso.php">Projets Perso</a>';
                    ?>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white <?php classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/informatique.php') ?> " data-toggle="dropdown" href="informatique.php" role="button" aria-haspopup="true" aria-expanded="false">Informatique</a>
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
                            <a class="nav-link dropdown-toggle text-white ';
                            echo classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/profil.php') . '" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="'. RACINE_SITE .'admin/nouvellelangue.php">Nouvelle Langue</a>
                                <a class="dropdown-item" href="'. RACINE_SITE .'admin/gestioninformatique.php">Gestion Informatique</a>
                                <a class="dropdown-item" href="'. RACINE_SITE .'admin/gestionmembre.php">Gestion Membre</a>
                                <a class="dropdown-item" href="'. RACINE_SITE .'profil.php">Profil </a>
                                <a class="dropdown-item" href="'. RACINE_SITE .'modifierprofil.php">Modifier votre profil </a>
                                <a class="dropdown-item" href="'. RACINE_SITE .'connexion.php?action=deconnexion"> Déconnexion </a>
                            </div>
                        </li>';
                        
                    }elseif(internauteEstConnecte()){

                        echo 
                        '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/informatique.php\') ?> " data-toggle="dropdown" href="informatique.php" role="button" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                            <div class="dropdown-menu">
                    

                                <a class="dropdown-item" href="connexion.php?action=deconnexion">deconnexion</a>
                                <a class="dropdown-item" href="modifierprofil.php"> modifier votre profil </a>
                                <a class="dropdown-item" href="profil.php"> profil </a>
                            </div>
                        </li>';
                        
                    }else{

                        echo '<li class="nav-item "><a class="text-white nav-item nav-link <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/connexion.php\') ?>" href="connexion.php">connexion</a></li>';
                        echo '<li class="nav-item "><a class="text-white nav-item nav-link <?php classactive($_SERVER[\'SCRIPT_FILENAME\'], \'C:/xampp/htdocs/PHP/xXx/inscription.php\') ?>" href="inscription.php">inscription</a></li>';
                        
                    }

                    
                ?>   
                

                <li class="nav-item ">
                    <a class="text-white nav-item nav-link <?php classactive($_SERVER['SCRIPT_FILENAME'], 'C:/xampp/htdocs/PHP/xXx/reseausociaux.php') ?>" href="reseausociaux.php">Me contacter</a>
                </li>

            </ul>
        </nav>

        <div id="app">
            <div class="container mt-3 mb-3" id="objP">
