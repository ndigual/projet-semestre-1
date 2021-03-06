<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/liste_joueurs.css">
 
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
    <input type="hidden" name="controller" value="securityController">
    <input type="hidden" name="action" value="list.user">
       <div class="liste">
       <a href="<?php echo WEB_ROUTE.'?controller=questionController&view=list.question'?>">
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
    <div class="joueurs">  
      <div>  
        <p class="entete">LISTE DES JOUEURS PAR SCORE</p><br>
       <?php if(empty($users)):?>
        <h1>Aucun résultat</h1>
      <?php endif;?> 
         <?php if(!empty($users)):?>
            <table border="2">
                <tr class="header">
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Téléphone</td>
                    <td>score</td>
                </tr>
                <?php foreach ($users as $key => $val):?>
                    <?php if($val['role']=="role_joueur"):?>
                    <tr>
                        <td ><?php echo $val['nom'];?></td>
                        <td ><?php echo $val['prenom'];?></td>
                        <td ><?php echo $val['telephone'];?></td>
                    </tr>
                    <?php endif;?>
                <?php endforeach;?>
            </table>
    <?php endif;?>
    </div>   
    </div>
    </div>   

    </div>
</body>
</html>