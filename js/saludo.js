

let hora = new Date().getHours();
let mensaje = "";

if(hora > 11 && hora < 20){
    mensaje = "Buenas tardes";
}
else if(hora > 19 && hora < 25){
    mensaje = "Buenas noches";
}
else
{
    mensaje = "Buenos días";
}