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
           <form class="form" action="<?php echo WEB_ROUTE ?>" method="post">
           <input type="hidden" name="controller" value="questionController">
           <input type="hidden" name="action" value="list_question">
               <P class="entete">LISTE DES QUESTIONS</P>
               <div class="B">
            
            <h1>Nombre de question/jeu</h1>
            <input type="number" value="5">
        
    </div>
    <div class="container">

        <div class="menu">
                <center><div class="cercle">
                    <img src="public/images/avatar-g74e1bf273_1280.png" alt="">
                </div></center>
                <center><h4>Joueur</h4></center>
                <div class="text">
                
<!--                     <div class="admin"><a href="<?php //echo WEB_ROUTE.'?controller=questionController&view=list.question' ?>"> <h3>Listes Questions</h3></a></div>
                <a href="<?php //echo WEB_ROUTE.'?controller=securityController&view=admin' ?>"><h3>Creer admin</h3></a>
                <a href="<?php //echo WEB_ROUTE.'?controller=securityController&view=list.user' ?>"><h3>Listes joueurs</h3></a>
                <a href="<?php //echo WEB_ROUTE.'?controller=securityController&view=list.users' ?>"><h3>Listes admins</h3></a>
                <a href="<?php //echo WEB_ROUTE.'?controller=securityController&view=question' ?>"> <h3>Créer Questions</h3></a> -->
                </div>
        </div>
            <div class="ligne">
              
            </div>
            <div class="page">

            <?php foreach ($Questions as $key => $val) : ?>

<h3> <?php echo $key + 1, "." . $val['question']; ?></h3>

<?php foreach ($val['reponse'] as $reps => $rep) : ?>
<?php if ($val["typeQuestion"] == "multiple") : ?>
    <input type="checkbox"><?php echo $rep  ?><br>
   
<?php elseif ($val["typeQuestion"] == "unique") : ?>
    <input type="radio" name="choix"><?php echo $rep ?> <br>
<?php elseif ($val["typeQuestion"] == "simple") : ?>
    <input type="text" value="<?php echo $rep ?> "><br>

<?php endif; ?>

<?php endforeach; ?>

<?php endforeach; ?>


            </div>
       

            </div> 
            <div class="pagination">
        <?php for($i =1; $i<= $totalPage; $i++): ?>
            <a href="<?=WEB_ROUTE.'?controller=questionController&view=list.question&page'.$i. '' ?>">
                <button class="lien" ><?php echo $i; ?></button>
            </a>

            <?php endfor; ?>
            
        </div>
        </form>
    </div>



    </div>
</body>
</html>