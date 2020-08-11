


function validar2() {
    var name, lastname, cedula, eps, age, sex, bg, phone, prioridad, observacion;
    name = document.getElementById("name").value;
    lastname = document.getElementById("lastname").value;
    cedula = document.getElementById("cedula").value;
    eps = document.getElementById("eps").value;
    age = document.getElementById("age").value;
    sex = document.getElementById("sex").value;
    bg = document.getElementById("bg").value;
    phone = document.getElementById("phone").value;
    prioridad = document.getElementById("prioridad").value;
    observacion = document.getElementById("observacion").value;
    if (name === "" || lastname === "" || cedula === "" || eps === ""
        || age === "" || sex === "" || bg === "" || phone === "" || prioridad === "" || observacion === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (name.length > 50) {
        alert("El nombre es muy largo");
        return false;
    }
    else if (lastname.length > 50) {
        alert("El apellido es muy largo");
        return false;
    }
    else if (eps.length > 100) {
        alert("El nombre de la eps, es muy largo");
        return false;
    }
    else if (phone.length > 12) {
        alert("El telefono es muy largo");
        return false;
    }
    else if (isNaN(phone)) {
        alert("El telefono ingresado, no es un numero");
        return false;
    }
    else if (isNaN(cedula)) {
        alert("La cedula ingresada, no es un numero");
        return false;
    }
}
