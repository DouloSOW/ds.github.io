// JavaScript Document
function deconnexion()
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("quitter").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("POST", "TRAITEMENT_PHP/deconnexion.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send();
	}


	function error(){
		var cas_testes=document.getElementById("cas_testes");
		var cas_positifs=document.getElementById("cas_positifs");
		var cas_importes=document.getElementById("cas_importes");
		var cas_contact=document.getElementById("cas_contact");
		var cas_guerri=document.getElementById("cas_guerri");
		var trans_com=document.getElementById("trans_com");
		var deces=document.getElementById("deces");
		var cas_graves=document.getElementById("cas_graves");	

		if (cas_testes.value==""){
			cas_testes.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_testes').innerHTML="Doit être rempli !";
		}
		else if(cas_testes.value!="") {
			cas_testes.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_testes').innerHTML="";
		}
		if (cas_positifs.value==""){
			cas_positifs.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_positifs').innerHTML="Doit être rempli !";
		}
		else if(cas_positifs.value!="") {
			cas_positifs.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_positifs').innerHTML="";
		}
		if (cas_importes.value==""){
			cas_importes.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_importes').innerHTML="Doit être rempli !";
		}
		else if(cas_importes.value!="") {
			cas_importes.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_importes').innerHTML="";
		}
		if (cas_contact.value==""){
			cas_contact.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_contact').innerHTML="Doit être rempli !";
		}
		else if(cas_contact.value!="") {
			cas_contact.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_contact').innerHTML="";
		}

		if (cas_guerri.value==""){
			cas_guerri.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_guerri').innerHTML="Doit être rempli !";
		}
		else if(cas_guerri.value!="") {
			cas_guerri.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_guerri').innerHTML="";
		}
		if (trans_com.value==""){
			trans_com.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_trans_com').innerHTML="Doit être rempli !";
		}
		else if(trans_com.value!="") {
			trans_com.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_trans_com').innerHTML="";
		}
		if (deces.value==""){
			deces.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_deces').innerHTML="Doit être rempli !";
		}
		else if(deces.value!="") {
			deces.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_deces').innerHTML="";
		}
		if (cas_graves.value==""){
			cas_graves.setAttribute("style","border-left :red solid 20px;border-bottom :red solid 2px;");
			document.getElementById('envoyer').setAttribute("disabled",true);
			document.getElementById('error_cas_graves').innerHTML="Doit être rempli !";
		}
		else if(cas_graves.value!="") {
			cas_graves.setAttribute("style","border-left :green solid 20px;border-bottom :green solid 2px;");
			document.getElementById('envoyer').removeAttribute("disabled");
			document.getElementById('error_cas_graves').innerHTML="";
		}


		if (cas_testes.value=="" ||  cas_positifs.value==""  ||  cas_importes.value=="" ||  cas_contact.value==""  ||  cas_guerri.value=="" ||  trans_com.value=="" ||  deces.value==""  ||  cas_graves.value=="" ){
			document.getElementById('envoyer').setAttribute("disabled",true); 
		}
		
		}