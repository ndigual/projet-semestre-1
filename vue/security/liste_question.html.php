<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/liste_question.css">
  
</head>
<body>
    <header>
        <div class="logo">
           <img src="images/photo.webp" alt="">
         </div>
        <nav>
            <p class="jouer">le plaisir de jouer</p>
        </nav>
    </header>
    <a href="<?php echo WEB_ROUTE.'?controller=formController&view=deconnexion'?>">
        <button name="deconnexion" class="deconnect"> Deconnexion </button>
     </a>
    <div class="corps">
       <div class="liste">
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_question'?>">
               liste Questions
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=creer_admin'?>">
               Créer Admin
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_joueurs'?>">
               liste Joueurs
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=creer_question'?>">
               Créer Questions
            </a>
       </div>
           <form action="">
            <div></div>
           
               <P class="entete">LISTE DES QUESTIONS</P>
               <form action="">
               <div class="question">
               <h4>1.quelles sont les langage de programmation</h4> <br>
            <input type="checkbox"> java <br>
            <input type="checkbox"> html <br>
            <input type="checkbox"> php  <br>

            <h4>2.Où est né l' informatique</h4> <br> 
            <input type="radio"> Amerique <br>   
            <input type="radio"> Afrique  <br> 
            <h4>Qui est le PDG de facebook</h4> <br>
            <input type="text"><br> 
            <h4>3.Choisirsez les animaux domestique</h4> <br>  
            <input type="checkbox">cheval <br>
            <input type="checkbox"> chamau <br>
            <input type="checkbox"> lion <br> 
            <input type="checkbox"> chevre<br> 
            <input type="checkbox"> leopare <br> 
            <input type="checkbox"> vacher <br> 
            <input type="checkbox"> elephant <br> 
            </div>
        </form>
    </div>



    </div>
</body>
</html>