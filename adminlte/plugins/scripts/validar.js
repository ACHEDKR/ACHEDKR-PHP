function validar(){
    var nombre, apellidos, correo, cedula, clave, direccion, telefono, contratonumero, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    cedula = document.getElementById("cedula").value;
    clave = document.getElementById("clave").value;
    direccion = document.getElementById("direccion").value
    telefono = document.getElementById("telefono").value;
    contratonumero = document.getElementById("contratonumero").value;

expresion = /\w+@\w+\.+[a-z]/;

    
if (nombre === "" || apellidos === "" || correo === "" || cedula === ""
   || clave === "" || direccion === "" || telefono === "" || contratonumero === ""){
    alert("Todos los campos son obligatorios");
    return false;
}
else if(nombre.length>50){
    alert("El nombre es muy largo");
    return false;
}

else if(apellidos.length>50){
    alert("El apellido es muy largo");
    return false;
}

else if(correo.length>100){
    alert("El correo es muy largo");
    return false;
}

else if(!expresion.test(correo)){
    alert("El correo no es valido");
    return false;
}

else if(cedula.length>12){
    alert("La cedula es muy larga");
    return false;
}

else if(clave.length>20){
    alert("La Clave es muy larga");
    return false;
}

else if(direccion.length>100){
    alert("La direccion es muy larga");
    return false;
}

else if(telefono.length>10){
    alert("El telefono es muy largo");
    return false;
}

else if (isNaN (telefono)){
    alert("El telefono ingresado, no es un numero");
    return false;
}

}