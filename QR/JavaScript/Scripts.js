var array = new Array();
this.window.onload = iniciar;

function iniciar() {
    document.getElementById("Tapa_fria_1").addEventListener('click', Añadir_Elemento_Tapa_Fria_1, false);
    document.getElementById("Tapa_fria_2").addEventListener('click', Añadir_Elemento_Tapa_Fria_2, false);
    document.getElementById("Tapa_fria_3").addEventListener('click', Añadir_Elemento_Tapa_Fria_3, false);
    document.getElementById("Tapa_fria_4").addEventListener('click', Añadir_Elemento_Tapa_Fria_4, false);

    document.getElementById("Tapa_Caliente_1").addEventListener('click', Añadir_Elemento_Tapa_Caliente_1, false);
    document.getElementById("Tapa_Caliente_2").addEventListener('click', Añadir_Elemento_Tapa_Caliente_2, false);
    document.getElementById("Tapa_Caliente_3").addEventListener('click', Añadir_Elemento_Tapa_Caliente_3, false);
    document.getElementById("Tapa_Caliente_4").addEventListener('click', Añadir_Elemento_Tapa_Caliente_4, false);

    document.getElementById("Montadito_1").addEventListener('click', Añadir_Elemento_Montadito_1, false);
    document.getElementById("Montadito_2").addEventListener('click', Añadir_Elemento_Montadito_2, false);
    document.getElementById("Montadito_3").addEventListener('click', Añadir_Elemento_Montadito_3, false);
    document.getElementById("Montadito_4").addEventListener('click', Añadir_Elemento_Montadito_4, false);

    document.getElementById("Pan_de_la_Casa_1").addEventListener('click', Añadir_Elemento_Pan_de_la_Casa_1, false);
    document.getElementById("Pan_de_la_Casa_2").addEventListener('click', Añadir_Elemento_Pan_de_la_Casa_2, false);
    document.getElementById("Pan_de_la_Casa_3").addEventListener('click', Añadir_Elemento_Pan_de_la_Casa_3, false);
    document.getElementById("Pan_de_la_Casa_4").addEventListener('click', Añadir_Elemento_Pan_de_la_Casa_4, false);

    document.getElementById("Queso_1").addEventListener('click', Añadir_Elemento_Queso_1, false);
    document.getElementById("Queso_2").addEventListener('click', Añadir_Elemento_Queso_2, false);
    document.getElementById("Queso_3").addEventListener('click', Añadir_Elemento_Queso_3, false);

    document.getElementById("Postre_1").addEventListener('click', Añadir_Elemento_Postre_1, false);
    document.getElementById("Postre_2").addEventListener('click', Añadir_Elemento_Postre_2, false);
    document.getElementById("Postre_3").addEventListener('click', Añadir_Elemento_Postre_3, false);
    document.getElementById("Postre_4").addEventListener('click', Añadir_Elemento_Postre_4, false);

    document.getElementById("Bebida_1").addEventListener('click', Añadir_Elemento_Bebida_1, false);
    document.getElementById("Bebida_2").addEventListener('click', Añadir_Elemento_Bebida_2, false);
    document.getElementById("Bebida_3").addEventListener('click', Añadir_Elemento_Bebida_3, false);
    document.getElementById("Bebida_4").addEventListener('click', Añadir_Elemento_Bebida_4, false);

    document.getElementById("Vino_1").addEventListener('click', Añadir_Elemento_Vino_1, false);
    document.getElementById("Vino_2").addEventListener('click', Añadir_Elemento_Vino_2, false);
    document.getElementById("Vino_3").addEventListener('click', Añadir_Elemento_Vino_3, false);
    document.getElementById("Vino_4").addEventListener('click', Añadir_Elemento_Vino_4, false);

    document.getElementById("Enviar").addEventListener('click', Mostrar_Array, false);
}

function Añadir_Elemento_Tapa_Fria_1() {
    array.push(document.getElementById("Tapa_fria_1").value);
}
function Añadir_Elemento_Tapa_Fria_2() {
    array.push(document.getElementById("Tapa_fria_2").value);
}
function Añadir_Elemento_Tapa_Fria_3() {
    array.push(document.getElementById("Tapa_fria_3").value);
}
function Añadir_Elemento_Tapa_Fria_4() {
    array.push(document.getElementById("Tapa_fria_4").value);
}

function Añadir_Elemento_Tapa_Caliente_1() {
    array.push(document.getElementById("Tapa_Caliente_1").value);
}
function Añadir_Elemento_Tapa_Caliente_2() {
    array.push(document.getElementById("Tapa_Caliente_2").value);
}
function Añadir_Elemento_Tapa_Caliente_3() {
    array.push(document.getElementById("Tapa_Caliente_3").value);
}
function Añadir_Elemento_Tapa_Caliente_4() {
    array.push(document.getElementById("Tapa_Caliente_4").value);
}

function Añadir_Elemento_Montadito_1() {
    array.push(document.getElementById("Montadito_1").value);
}
function Añadir_Elemento_Montadito_2() {
    array.push(document.getElementById("Montadito_2").value);
}
function Añadir_Elemento_Montadito_3() {
    array.push(document.getElementById("Montadito_3").value);
}
function Añadir_Elemento_Montadito_4() {
    array.push(document.getElementById("Montadito_4").value);
}

function Añadir_Elemento_Pan_de_la_Casa_1() {
    array.push(document.getElementById("Pan_de_la_Casa_1").value);
}
function Añadir_Elemento_Pan_de_la_Casa_2() {
    array.push(document.getElementById("Pan_de_la_Casa_2").value);
}
function Añadir_Elemento_Pan_de_la_Casa_3() {
    array.push(document.getElementById("Pan_de_la_Casa_3").value);
}
function Añadir_Elemento_Pan_de_la_Casa_4() {
    array.push(document.getElementById("Pan_de_la_Casa_4").value);
}

function Añadir_Elemento_Queso_1() {
    array.push(document.getElementById("Queso_1").value);
}
function Añadir_Elemento_Queso_2() {
    array.push(document.getElementById("Queso_2").value);
}
function Añadir_Elemento_Queso_3() {
    array.push(document.getElementById("Queso_3").value);
}

function Añadir_Elemento_Postre_1() {
    array.push(document.getElementById("Postre_1").value);
}
function Añadir_Elemento_Postre_2() {
    array.push(document.getElementById("Postre_2").value);
}
function Añadir_Elemento_Postre_3() {
    array.push(document.getElementById("Postre_3").value);
}
function Añadir_Elemento_Postre_4() {
    array.push(document.getElementById("Postre_4").value);
}

function Añadir_Elemento_Bebida_1() {
    array.push(document.getElementById("Bebida_1").value);
}
function Añadir_Elemento_Bebida_2() {
    array.push(document.getElementById("Bebida_2").value);
}
function Añadir_Elemento_Bebida_3() {
    array.push(document.getElementById("Bebida_3").value);
}
function Añadir_Elemento_Bebida_4() {
    array.push(document.getElementById("Bebida_4").value);
}

function Añadir_Elemento_Vino_1() {
    array.push(document.getElementById("Vino_1").value);
}
function Añadir_Elemento_Vino_2() {
    array.push(document.getElementById("Vino_2").value);
}
function Añadir_Elemento_Vino_3() {
    array.push(document.getElementById("Vino_3").value);
}
function Añadir_Elemento_Vino_4() {
    array.push(document.getElementById("Vino_4").value);
}

function Mostrar_Array() {
    var mensaje = "¡Se ha enviado la comanda de manera correcta!\n\nLa comanda contiene:\n";
    for (let index = 0; index < array.length; index++) {
        mensaje = mensaje + "\n    - " + array[index] + ".\n";
    }
    alert(mensaje);
}