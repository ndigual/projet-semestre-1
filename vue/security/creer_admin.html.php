<?php
$arrayError = [];


if (isset($_SESSION['arrayError'])) {
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/creer_admin.css">
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
       <form action=<?php echo WEB_ROUTE ?> method="POST">
       <input type="hidden" name="controller" value="securityController">
      <input type="hidden" name="action" value="admin">
      <input type="hidden" name="controller" value="userController">
      <input type="hidden" name="action" value="add.user">
          <p class="entete">S'INSCRIRE</p><BR>
        <input type="text" name="nom" placeholder="Nom"><br>
        <span><?php echo isset($arrayError['nom']) ? $arrayError['nom'] : '' ?></span>
        <input type="text" name="prenom" placeholder="Prenom"><br>
        <span><?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ?></span>
        <input type="text" name="email" placeholder="Email"><br>
        <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span>
        <input type="password" name="password" placeholder="Mot de Pass"><br>
        <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
        <input type="password" name="confirmPassword" placeholder="Valide Mot de Pass"><br>
        <span><?php echo isset($arrayError['confirmPassword']) ? $arrayError['confirmPassword'] : '' ?></span>
        <input type="submit" class="envoi"> 
    
       </form>

    </div>
</body>
</html>