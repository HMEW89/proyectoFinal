</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Modificar Servicio</h4>
                    </div>
                </div>
                <div class="card-body">
                <?php
foreach($infoservicio->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/servicio/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                                    <span class="section"></span>
                                    <div class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/></div>
                                        </div>
                                    <div class="field item form-group">
                                            <label class="col-form-label   label-align">Nombre: <span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                            <input class="form-control" value="<?php echo $row->nombre;?>" class='optional' name="nombre" type="text" required="required" />
                                                  <span id="errorNombre" class="error"></span></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label  label-align">Costo:<span class="required">*</span></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input class="form-control" value="<?php echo $row->costo;?>" step="0.01" min="0" type="number"  name="costo" required='required'  />
                                                <span id="errorCosto" class="error"></span></div>
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
 

    <script>
function validarFormulario() {
    var costo = document.getElementById("costo").value.trim();
    var nombre = document.getElementsByName("nombre")[0].value.trim();
    var formValido = true;

    // Validación del Campo de Costo
    var expresionRegular = /^(?!-)(\d+|\d{1,3}(,\d{3})*)([.,]\d+)?$/;
    if (!expresionRegular.test(costo) || costo === "") {
        document.getElementById("errorCosto").innerHTML = "Costo inválido.";
        formValido = false;
    } else {
        document.getElementById("errorCosto").innerHTML = "";
    }

    // Validación de Nombres
    var nombreRegex = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s']+$/;
    if (!nombre.match(nombreRegex) || nombre === "") {
        document.getElementById("errorNombre").innerHTML = "Nombre de actividad inválido.";
        formValido = false;
    } else {
        document.getElementById("errorNombre").innerHTML = "";
    }

    if (!formValido) {
        // Si hay errores, evita que se envíe el formulario
        return false;
    }

    // Si todas las validaciones pasan, puedes permitir el envío del formulario
    return true;
}
</script>
