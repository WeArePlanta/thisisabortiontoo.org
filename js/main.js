
document.addEventListener("DOMContentLoaded", function (event) {
    var countDownDate = new Date("2024-11-05T00:00:00.000-05:00").getTime();
    setInterval(function () {

        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var daysLeft = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //dias
        var diaTexto = document.createElement("p");
        var diaSpan = document.createElement("span");
        //horas
        var hoursTexto = document.createElement("p");
        var hoursSpan = document.createElement("span");
        //minutos
        var minutesTexto = document.createElement("p");
        var minutesSpan = document.createElement("span");
        //segundos
        var secondsTexto = document.createElement("p");
        var secondsSpan = document.createElement("span");

        //acá creo los textos que iran dentro de los elementos html

        // cuando termina la cuenta empieza a ir en negativo, 
        // entonces la linea con los ceros está creada para que se lean los ceros hay que descomentarla y comentar las de daysleft
        //dias 
        // var text = document.createTextNode("00");
        var text = document.createTextNode(daysLeft);
        var textDiaSpan = document.createTextNode("Days");
        //horas
        // var textHoras = document.createTextNode("00");
        var textHoras = document.createTextNode(hours);
        var textHorasSpan = document.createTextNode("Hours");
        //minutos
        // var textMinutos = document.createTextNode("00");
        var textMinutos = document.createTextNode(minutes);
        var textMinutosSpan = document.createTextNode("Minutes");
        //segundos
        // var textSegundos = document.createTextNode("00");
        var textSegundos = document.createTextNode(seconds);
        var textSegundosSpan = document.createTextNode("Seconds");


        //acá agrego los textos creados a los elementos creados 
        //dias
        diaTexto.appendChild(text);
        diaSpan.appendChild(textDiaSpan);
        //horas
        hoursTexto.appendChild(textHoras);
        hoursSpan.appendChild(textHorasSpan);
        //minutos
        minutesTexto.appendChild(textMinutos);
        minutesSpan.appendChild(textMinutosSpan);
        //segundos
        secondsTexto.appendChild(textSegundos);
        secondsSpan.appendChild(textSegundosSpan);

        //acá llamo al div que ya existe en el html y le agrego a cada uno sus elementos correspondientes
        //dias
        var divUno = document.getElementById('div-uno');
        divUno.replaceChildren();
        divUno.appendChild(diaTexto);
        divUno.appendChild(diaSpan);
        //horas
        var divDos = document.getElementById('div-dos');
        divDos.replaceChildren();
        divDos.appendChild(hoursTexto);
        divDos.appendChild(hoursSpan);
        //minutos
        var divTres = document.getElementById('div-tres');
        divTres.replaceChildren();
        divTres.appendChild(minutesTexto);
        divTres.appendChild(minutesSpan);
        //segundos
        var divCuatro = document.getElementById('div-cuatro');
        divCuatro.replaceChildren();
        divCuatro.appendChild(secondsTexto);
        divCuatro.appendChild(secondsSpan);

    }, 1000)

});



