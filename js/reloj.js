var incializarHora = function(){
    var fechaActual = new Date();

    var tiempoHoras = fechaActual.getHours();
    var tiempoMinutos = fechaActual.getMinutes();
    var tiempoSegundos = fechaActual.getSeconds();

    var mesActual = fechaActual.getMonth() + 1;
    var diaActual = fechaActual.getDay();
    var diaDelMes = fechaActual.getDate();
    var anoActual = fechaActual.getFullYear();


    var amOpm = (tiempoHoras > 12) ? " PM" : " AM";
    tiempoHoras = (tiempoHoras > 12) ? tiempoHoras -12 : tiempoHoras;
    tiempoHoras = (tiempoHoras < 10) ? "0" + tiempoHoras : tiempoHoras;
    tiempoMinutos = (tiempoMinutos <10 ) ? "0" + tiempoMinutos : tiempoMinutos;
    tiempoSegundos = (tiempoSegundos < 10) ? "0" + tiempoSegundos : tiempoSegundos;

    document.getElementById("fechaActual+reloj").innerHTML = diaDelMes +"/"+ mesActual + "/" + anoActual + "  " + tiempoHoras +":"+tiempoMinutos+":"+tiempoSegundos + amOpm;

}
incializarHora();
setInterval(incializarHora, 1000);