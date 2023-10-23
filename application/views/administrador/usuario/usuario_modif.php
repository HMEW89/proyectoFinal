</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-2 col-lg-2"></div>
        <div class="col-sm-8 col-lg-8">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Modificar Usuario</h4>
                    </div>
                </div>
                <div class="card-body">
                <?php
foreach($infousuario->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/usuario/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                                        <span class="section"></span>
                                        <div class="field item form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label  label-align">Carnet de Identidad: <span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->ci;?>" class='optional' name="carnet" id="carnet" type="text" required="required"/>
                                                <span id="errorCarnet" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label   label-align">Nombres: <span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->nombres;?>" name="nombres" id="nombres"  type="text" required="required" />
                                                <span id="errorNombres" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label   label-align">Primer Apellido<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->primerApellido;?>" name="primerApellido" id="primerApellido" required="required" type="text" />
                                                <span id="errorApellido" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label   label-align">Segundo Apellido:<span></span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->segundoApellido;?>" type="text" name="segundoApellido" />
                                                <span id="errorApellido2" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label label-align">Correo Electrónico: <span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->email;?>" name="email" class='email' required="required" type="email" />
                                                <span id="errorEmail" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label   label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->telefono;?>" type="tel" class='tel' name="telefono" required='required' data-validate-length-range="8,20" />
                                                <span id="errorTelefono" class="error"></span></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label   label-align">Rol:<span></span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->rol;?>" type="text" name="rol" required="required" /></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                          <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>" required='required'  />
                                          </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                    <button type='submit' class="btn btn-primary">Modificar</button>
                                                    <button type='reset' class="btn btn-success">Limpiar</button>
                                                
                                            </div>
                                        </div>

                                        
                                    </form>
                                    <?php

}
?>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-lg-2"></div>
    </div>
</div>   
      </div>
    </div>



              
      </div>
    </div>

    <script>
function validarFormulario() {
    var carnet = document.getElementById("carnet").value.trim();
    var nombres = document.getElementsByName("nombres")[0].value.trim();
    var primerApellido = document.getElementsByName("primerApellido")[0].value.trim();
    var segundoApellido = document.getElementsByName("segundoApellido")[0].value.trim();
    var email = document.getElementsByName("email")[0].value.trim();
    var telefono = document.getElementsByName("telefono")[0].value.trim();
    var formValido = true;

    // Validación del Carnet de Identidad
    var carnetRegex = /^[A-Za-z0-9-]+$/;
    if (!carnetRegex.test(carnet) || carnet.length > 10 || carnet === "") {
        document.getElementById("errorCarnet").innerHTML = "Carnet inválido.";
        formValido = false;
    } else {
        document.getElementById("errorCarnet").innerHTML = "";
    }

    //nombres
    var nombresRegex = /^[A-Za-z]{3,12}$/;

if (!nombresRegex.test(nombres)) {
    document.getElementById("errorNombres").innerHTML = "Nombres inválidos.";
    formValido = false;
} else {
    document.getElementById("errorNombres").innerHTML = "";
}

    //apellido
    var apellidoRegex = /^[A-Za-z]{3,12}$/;

    if (!apellidoRegex.test(primerApellido) || primerApellido.length > 12 || primerApellido === "") {
        document.getElementById("errorApellido").innerHTML = "Primer Apellido inválido.";
        formValido = false;
    } else {
        document.getElementById("errorApellido").innerHTML = "";
    }

    //apellido
    var apellido2Regex = /^[A-Za-z]{0,12}$/;

    if (!apellido2Regex.test(segundoApellido)) {
        document.getElementById("errorApellido2").innerHTML = "Segundo Apellido inválido.";
        formValido = false;
    } else {
        document.getElementById("errorApellido2").innerHTML = "";
    }

    // Validación de Correo Electrónico
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailRegex.test(email)) {
        document.getElementById("errorEmail").innerHTML = "Correo Electrónico inválido.";
        formValido = false;
    } else {
        document.getElementById("errorEmail").innerHTML = "";
    }

    // Validación de Teléfono
    var telefonoRegex = /^\d{8,20}$/;
    if (!telefonoRegex.test(telefono)) {
        document.getElementById("errorTelefono").innerHTML = "Teléfono inválido.";
        formValido = false;
    } else {
        document.getElementById("errorTelefono").innerHTML = "";
    }

    if (!formValido) {
        // Si hay errores, evita que se envíe el formulario
        return false;
    }

    // Si todas las validaciones pasan, puedes permitir el envío del formulario
    return true;
}
</script>

    