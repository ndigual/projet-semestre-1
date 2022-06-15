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
    <link rel="stylesheet" href="css/inscrire.css">
    <title>Document</title>
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
    <form action=<?php echo WEB_ROUTE ?> method="POST">
    <input type="hidden" name="controller" value="securityController">
      <input type="hidden" name="action" value="inscription">
        <div class="tete">
        <h2>SE CONNECTER</h2>
      </div>
     
           <input type="text" name="nom" placeholder="Nom"><br>
           <span><?php echo isset($arrayError['nom']) ? $arrayError['nom'] : '' ?></span>
        
           <input type="text" name="prenom" placeholder="Prenom"><br>
           <span><?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ?></span>
        
           <input type="text" name="telephone" placeholder="Telephone"><br>
           <span><?php echo isset($arrayError['telephone']) ? $arrayError['telephone'] : '' ?></span>
        
           <input type="text" name="email" placeholder="Email"><br>
           <span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span><br>
        
            <input type="password" name="password" placeholder="Mot de Pass"><br>
            <span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span>
        
           <input type="password" name="confirmPassword" placeholder="Valide Mot de Pass"><br>
           <span><?php echo isset($arrayError['confirmPassword']) ? $arrayError['confirmPassword'] : '' ?></span>
        <div>
            <button>Créer Compte</button> 
        </div>
        <a href="<?php echo WEB_ROUTE.'?controller=formController&view=connexion' ?>">
            <p class="inscription"> Connexion </p>
       </a>

    </form>
</body>
</html>