<?php
if($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == "creerquestion") {
            require_once(ROUTE_DIR.'vue/security/Creer.question.html.php');
        }/* elseif ($_GET['view'] == "list.question") {
            $Questions= get_list_question();
            require_once(ROUTE_DIR.'vue/security/affiche_question.html.php');
        } */ elseif ($_GET['view'] == "list.question") {
            $page=1;
            if(isset($_GET['page'])){
                $page = intval($_GET['page']);

            }
            $Questions = get_list_question();
            $totalPage= countpage(4, $Questions);
            $Questions= getListToDisplay($Questions, $page, 4);
            require_once(ROUTE_DIR.'vue/security/affiche_question.html.php');
        }
    }
}elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if ($_POST['action']=="CREER") {
        unset($_POST['controller']);
        unset($_POST['action']);
        Questionnaire($_POST);
    }
}
function Questionnaire($questionnaire):void{
    $arrayError=array();
    extract($questionnaire);
    $newquestion=[];
    $questionnaire['id']=uniqid();
    AddQuestion($questionnaire);
   /*  header("location:".WEB_ROUTE."?controller=Controller&view=liste_question") ; */
 


    valid_input($arrayError, $quest, 'question');
   /*  valid_input($arrayError, $typedequestion, 'typeQuestion');
    valid_input($arrayError, $reponse, 'Reponse');
    valid_input($arrayError, $numero, 'numero'); */
    valid_point($arrayError, $numero, 'numero');
    valid_nbr_reponse($arrayError, 'Reponse' ,$reponse);
    type_reponse($arrayError, $typedequestion , 'typeQuestion');



    if(!isset($arrayError)){
         if ($result != null) {
             $_SESSION['questionAJOUTER'] = $result;

    } if($data['id'] != ""){
        modificationQuestion($data);
    }else{
        $newquestion = [
            "question" => $quest,
            "typeQuestion" => $typedequestion,
            "Reponse" => [
                $reponse
            ],
            "bonneReponse" => [
                $bonneReponse,

            ],
            "numero" => $numb,
            "id" => uniqid()
        ];
    }
    AddQuestion($newquestion);
    $_SESSION['questionAJOUTER']=$Question;
header("location:".WEB_ROUTE."?controller=questionController&view=list.question") ;

}else{
    header("location:".WEB_ROUTE."?controller=questionController&view=creerquestion") ;
}
}




?>