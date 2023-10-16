function error(){
var nom=document.getElementById("nom");
var prenom=document.getElementById("prenom");
var age=document.getElementById("age");
var mail=document.getElementById("mail");
var region=document.getElementById("region");
var cas=document.getElementById("cas");
var tel=document.getElementById("tel");
if (cas.value==""){
    cas.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_cas').innerHTML="Doit être rempli !";
}
else if(cas.value!="") {
    cas.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_cas').innerHTML="";
}
if (region.value==""){
    region.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_region').innerHTML="Doit être rempli !";
}
else if(region.value!="") {
    region.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_region').innerHTML="";
}
if (tel.value==""){
    tel.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_tel').innerHTML="Doit être rempli !";
}
if (tel.value.lenght!=9){
    tel.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_tel').innerHTML="Non correct !";
}
else if(tel.value!="") {
    tel.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_tel').innerHTML="";
}
if (age.value==""){
    age.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
    document.getElementById('envoyer').setAttribute("disabled",true);
    document.getElementById('error_age').innerHTML="Doit être rempli !";
}
else if(age.value!="") {
    age.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
    document.getElementById('envoyer').removeAttribute("disabled");
    document.getElementById('error_age').innerHTML="";
}

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

if (nom.value=="" ||  prenom.value==""  ||  age.value=="" ||  tel.value==""  ||  region.value=="" ||  cas.value=="" ){
    document.getElementById('envoyer').setAttribute("disabled",true); 
}

}




