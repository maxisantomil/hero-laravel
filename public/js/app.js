"use strict";
let loadingtext = document.querySelectorAll(".loading");

var btnsArr = Array.prototype.slice.call(loadingtext);
console.log(btnsArr);

function printLineaBatalla(from, to) {
    let i = from;

    setTimeout(function go() {
        if (i < to) {
            let linea = btnsArr[i].innerHTML;
            let heroeGana = linea.search("hizo");
            let batallaganada = linea.search("acabo");
            let batallaperdida = linea.search("asesinado");
            if (heroeGana == -1) {
                document.querySelector(".aca").innerHTML += "<div class='alert alert-danger 'role='alert'>" + linea + "<div/>" + "<br>"
            } else {
                document.querySelector(".aca").innerHTML += "<div class='alert alert-success 'role='alert'>" + linea + "<div/>" + "<br>"
            }
            if (batallaganada != -1) {
                document.querySelector(".aca").innerHTML += "<h4 id='batallafinalg'>" + "HAS GANADO" + "</h4>" + "<br>"
            }
            if (batallaperdida != -1) {
                document.querySelector(".aca").innerHTML += "<h4 id='batallafinalp'>" + "HAS PERDIDO" + "</h4>" + "<br>"
            }
        }
        if (i < to) {
            setTimeout(go, 2000);
        }
        i++;
    }, 2000);
}


// uso:
printLineaBatalla(1, btnsArr.length);