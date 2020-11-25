this.window.onload = iniciar;

function iniciar() {
    document.getElementById("Enviar").addEventListener('click', Validar_Usuario, false);
    document.getElementById("Inventario").addEventListener('click', Mostrar_Desplegable_1, false);
    document.getElementById("Estadisticas").addEventListener('click', Mostrar_Desplegable_2, false);
    document.getElementById("Inventario_2").addEventListener('click', Mostrar_Desplegable_1_1, false);
    document.getElementById("Estadisticas_2").addEventListener('click', Mostrar_Desplegable_2_2, false);
}

function Validar_Usuario(evento) {
    var usuario = document.getElementById("usuario").value, contraseña = document.getElementById("contraseña").value;
    
    if (/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+$/.test(usuario)) {
        document.getElementById("usuario").classList.remove("error");
        if (/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+$/.test(contraseña)) {
            document.getElementById("contraseña").classList.remove("error");
            if (usuario == "josemaria69" & contraseña == "josemaria69") {
                document.getElementById("errores2").classList.remove("Aparecer");
                document.getElementById("errores2").classList.add("Quitar");
                document.getElementById("Login").classList.add("Quitar");
                document.getElementById("header").classList.remove("Quitar");
                document.getElementById("header").classList.add("Aparecer");
                document.getElementById("main").classList.remove("Quitar");
                document.getElementById("main").classList.add("Aparecer");
                document.getElementById("usuario").classList.remove("error");
                document.getElementById("contraseña").classList.remove("error");
                return true;
            } else {
                alert("Ups... Parece que no existe ese usuario con esa contraseña.");
                document.getElementById('errores2').innerHTML = "ERROR. El usuario o la contraseña o ambos no están registrados como usuarios válidos.";
                document.getElementById("errores2").classList.add("Aparecer");
                document.getElementById("errores").classList.remove("Aparecer");
                document.getElementById("errores").classList.add("Quitar");
                document.getElementById("usuario").classList.add("error");
                document.getElementById("contraseña").classList.add("error");
                evento.preventDefault();
                return false;
            }
        } else {
            alert("Ups... Parece que algo va mal.");
            document.getElementById('errores').innerHTML = "ERROR. La contraseña no puede estar vacía.";
            document.getElementById("contraseña").focus();
            document.getElementById("errores").classList.add("Aparecer");
            document.getElementById("errores2").classList.remove("Aparecer");
            document.getElementById("errores2").classList.add("Quitar");
            document.getElementById("contraseña").classList.add("error");
            evento.preventDefault();
            return false;
        }
    } else {
        alert("Ups... Parece que algo va mal.");
        document.getElementById('errores').innerHTML = "ERROR. El usuario no puede estar vacío.";
        document.getElementById("usuario").focus();
        document.getElementById("errores").classList.add("Aparecer");
        document.getElementById("errores2").classList.remove("Aparecer");
        document.getElementById("errores2").classList.add("Quitar");
        document.getElementById("usuario").classList.add("error");
        evento.preventDefault();
        return false;
    }
}

function Mostrar_Desplegable_1() {
    document.getElementById("Desplegable_1").classList.remove("Quitar");
    document.getElementById("Desplegable_1").classList.add("Aparecer");
    document.getElementById("Inventario").classList.add("Quitar");
    document.getElementById("Inventario").classList.remove("Aparecer");
    document.getElementById("Inventario_2").classList.add("Aparecer");
}

function Mostrar_Desplegable_2() {
    document.getElementById("Desplegable_2").classList.remove("Quitar");
    document.getElementById("Desplegable_2").classList.add("Aparecer");
    document.getElementById("Estadisticas").classList.add("Quitar");
    document.getElementById("Estadisticas").classList.remove("Aparecer");
    document.getElementById("Estadisticas_2").classList.add("Aparecer");
}

function Mostrar_Desplegable_1_1() {
    document.getElementById("Desplegable_1").classList.add("Quitar");
    document.getElementById("Desplegable_1").classList.remove("Aparecer");
    document.getElementById("Inventario").classList.remove("Quitar");
    document.getElementById("Inventario").classList.add("Aparecer");
    document.getElementById("Inventario_2").classList.remove("Aparecer");
    document.getElementById("Inventario_2").classList.add("Quitar");
}

function Mostrar_Desplegable_2_2() {
    document.getElementById("Desplegable_2").classList.add("Quitar");
    document.getElementById("Desplegable_2").classList.remove("Aparecer");
    document.getElementById("Estadisticas").classList.remove("Quitar");
    document.getElementById("Estadisticas").classList.add("Aparecer");
    document.getElementById("Estadisticas_2").classList.remove("Aparecer");
    document.getElementById("Estadisticas_2").classList.add("Quitar");
}