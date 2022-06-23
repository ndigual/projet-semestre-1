<?php
function AddQuestion(array $Question){
    $Questions= get_file_contentQuestion();
    if(!isset($Questions)){
        $Questions = [];
    } 
    array_push($Questions, $Question);
    ajouter_question($Questions);
    
}
function get_list_question(){
    $Questions= get_file_contentQuestion();
    if(!isset($Questions)){
        $Questions = [];
    } 
    return $Questions;
}

function find_question_id( $id):array{
    $json =file_get_contents(FILE_QUESTIONS);
    $arrayUser = json_decode($json , true);
    foreach($arrayUser as $user ){
      if ($user ['id'] == $id){
        return $user;
      }
    }
    return[];
  }
function get_file_contentQuestion(){
    $json= file_get_contents(ROUTE_DIR.'data/question.data.json');
    return json_decode($json, true);
}
function ajouter_Question(array $array){
    $json= json_encode($array);
    file_put_contents(ROUTE_DIR.'data/question.data.json',$json);

}
function modificationQuestion(array $Question){
    $modifQuestion= get_file_contentQuestion();
    foreach($modifQuestion as $key => $value){
        if($value['id'] == $Question['id']){
            $modifQuestion[$key]= $Question;
        }
    }
    ajouter_question($modifQuestion);
}

function getListToDisplay(array $arrayPersonne, $page, $taillePage){
    $indiceDepart = ($taillePage*$page) - $taillePage;
    $indiceArriver = $indiceDepart + $taillePage -1;
    $arrayPaged =[];

    for ($i=$indiceDepart; $i <count($arrayPersonne) ; $i++) { 
        if($indiceArriver < count($arrayPersonne)){
            array_push($arrayPaged, $arrayPersonne[$i]);
            if($i == $indiceArriver){
                break;
            }
        }else{
            array_push($arrayPaged, $arrayPersonne[$i]);
        }
    }
    return $arrayPaged;
}

?>