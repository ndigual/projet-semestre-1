<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/creer_question.css">

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
    <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=deconnexion'?>">
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
            <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_admin'?>">
               liste Admin
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_joueurs'?>">
               liste Joueurs
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=creer_question'?>">
               Créer Questions
            </a>
       </div>
       <form action="">
               <P class="entete">PARAMETRER VOTRE QUIZZ</P>
               <form action="">
                <div class="parametre">
                     <label for="">Questions</label>
                     <textarea name="" id="" cols="30" rows="10"></textarea><br>
                 </div>
                 <div class="parametre">
                     <label for="">Nobre de point</label>
                     <input type="number" class="point"><br>
                 </div>
                  <div class="parametre">
                      <label for="">Type de Qustion</label><br>
                      <select name="" id="">
                        <option value="">Donnez le type de reponse</option>
                        <option value="Simple"> Reponse Simple</option>
                        <option value="unique">Reponse unique</option>
                        <option value="mulpiple"> Reponse a Choix multiple</option>
                      </select>
                 </div>
        </form>
    </div>


    </div>
</body>
</html>