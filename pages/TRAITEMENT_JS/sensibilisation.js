
    var z=0;
    var speed=80;
    var titre = "Adoptez les gestes suivants et sauvez des vies!!";
    var num=0;
    var ap=0;
    var appel = "En cas de signes ou d'inquiétude, appelez le Ministère de la Santé et de l'Action Sociale : 800 00 50 50";
    
function typing(){

    
    if (z<titre.length){
       doulo=document.getElementById("titre");
       doulo.setAttribute("style","font-size: 60px;text-align: center;margin: 0;padding-top: 0%;color:blue;position: relative;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';");

       doulo.innerHTML+=titre.charAt(z);
       z++;
       setTimeout(typing,speed);

    }

}
typing();
function numero(){

if (num<appel.length){
   n=document.getElementById("appel");
   n.setAttribute("style","font-size: 60px;text-align: center;margin: 0;padding-top: 0%;color:red;position: relative;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';");
   n.innerHTML+=appel.charAt(num);
   num++;
   setTimeout(numero,80);

}

}
numero();
function numero1(){

    if (ap<appel.length){
       n1=document.getElementById("appel1");
       n1.setAttribute("style","font-size: 20px;text-align: center;margin: 0;padding-top: 0%;color:red;position: relative;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';");
       n1.innerHTML+=appel.charAt(ap);
       ap++;
       setTimeout(numero1,80);
    
    }
    
    }
numero1();
