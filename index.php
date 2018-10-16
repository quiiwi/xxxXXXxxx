<?php
    require_once 'inc/init.inc.php';
    require_once 'inc/haut.inc.php';
?>

<br>
<h1 style="border: auto;">Bonjour, je suis Quiiwi ! </h1>
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
                <!-- <p>Yolooooooo</p> -->
            </div>
        </div>

        <div class="carousel-item">
            <a href="experiencespro.php"><img class="d-block w-100" src="img/2.jpg" alt="Second slide"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
                <h5>EXPERIENCE PROFESSIONNELLE</h5>
                <!-- <p>Mon passé</p> -->
            </div>
        </div>

        <div class="carousel-item">
            <a href="inscription.php"><img class="d-block w-100" src="img/3.jpg" alt="Third slide"></a>
            <div class="carousel-caption-fluid d-none d-md-block bg-warning yolooww">
               <h5>INSCRIPTION</h5>
               <!-- <p>Tu veux nous rejoindre?</p> -->
            </div>
        </div>

    </div>
    <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->
</div>

<?php

    require_once 'inc/bas.inc.php';
?>