function error(){
var nom=document.getElementById("nom");
var prenom=document.getElementById("prenom");
var suggest=document.getElementById("suggest");
var mail=document.getElementById("mail");

if (mail.value==""){
    mail.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_mail').innerHTML="Doit être rempli !";
}
else if(mail.value!="") {
    mail.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_mail').innerHTML="";
}
if (nom.value==""){
    nom.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_nom').innerHTML="Doit être rempli !";
}
else if(nom.value!="") {
    nom.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_nom').innerHTML="";
}
if (prenom.value==""){
    prenom.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_prenom').innerHTML="Doit être rempli !";
}
else if(prenom.value!="") {
    prenom.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_prenom').innerHTML="";
}
if (suggest.value==""){
    suggest.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_suggest').innerHTML="Doit être rempli !";
}
else if(suggest.value!="") {
    suggest.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_suggest').innerHTML="";
}
if (nom.value=="" ||  prenom.value==""  ||  suggest.value=="" ){
    document.getElementById('envoyer').setAttribute("disabled",true); 
}

}




