<?php 
 if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "list.user") {
            $users = get_list_user();
            require_once(ROUTE_DIR.'vue/security/liste_joueurs.html.php');
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        
    }
} 
if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "add.user") {
            require_once(ROUTE_DIR.'vue/security/creer_admin.html.php');
        } elseif ($_GET['view'] == "list.user") {
            $users = get_list_user();
            require_once(ROUTE_DIR.'vue/security/liste_joueurs.html.php');
        }
         elseif ($_GET['view'] == "delete") {
            if(isset($_GET['id'])){
             delete($_GET['id']);
            header("location:".WEB_ROUTE."?controller=userController&view=list.user");
            } 
        }elseif ($_GET['view'] == "edit") {
            $user=get_user_by_id($_GET['id']);
            require_once(ROUTE_DIR.'vue/security/inscription.html.php');
            header("location:".WEB_ROUTE."?controller=userController&view=add.user");
        }
      /*   elseif
            ($_GET['view']== "inscrire"){
                require_once(ROUTE_DIR.'vue/add_user.html.php');
                
            header("location:".WEB_ROUTE."?controller=userController&view=add.user");       
        }  */
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "inscription") {
            $arrayError = [];
            valid_champ_user($arrayError, $_POST['nom'], 'nom');
            valid_champ_user($arrayError, $_POST['prenom'], 'prenom');
            valid_champ_user($arrayError, $_POST['telephone'], 'telephone');
            valid_champ_user($arrayError, $_POST['email'], 'email');
            valid_champ_user($arrayError, $_POST['password'], 'password');
            valid_champ_user($arrayError, $_POST['confirmPassword'], 'confirmPassword');
            if (empty($arrayError)) {
                
                $user = [
                    "nom" => $_POST['nom'],
                    "prenom" => $_POST['prenom'],
                    "telephone" => $_POST['telephone'],
                    "email" => $_POST['email'],
                    "password" => $_POST['password'],
                ];

                addUser($user);
               
            } else {
                $_SESSION['arrayError'] = $arrayError;
            }

            header("location:".WEB_ROUTE."?controller=userController&view=inscription");
        }
    }
}


?>
