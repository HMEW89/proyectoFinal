function validarCarnet(carnet) {
    var carnetRegex = /^[0-9A-Za-z-]+$/;
    if (!carnetRegex.test(carnet)) {
        return "El carnet de identidad solo debe contener números, letras y guiones.";
    }
    if (carnet.length > 10) {
        return "La longitud máxima del carnet de identidad es de 10 caracteres.";
    }
    return null; // La validación es exitosa    
}

function validarNombre(nombre) {
    var nombreRegex = /^[A-Za-z\s]+$/;
    if (!nombreRegex.test(nombre)) {
        return "El nombre no debe contener caracteres especiales ni números.";
    }
    if (nombre.length < 3 || nombre.length > 12) {
        return "El nombre debe tener entre 3 y 12 caracteres.";
    }
    return null; // La validación es exitosa
}

function validarApellido(apellido) {
    var apellidoRegex = /^[A-Za-z\s]+$/;
    if (!apellidoRegex.test(apellido)) {
        return "El apellido no debe contener caracteres especiales ni números.";
    }
    if (apellido.length < 3 || apellido.length > 15) {
        return "El apellido debe tener entre 3 y 15 caracteres.";
    }
    return null; // La validación es exitosa
}

function validarTelefono(telefono) {
    var telefonoRegex = /^[0-9]+$/;
    if (!telefonoRegex.test(telefono)) {
        return "El teléfono debe contener solo números";
    }
    
    if (telefono.length > 8) {
        return "El teléfono debe tener una longitud máxima de 8 caracteres.";
    }
    return null; // La validación es exitosa
}

function validarCosto() {
    var costo = document.getElementById("costo").value.trim();
    var costoRegex = /^(?:\d*\.)?\d+$/; // Acepta números enteros y decimales

    if (costo === "") {
        return "El campo Costo del Producto no puede estar vacío.";
    } else if (!costoRegex.test(costo) || parseFloat(costo) <= 0) {
        return "El costo debe ser un número positivo en bolivianos.";
    }

    return null; // La validación es exitosa
}