
 <?php
function est_vide($valeur) {
    return empty($valeur);
}

function est_entier($valeur) {
    return is_numeric($valeur);
}

//FONCTION VALIDE CHAMP


function valid_champ(array $arrayError, $str, string $key) {
    $valeur= str_replace(" ","",$str);
    if (est_vide($valeur)) {
        $arrayError[$key] = "Champ obligatoire";
    } else if (!est_entier($valeur)) {
        $arrayError[$key] = "Veuillez saisir un nombre";
    }elseif($_POST['password']!= $_POST['confirmpassword']){
        $arrayError[$key]="mot de passe doit être identique";
    }
}

function valid_champ_user(array &$arrayError, $str, string $key) {
    $valeur= str_replace(" ","",$str);
    if (est_vide($valeur)) {
        $arrayError[$key] = "Champ obligatoire";
    }
}
function validation_champs(  $valeur, string  $key,  &$arrayError,$str){
    $valeur= str_replace(" ","",$str);
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif(!is_numeric($valeur)){
        $arrayError[$key] = "Ce champ doit être numérique";

    }
}
//FONCTION MESSAGE-D'ERREUR


function type_reponse( $valeur, string  $key,  &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "Veuillez donner le type de réponse";
    }   
}
function reponse( $valeur, string  $key,  &$arrayError, $str){
    $valeur= str_replace(" ","",$str);
    if(est_vide($valeur)) {
        $arrayError[$key] = "Veuillez donner la réponse";
    }   
}
function valid_input(array $arrayError, $str, string $key){
    $valeur= str_replace(" ","",$str);
    if (empty($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif($valeur.trim(" ") == ""){
        $arrayError[$key] = "Ce champ est obligatoire";

    }
}
function valid_point(array $arrayError, $valeur, string $key){
   
    if (empty($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif($valeur<= 0){
        $arrayError[$key] = "Veiller saisir des nombres positifs";

    }
}

function valid_nbr_reponse(array $arrayError, $valeur, string $key){
   
    if (empty($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif($valeur<= 0){
        $arrayError[$key] = "Veiller saisir des nombres positifs";

    }
}

//FONCTION PAGINATION

function nombrePageTotal($array, $nombreElement):int{
    $nombrePage=0;
    $longArray= count($array);
    if($longArray % $nombreElement == 0){
        $nombrePage = $longArray / $nombreElement;

    }
    return $nombrePage;
}
function pagination($array, $nombreElement, $page):array{
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page*$nombreElement;
    for($i = $indiceDepart; $i< $limitElement; $i++){
        if($i >= count($array)) {
            return $arrayElement;
        } else{
            $arrayElement[] = $arrayElement;
        }
    }
    return $arrayElement;
}
function countpage(int $taillepage, array $arrayPersonne){
    $nbrPage= intdiv(count($arrayPersonne), $taillepage);
    if(count($arrayPersonne)% $taillepage !=0){
        $nbrPage=$nbrPage+1;
    }
    return $nbrPage;
}





?>
