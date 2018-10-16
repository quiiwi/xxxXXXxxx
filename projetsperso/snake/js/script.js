    //LES VARIABLES

    $(function(){

    var snake = document.querySelector('#snake');
    var grillage = document.querySelector('#grillage');
        
    var directionHB = 0;
    var directionGD = 0;
    var deplacementBas = '↓';
    var deplacementHaut = '↑';
    var deplacementGauche = '←';
    var deplacementDroite = '→';
    var vers = deplacementDroite;
    var Q = 15;
    var xFinal, yFinal;
    var score = 0;
    // var vitesseDuJeu = 100;
    
    var positionDesQueuesGD = [
        
    ];
    var positionDesQueuesHB = [

    ];

    var vitesse = 50;

    

    //LA FONCTION PRINCIPALE
    document.querySelector('#lancer').addEventListener('click', function() {

        //LA FONCTION POUR BOUGER LE SERPENT
        function moveGlob(){ 
            // console.log(vitesseDuJeu);
            // console.log(vers,directionHB,directionGD);

            positionDesQueuesGD.push(directionGD);
            positionDesQueuesHB.push(directionHB);

            if (vers === deplacementBas){ 
                directionHB += +5;
                snake.style.top = directionHB + 'px';
            } else if (vers === deplacementGauche){
                directionGD += -5;
                snake.style.left = directionGD +'px';
            } else if (vers === deplacementDroite){
                directionGD += +5;
                snake.style.left = directionGD + 'px';
            }else if (vers === deplacementHaut){
                directionHB += -5;
                snake.style.top = directionHB + 'px';
            }
            
            if(directionHB>=500 || directionGD>=500){
                clearInterval(vitessDebutant); //lorsque je sors de la grille de jeu la boucle principale s'arrête
                // clearInterval(vitessPro);
                // clearInterval(vitessMaster);
                alert('PERDU');

            }
            if(directionHB<0 || directionGD<0){
                clearInterval(vitessDebutant); //lorsque je sors de la grille de jeu la boucle principale s'arrête
                // clearInterval(vitessPro);
                // clearInterval(vitessMaster);
                alert('PERDU');
            }

            if(directionHB == yFinal && directionGD == xFinal){

                creerpomme();

                Q += 10;

                $('.pomme:first').remove();

                score += 1000;

        

            }

            checkscore();

            creerqueue();

            supprimequeue();

            checkqueue();

            $('#score').text(score);

            

            // console.log(score);
        }
        
        function checkscore(){
            if(score==1000){
                

            }
        }

/* 
        if (score == 0){
            
            mavitessdebutant();
                
        } else if(score == 1000){
            
            mavitesspro();

        } else if(score >= 2000){

            mavitessmaster();
            
        } */
        
/* 
        function mavitessdebutant(){ */
 
       /*  }
        
        function mavitesspro(){
            clearInterval(vitessDebutant);

            var vitessPro = setInterval(moveGlob,50);
        }
        
        function mavitessmaster(){
            clearInterval(vitessPro);
            var vitessMaster = setInterval(moveGlob,10);
        }
         */

     

        // function checkqueue(){
            
        //     // 
        //     if(Q==1){
        //        
        //         
                
        //     }
        // }
        

        



        //LA FONCTION CREER LA QUEUE DU SERPENT
        function creerqueue(){ //ma fonction qui créer une .queue
            var newDiv = document.createElement('div'); // créer une nouvelle div
            newDiv.setAttribute('class','queue'); //lui donner une class .queue
            newDiv.style.left = directionGD + 'px' ; //lui attribue la position par rapport au left
            newDiv.style.top = directionHB + 'px' ; //lui attribue la position par rapport au top

            grillage.appendChild(newDiv); //indique que newdiv(".queue") est un enfant de #grillage


            var currentDiv = document.getElementById('.queue');
            document.body.insertBefore(grillage,currentDiv);
        }

        document.querySelector('#stopper').addEventListener('click', function() {
            clearInterval(vitessDebutant); // le bouton pour arrêter le jeu
            // clearInterval(vitessPro);
            // clearInterval(vitessMaster);
        });


        //LA FONCTION SUPPRIMER LA QUEUE DU SERPENT
        function supprimequeue(){
            Q--; //Q est initialement == à 10, à chaque tour de boucle Q - 1 et lorsque Q == 1 on supprime la première div qui a été crée
            // console.log(Q);
            // console.log(positionDesQueuesHB,positionDesQueuesGD);
            // console.log(directionHB,directionGD);

            if(Q==1){
                Q++;
                positionDesQueuesGD.shift();
                positionDesQueuesHB.shift(); //supprime la première position de queue

                // console.log('je dois supprimer, normalement'); 
                $('.queue:first').remove(); // C'est plus facile en jQuery...... 
            }
        }

        function checkqueue(){

            for(var i = 0; i < positionDesQueuesGD.length; i++){
    
                // console.log('aa');
    
                if(positionDesQueuesGD[i] == directionGD && positionDesQueuesHB[i] == directionHB){
                    clearInterval(vitessDebutant);
                    alert('PERDU');
                }
            }
        }

        var vitessDebutant = setInterval(moveGlob, 50);

       
    });
    
 


    // EVENEMENTS AUX TOUCHES DU CLAVIER
    document.onkeydown = function(e){
        switch(e.keyCode){
            case 37: //touche gauche
                if(vers == deplacementHaut||vers ==deplacementBas||vers==deplacementGauche){ // la touche gauche ne s'active que lorsque le serpent se déplace vers le haut/bas/gauche
                    vers = deplacementGauche;
                }else{vers=deplacementDroite};
            break;
            case 38: //touche haut
                if(vers== deplacementGauche||vers==deplacementDroite||vers==deplacementHaut){ // la touche haut ne s'active que lorsque le serpent se déplace vers le haut/droite/gauche
                vers = deplacementHaut;
                }else{vers=deplacementBas}
            break;
            case 39: //touche droite
                if(vers==deplacementBas||vers==deplacementHaut||vers==deplacementDroite){ // la touche droite ne s'active que lorsque le serpent se déplace vers le haut/droite/bas
                vers = deplacementDroite;
                }else{vers=deplacementGauche}
            break;
            case 40: //touche bas
                if(vers==deplacementDroite||vers==deplacementGauche||vers==deplacementBas){ // la touche bas ne s'active que lorsque le serpent se déplace vers le gauche/droite/bas
                vers = deplacementBas;
                }else{ver= deplacementHaut};
            break;
        }
    }


    function creerpomme(){
        var random = Math.random()*1000000000;
        var randomEntier = random | 0;
        randomEntierString = randomEntier.toString();
        // console.log(random);
        // console.log(randomEntier);
        // console.log(randomEntierString[3],randomEntierString[4],randomEntierString[5],randomEntierString[6]);

        var x1 = randomEntierString[3];
        var x2 = randomEntierString[4];

        var y1 = randomEntierString[5];
        var y2 = randomEntierString[6];
        // console.log(x1,x2,y1,y2);

        var x = x1 + x2;
        // console.log(x);
        var y = y1 + y2;
        // console.log(y);

        xFinal = x*5;
        yFinal = y*5;
       


        var newDiv2 = document.createElement('div'); // créer une nouvelle div
        newDiv2.setAttribute('class','pomme'); //lui donner une class .queue
        newDiv2.style.left = xFinal + 'px' ; //lui attribue la position par rapport au left
        newDiv2.style.top = yFinal + 'px' ; //lui attribue la position par rapport au top

        grillage.appendChild(newDiv2); //indique que newdiv(".queue") est un enfant de #grillage


        var currentDiv = document.getElementById('.queue');
        document.body.insertBefore(grillage,currentDiv);

    };
    
    creerpomme();
});


    //Script by Quiiwi