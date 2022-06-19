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
    <link rel="stylesheet" href="css/connexion.css">
    <title>Document</title>

</head>
<body>
    <body>
    <header>
    <div class="logo">
       <img src="images/photo.webp" alt="">
     </div>
    <nav>
        <p class="jouer">le plaisir de jouer</p>
    </nav>
</header>
<form action="<?php echo WEB_ROUTE ?>" method="POST">
 <input type="hidden" name="controller" value="securityController">
 <input type="hidden" name="action" value="connexion">
    <div class="tete">
        <h2>SE CONNECTER</h2>
    </div>
<input type="text" name="email" placeholder="Email"><br>
<span><?php echo isset($arrayError['email']) ? $arrayError['email'] : '' ?></span><br>
<input type="password" name="password" placeholder="Mot de Pass"><br>
<span><?php echo isset($arrayError['password']) ? $arrayError['password'] : '' ?></span><br>
<a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_question' ?>">
 <button name="valide">Connexion</button>
  </a> S'inscrire pour jouer <br>
<a href="<?php echo WEB_ROUTE.'?controller=securityController&view=creer_compte'?>">
    <p class="Creer_un_compte">Creer un compte </p> 
 </a>
</form>
    
</body>
</html>