<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/creer_question.css">

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
           <a href="<?php echo WEB_ROUTE.'?controller=securityController&view=liste_question'?>">
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
       <form action="">
               <P class="entete">PARAMETRER VOTRE QUIZZ</P>
               <form action="">
                <div class="parametre">
                     <label for="">Questions</label>
                     <textarea name="" id="" cols="30" rows="10"></textarea><br>
                 </div>
                 <div class="parametre">
                     <label for="">Nobre de point</label>
                     <input type="number" class="point"><br>
                 </div>
                  <div class="parametre">
                      <label for="">Type de Qustion</label><br>
                      <select name="" id="">
                        <option value="">Donnez le type de reponse</option>
                        <option value="Simple"> Reponse Simple</option>
                        <option value="unique">Reponse unique</option>
                        <option value="mulpiple"> Reponse a Choix multiple</option>
                      </select>
                 </div>
                 <button type="submit" class="butonQuestion">Enregistrer</button>
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