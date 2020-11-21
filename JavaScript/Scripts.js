this.window.onload = iniciar;

function iniciar() {
    document.getElementById("enviar").addEventListener('click', Validar_Formulario, false);
}

function Validar_Formulario(evento) {
    var nombre = document.getElementById("nombre").value, correo = document.getElementById("correo").value, asunto = document.getElementById("asunto").value, mensaje = document.getElementById("mensaje").value;
    if (/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/.test(nombre)) {
        document.getElementById("nombre").classList.remove("error");
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)) {
            document.getElementById("correo").classList.remove("error");
            if (/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+$/.test(asunto)) {
                document.getElementById("asunto").classList.remove("error");
                if (/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+$/.test(mensaje)) {
                    alert("Todo ha ido correctamente. ¡Gracias por contactar con Bonifaz!")
                    document.getElementById("mensaje").classList.remove("error");
                    return true;
                } else {
                    alert("Vaya... Parece que algo ha fallado.");
                    document.getElementById('errores').innerHTML = "ERROR. El mensaje no puede estar vacío.";
                    document.getElementById("mensaje").focus();
                    document.getElementById("errores").classList.add("Aparecer");
                    document.getElementById("mensaje").classList.add("error");
                    evento.preventDefault();
                    return false;
                }
            } else {
                alert("Vaya... Parece que algo ha fallado.");
                document.getElementById('errores').innerHTML = "ERROR. El asunto no puede estar vacío.";
                document.getElementById("asunto").focus();
                document.getElementById("errores").classList.add("Aparecer");
                document.getElementById("asunto").classList.add("error");
                evento.preventDefault();
                return false;
            }
        } else {
            alert("Vaya... Parece que algo ha fallado.");
            document.getElementById('errores').innerHTML = "ERROR. El correo no puede estar vacío o ser un valor incorrecto.";
            document.getElementById("correo").focus();
            document.getElementById("errores").classList.add("Aparecer");
            document.getElementById("correo").classList.add("error");
            evento.preventDefault();
            return false;
        }
    } else {
        alert("Vaya... Parece que algo ha fallado.");
        document.getElementById('errores').innerHTML = "ERROR. El nombre no puede estar vacío o ser un valor incorrecto.";
        document.getElementById("nombre").focus();
        document.getElementById("errores").classList.add("Aparecer");
        document.getElementById("nombre").classList.add("error");
        evento.preventDefault();
        return false;
    }
}