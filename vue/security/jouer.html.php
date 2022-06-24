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
    <a href="<?php echo WEB_ROUTE.'?controller=questionController&view=list.question'?>">
               Acceder aux Questions
            </a>
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view='?>">
               les  cinq meilleurs score
            </a>
         
     </div>
     <div class="form">
          
          <P class="entete">LISTE DES QUESTIONS</P>
          <div class="B">
       
       <h4>Nombre de question/jeu</h4>
       <input type="number" value="5">
   
</div>
<div class="container">


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
   </div>
</div>


</body>
</html>