</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Modificar Evento</h4>
                    </div>
                </div>
                <div class="card-body">
                <?php
foreach($infoevento->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/evento/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
    <span class="section"></span>
    <div class="field item form-group">
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label label-align">Nombre del Evento: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->nombre;?>" class='optional' id="nombre" name="nombre" type="text" required="required" />
            <span id="errorNombre" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label label-align">Lugar: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->lugar;?>" class='optional' name="lugar" type="text" required="required"/>
            <span id="errorLugar" class="error"></span>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label label-align">Fecha Inicio del Evento: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->fechaHoraInicio;?>" class='optional' id="FechaHoraInicio" name="fechaHoraInicio" type="datetime-local" required="required" />
            <span id="errorFechaHoraInicio" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label  label-align">Fecha Fin del Evento: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->fechaHoraFin;?>" class='optional' name="fechaHoraFin" type="datetime-local" required="required"/>
            <span id="errorFechaHoraFin" class="error"></span>
        </div>
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
        <div class="col-sm-3 col-lg-3"></div>
    </div>
</div>   
      </div>
    </div>
<!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Modificar Miembro</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Ir!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Formulario<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php
foreach($infomiembro->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/miembro/modificarbd" method="post" onsubmit="return validarFormulario()">
                                        <span class="section">Información Personal</span>
                                        <div class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Carnet de Identidad: <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->ci;?>" class='optional' name="ci" type="text" required="required" onblur="validarCarnet()"/>
                                                <span id="errorCarnet" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres: <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->nombres;?>" class='optional' name="nombres" type="text" required="required" onblur="validarNombres()"/>
                                                <span id="errorNombres" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Primer Apellido<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->primerApellido;?>" name="primerApellido" required="required" type="text" onblur="validarPrimerApellido()"/>
                                                <span id="errorApellido" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Segundo Apellido:<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->segundoApellido;?>" type="text" name="segundoApellido" onblur="validarSegundoApellido()"/>
                                                <span id="errorApellido" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->telefono;?>" type="tel" class='tel' name="telefono" required='required' data-validate-length-range="8,20" onblur="validarTelefono()"/>
                                                <span id="errorTelefono" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>" required='required'  />
                                                </div>
                                        </div>
                                        
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Modificar</button>
                                                    <button type='reset' class="btn btn-success">Limpiar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php

}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

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
        errorNombres.innerHTML = "Nombres inválidos (al menos 3 caracteres alfabéticos).";
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
        errorApellido.innerHTML = "Primer Apellido inválido (al menos 3 caracteres alfabéticos).";
        return false;
    } else {
        errorApellido.innerHTML = "";
        return true;
    }
}

// Función de validación para Segundo Apellido
function validarSegundoApellido() {
    var segundoApellido = document.getElementsByName("segundoApellido")[0].value.trim();
    var apellidoRegex = /^[A-Za-záéíóúÁÉÍÓÚ\s]{3,12}$/;
    var errorApellido = document.getElementById("errorApellido");

    if (!apellidoRegex.test(segundoApellido)) {
        errorApellido.innerHTML = "Segundo Apellido inválido (al menos 3 caracteres alfabéticos).";
        return false;
    } else {
        errorApellido.innerHTML = "";
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
        errorTelefono.innerHTML = "Teléfono inválido (debe tener al menos 8 dígitos).";
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

   