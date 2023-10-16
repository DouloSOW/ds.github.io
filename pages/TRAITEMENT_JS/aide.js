
    var z=0;
    var speed=80;
    var titre = "Faites un don et stoppez la propagation de la covid-19!!";
    var num=0;
    var ap=0;
    var appel = "Tout le monde compte et nous comptons sur vous!";
    
function typing(){

    
    if (z<titre.length){
       doulo=document.getElementById("titre");
       doulo.setAttribute("style","font-size: 50px;text-align: center;margin: 0;padding-top: 0%;color:blue;position: relative;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';");

       doulo.innerHTML+=titre.charAt(z);
       z++;
       setTimeout(typing,speed);

    }

}
typing();

function numero1(){

    if (ap<appel.length){
       n1=document.getElementById("appel1");
       n1.setAttribute("style","font-size: 25px;text-align: center;margin: 0;padding-top: 0%;color:green;position: relative;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';");
       n1.innerHTML+=appel.charAt(ap);
       ap++;
       setTimeout(numero1,80);
    
    }
    
    }
numero1();
