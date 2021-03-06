 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/creer_question.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
       <a href="<?php echo WEB_ROUTE.'?controller=questionController&view=list.question'?>">
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
     
        </form>
 <form class="form" action="<?php echo WEB_ROUTE ?>" method="post" enctype="multipart/form-data">
   
    <input type="hidden" name="controller" value="questionController">
    <input type="hidden" name="action" value="creerquestion">
    <input type="hidden" name="action" value="CREER">

    <div class="titre">
            <center><h2>CREER  VOS  QUESTION</h2></center>
        </div>
       
        <div class="container">
        <div class="menu">
                    <center><div class="cercle">
                        <img src="../images/avatar-g74e1bf273_1280.png" alt="">
                    </div></center>
                    <center><h4>Admin</h4></center>
                 <!--    <div class="text">
                   
                    <a href="<?php echo WEB_ROUTE.'?controller=questionController&view=list.question' ?>"> <h3>Listes Questions</h3></a>
                    <a class="a" href="<?php echo WEB_ROUTE.'?controller=securityController&view=admin' ?>"><h3>Creer admin</h3></a>
                    <a class="a" href="<?php echo WEB_ROUTE.'?controller=securityController&view=list.user' ?>"><h3>Listes joueurs</h3></a>
                    <div class="admin"><a href="<?php echo WEB_ROUTE.'?controller=questionController&view=creerquestion' ?>"><h3>Créer Questions</h3></a></div>
                    <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=list.users' ?>"><h3>Listes admins</h3></a>
                    </div>
            </div> -->
                <div class="ligne">
                  
                </div>  
                <div class="page">
        

<div class="cadree">

    <div class="saisirdesquestions">

        Question: <textarea name="question" id="question" cols="40" rows="15"></textarea>

         <span><?php echo isset($arrayError['question']) ? $arrayError['question'] : '' ?></span> 

    </div><br>

    Nombre de point: <input type="number" name="numero" class="TAILLE" id="numero"><br><br>

    Type de réponses:

    <select name="typeQuestion" id="typeQuestion" class="TAILLE1">
    <option value="" >Choix réponse</option>
        <option value="simple" >Réponse simple</option>

        <option value="unique">Réponse unique</option>

        <option value="multiple">Réponse  multiple</option>

    </select>

    <span id="plus">

        <i class="fa-solid fa-plus breukh"></i><br><br>

    </span>

    <label id="error"></label>

    <div id="rep">

         

    </div>


</div>
 <button type="submit" class="butonQuestion"> 
    Enregistrer
 </button> 
  

</form>
        <style>
            .saisirdesquestions input {
             border: 2px solid #3792E5;

            width: 80%;
            height: 50px;
            margin-top:5%;
            border-radius: 10px 5px;
}

.TAILLE {
width: 80px;
height: 30px;
border: 2px solid black;
border-radius: 5px 5px;
}

.TAILLE1 {
border: 2px solid black;
height: 30px;
border-radius: 5px 5px;

}

.cadree {

width: 40em;

padding: 10px;
}
.TAILLE2{
border: 2px solid #3792E5;
width: 60%;
height: 20px;
border-radius: 10px 5px;
}
textarea{

width: 50%;
height: 80px;
border: 2px solid black;
margin-top: 3%;
border-radius: 5px 5px;
}
.butonQuestion{
background: black;
color: white;
}
.breukhnieule{
padding: 7px;
}
.breukh{
cursor: pointer;
background-color: black;
color: white;
padding: 3px;
border-radius:2px;
}
#repSimple, #repUnique , #repMultiple{
display: none;
}
.fa-trash{
color: red;

cursor: pointer;
}
.show{
display: block !important;
}
.vide{
color: red;
}
</style>
<script>
const rep = document.getElementById("rep")
const typeQuestion = document.getElementById("typeQuestion")
const plus = document.getElementById("plus")
const error = document.getElementById('error')
nbr = 0
plus.addEventListener("click",()=>{

nbr++
let div = document.createElement("div")
div.classList.add('breukhnieule')

typeQuestion.addEventListener("change" , ()=>{
nbr = 0
rep.removeChild(div)
})

if(typeQuestion.value == "simple") {

error.innerHTML = ""
if(nbr < 2){

div.innerHTML =

`
<label for="">Réponse ${nbr}</label>
<input type="text" name="reponse[]" class="TAILLE2">
<i class="fa fa-trash" ></i>
`
}else{

div.classList.remove('breukhnieule')

}

}else if(typeQuestion.value == "unique"){

error.innerHTML = ""
div.innerHTML =
`
<label for="">Réponse ${nbr}</label>
<input type="text" name="reponse[]" class="TAILLE2">
<input type="radio" name="bonneReponse[]" value="${nbr}">
<i class="fa fa-trash" id="delete"></i>
`
}else if (typeQuestion.value == "multiple") {

error.innerHTML = ""
div.innerHTML =
`
<label for="">Réponse ${nbr}</label>
<input type="text" name="reponse[]" class="TAILLE2">
<input type="checkbox" name="bonneReponse[]" value="${nbr}">
<i class="fa fa-trash"></i>

`
}else if (typeQuestion.value == "") {
nbr = 0
error.innerHTML = '<span class="vide">"Saisir la question!" </span>'
}

if (typeQuestion.value != "") {
rep.appendChild(div)
}

})

</script>
    


    </div>
</body>
</html> 