<?php 
if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "connexion") {
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        }  elseif ($_GET['view'] == "inscription") {
            require_once(ROUTE_DIR.'vue/security/inscription.html.php');
        }  elseif ($_GET['view'] == "deconnexion") {
            destroy_session();
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        }  
         
} 

}
?>