
    var z=0;
    var speed=80;
    var titre = "Evolution de la Covid-19 au Sénégal";
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

