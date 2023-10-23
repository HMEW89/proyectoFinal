</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Agregar Usuario</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/usuario/agregarbd" method="post" onsubmit="return validarFormulario()" >
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="col-form-label   label-align" for="carnet">Carnet de Identidad: <span class="required">*</span></label>
                                <input class="form-control" class='optional' id="carnet" name="carnet" autocomplete="off" type="text" required="required" value="<?php echo set_value('ci'); ?>" onblur="validarCarnet()"/>
                                               <span id="errorCarnet" class="error" ></span>

                                </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="col-form-label  label-align">Nombres: <span class="required">*</span></label>
                                    <input class="form-control"  name="nombres" autocomplete="off" type="text" required="required" value="<?php echo set_value('nombres'); ?>"  onblur="validarNombres()"/>
                                                <span id="errorNombres" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" >Primer Apellido: <span class="required">*</span></label>
                                    <input class="form-control" name="primerApellido" autocomplete="off"  required="required" type="text" value="<?php echo set_value('primerApellido'); ?>" onblur="validarPrimerApellido()"/>
                                                <span id="errorApellido" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="form-label" >Segundo Apellido: <span class="required">*</span></label>
                                <input class="form-control" type="text" name="segundoApellido"  autocomplete="off" value="<?php echo set_value('segundoApellido'); ?>" onblur="validarSegundoApellido()"/>
                                                <span id="errorApellido2" class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Correo Electrónico: <span class="required">*</span></label>
                                            <input class="form-control" name="email" class='email' autocomplete="off" required="required" type="email" value="<?php echo set_value('email'); ?>" onblur="validarEmail()"/>
                                            <span id="errorEmail" class="error"></span>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="form-label">Telefono<span class="required">*</span></label>
                                        <input class="form-control" type="tel" class='tel'  autocomplete="off" name="telefono" required='required' data-validate-length-range="8,20" value="<?php echo set_value('telefono'); ?>" onblur="validarTelefono()"/>
                                        <span id="errorTelefono" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="form-label">Rol:<span></span></label>
                                    <select class="form-control " name="rol">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Secretario">Secretario</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                      <div class="col-md-6 col-sm-6">
                          <input class="form-control" type="hidden" autocomplete="off" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>"/>
                          </div>
                  </div>
                        </div>
                        <button type='submit' class="btn btn-primary">Agregar</button>
                        <button type='reset' class="btn btn-success">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>


    <script>
// Función de validación para el Carnet de Identidad
function validarCarnet() {
    var carnet = document.getElementById("carnet").value.trim();
    var carnetRegex = /^[A-Za-z0-9-]+$/;
    var errorCarnet = document.getElementById("errorCarnet");

    if (!carnetRegex.test(carnet) || carnet.length > 10 || carnet === "") {
        errorCarnet.innerHTML = "Carnet inválido.";
        return false;
    } else {
        errorCarnet.innerHTML = "";
        return true;
    }
}

// Función de validación para Nombres
function validarNombres() {
    var nombres = document.getElementsByName("nombres")[0].value.trim();
    var nombresRegex = /^[A-Za-záéíóúÁÉÍÓÚ\s]{3,12}$/;
    var errorNombres = document.getElementById("errorNombres");

    if (!nombresRegex.test(nombres) || nombres === "") {
        errorNombres.innerHTML = "Nombre inválido";
        return false;
    } else {
        errorNombres.innerHTML = "";
        return true;
    }
}

// Función de validación para Primer Apellido
function validarPrimerApellido() {
    var primerApellido = document.getElementsByName("primerApellido")[0].value.trim();
    var apellidoRegex = /^[A-Za-záéíóúÁÉÍÓÚ\s]{3,12}$/;
    var errorApellido = document.getElementById("errorApellido");

    if (!apellidoRegex.test(primerApellido) || primerApellido === "") {
        errorApellido.innerHTML = "Primer Apellido inválido";
        return false;
    } else {
        errorApellido.innerHTML = "";
        return true;
    }
}

// Función de validación para Segundo Apellido
function validarSegundoApellido() {
    var segundoApellido = document.getElementsByName("segundoApellido")[0].value.trim();
    var apellidoRegex = /^[A-Za-záéíóúÁÉÍÓÚ\s]{0,12}$/;
    var errorApellido2 = document.getElementById("errorApellido2");

    if (!apellidoRegex.test(segundoApellido)) {
        errorApellido2.innerHTML = "Segundo Apellido inválido";
        return false;
    } else {
        errorApellido2.innerHTML = "";
        return true;
    }
}

// Función de validación para Correo Electrónico
function validarEmail() {
    var email = document.getElementsByName("email")[0].value.trim();
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var errorEmail = document.getElementById("errorEmail");

    if (!emailRegex.test(email) || email === "") {
        errorEmail.innerHTML = "Correo Electrónico inválido.";
        return false;
    } else {
        errorEmail.innerHTML = "";
        return true;
    }
}

// Función de validación para Teléfono
function validarTelefono() {
    var telefono = document.getElementsByName("telefono")[0].value.trim();
    var telefonoRegex = /^\d{8,20}$/;
    var errorTelefono = document.getElementById("errorTelefono");

    if (!telefonoRegex.test(telefono) || telefono === "") {
        errorTelefono.innerHTML = "Teléfono inválido";
        return false;
    } else {
        errorTelefono.innerHTML = "";
        return true;
    }
}

// Función de validación para el formulario completo
function validarFormulario() {
    return (
        validarCarnet() &&
        validarNombres() &&
        validarPrimerApellido() &&
        validarSegundoApellido() &&
        validarEmail() &&
        validarTelefono()
    );
}
</script>