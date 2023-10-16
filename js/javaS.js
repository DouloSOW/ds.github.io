
    var z=0;
    var speed=80;
    var niveau = "Je suis élève Ingénieur des Travaux Statistiques en quatrième année à l'ENSAE de Dakar.";
function typing(){

    
    if (z<niveau.length){
       doulo=document.getElementById("doulo");
       doulo.innerHTML+=niveau.charAt(z);
       z++;
       setTimeout(typing,speed);

    }

}
typing();

