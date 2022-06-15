<?php 
if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "connexion") {
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        }   /* elseif ($_GET['view'] == "inscription") {
            require_once(ROUTE_DIR.'vue/security/inscription.html.php');
        } */ elseif ($_GET['view'] == "deconnexion") {
            require_once(ROUTE_DIR.'vue/security/connexion.html.php');
        } 
         
} /* elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'table_multiplication') {
            $arrayError = [];
            valid_champ($arrayError, $_POST['nombre'], 'error');

            if (empty($arrayError)) {
                $nombre = intval($_POST['nombre']);

                $table = [];
                for ($i=1; $i <= $nombre; $i++) { 
                    $table[$i.''] = [];
                    array_push($table[$i.''], ($i * 1));
                    array_push($table[$i.''], ($i * 2));
                    array_push($table[$i.''], ($i * 3));
                    array_push($table[$i.''], ($i * 4));
                    array_push($table[$i.''], ($i * 5));
                    array_push($table[$i.''], ($i * 6));
                    array_push($table[$i.''], ($i * 7));
                    array_push($table[$i.''], ($i * 8));
                    array_push($table[$i.''], ($i * 9));
                    array_push($table[$i.''], ($i * 10));
                }

                $_SESSION['table_multiplication'] = $table;
            } else {
                $_SESSION['arrayError'] = $arrayError;
            }
            
            header("location:".WEB_ROUTE."?controller=formController&view=exercice1");

        } elseif ($_POST['action'] == 'nombre.premier') {
            
            $nombre = intval($_POST["nombre"]);
            $_SESSION["result"] = is_nombre_premier($nombre);

            header("location:".WEB_ROUTE."?controller=formController&view=exercice2");
        }
    }
}

function is_nombre_premier(int $nombre) {
    if ($nombre == 1) {
        return false;
    }

    for ($i=2; $i <= $nombre/2; $i++) { 
        if ($nombre % $i == 0) {
            return false;
        }
    }

    return true;
}
 */
}
?>