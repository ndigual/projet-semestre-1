<?php 

if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "connexion") {
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        }   elseif ($_GET['view'] == "deconnexion") {
            destroy_session();
            require_once(ROUTE_DIR.'vue/security/deconnexion.html.php');
        }  elseif ($_GET['view'] == "liste_question") {
            require_once(ROUTE_DIR.'vue/security/liste_question.html.php');
        } elseif ($_GET['view'] == "creer_admin") {
            require_once(ROUTE_DIR.'vue/security/creer_admin.html.php');
        } elseif ($_GET['view'] == "creer_question") {
            require_once(ROUTE_DIR.'vue/security/creer_question.html.php');
        } elseif ($_GET['view'] == "liste_joueurs") {
                 $users = get_list_user();
            require_once(ROUTE_DIR.'vue/security/liste_joueurs.html.php');
        }  elseif ($_GET['view'] == "liste_admin") {
                $users = get_list_admin();
           require_once(ROUTE_DIR.'vue/security/liste_admin.html.php');
        }elseif ($_GET['view'] == "inscription") {
            require_once(ROUTE_DIR.'vue/security/inscription.html.php');
        } elseif ($_GET['view'] == "creer_compte") {
          require_once(ROUTE_DIR.'vue/security/inscription.html.php');
        } elseif ($_GET['view'] == "admin") {
          require_once(ROUTE_DIR.'vue/security/creer_admin.html.php');
        }  elseif($_GET['view'] == "edit"){
            $user=get_user_by_id ($_GET['id']);
            require_once(ROUTE_DIR.'vue/security/creer_admin.html.php');
          } 
    }
}  elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (isset($_POST['action'])) {
        //var_dump($_POST);die;
       if ($_POST['action'] == "connexion") {
          connexion($_POST);
       } elseif ($_POST['action'] == "inscription") {    
           inscription($_POST,$_FILES);
       }elseif ($_POST['action'] == "admin") {    
        inscription_admin($_POST ,$_FILES);
    }
    
    }
}


function connexion($data) {
    $arrayError = [];
    extract($data);
    
    valid_champ_user($arrayError, $email, 'email');
    valid_champ_user($arrayError, $password, 'password');
    
    
    if (empty($arrayError)) {
        
        $result = login_password_exist($email, $password);
        
        if ($result != null) {
            $_SESSION['userConnected'] = $result;
            header("location:".WEB_ROUTE."?controller=securityController&view=admin");
            
        } else {
            $arrayError['error'] = "Email ou Mot de passe incorrect";
            $_SESSION['arrayError'] = $arrayError;
            header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
        }
    } else {
        $_SESSION['arrayError'] = $arrayError;
        header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
    }

    
}

function inscription($inscription) {
    $arrayError = [];
    extract($inscription);
    
            valid_champ_user($arrayError, $nom, 'nom');
            valid_champ_user($arrayError, $prenom, 'prenom');
            valid_champ_user($arrayError, $telephone, 'telephone');
            valid_champ_user($arrayError, $email, 'email');
            valid_champ_user($arrayError, $password, 'password');
            valid_champ_user($arrayError, $confirmPassword, 'confirmPassword');
            if($password !=$confirmPassword){
                $arrayError['confirmPassword']="saisir le bon mot de passe";
            }
            if($password != "password") 
            if (empty($arrayError)) {
                
                $user = [
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "telephone" => $telephone,
                    "email" => $email,
                    "password" => $password,
                    "role" => "role_joueur"

                ];
                
                addUser($user);
                $_SESSION['userConnected'] = $user;
                header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
               
            } else {
                $_SESSION['arrayError'] = $arrayError;
                header("location:".WEB_ROUTE."?controller=securityController&view=inscription");
            }

            
}
function inscription_admin($admin) {
    $arrayError = [];
    extract($admin);
    
            valid_champ_user($arrayError, $nom, 'nom');
            valid_champ_user($arrayError, $prenom, 'prenom');
            valid_champ_user($arrayError, $email, 'email');
            valid_champ_user($arrayError, $password, 'password');
            valid_champ_user($arrayError, $confirmPassword, 'confirmPassword');
            if($password !=$confirmPassword){
                $arrayError['confirmPassword']="saisir le bon mot de passe";
            }
            if (empty($arrayError)) {
                
                $user = [
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "telephone" => $telephone,
                    "email" => $email,
                    "password" => $password,
                    "role" => "role_admin",

                ];
                
                addUser($user);
                $_SESSION['userConnected'] = $user;
                header("location:".WEB_ROUTE."?controller=securityController&view=liste_admin");
               
            } else {
                $_SESSION['arrayError'] = $arrayError;
                header("location:".WEB_ROUTE."?controller=securityController&view=admin");
            }

            
}
function deconnexion(){
    unset($_SESSION['userConnected']);
    header("location:".WEB_ROUTE."?controller=securityController&view=connexion");
}


?>
