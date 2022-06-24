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
        <div class="deconnexion">
            <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=deconnexion'?>">
             <button> Deconnexion </button>
            </a>
        </div>
    </header>
    <div class="corps">
    <div class="liste">
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=jouer'?>">
               jouer au jeux
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view='?>">
               les  cinq meilleurs score
            </a>
         
     </div>
           <form action="">
               <P class="entete">LISTE DES QUESTIONS</P>
    
        </form>
    </div>



    </div>
</body>
</html>