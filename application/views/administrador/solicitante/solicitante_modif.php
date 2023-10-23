</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Modificar Solicitante</h4>
                    </div>
                </div>
                <div class="card-body">
                <?php
foreach($infosolicitante->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/solicitante/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
    <span class="section"></span>
    <div class="field item form-group">
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label   label-align">Ci/Nit: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->ciNit;?>" class='optional' id="carnet" name="carnet" type="text" required="required" />
            <span id="errorCarnet" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label   label-align">Razón Social: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->razonSocial;?>" class='optional' name="nombres" type="text" required="required"/>
            <span id="errorNombres" class="error"></span>
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
   


    <script>
function validarFormulario() {
    var carnet = document.getElementById("carnet").value.trim();
    var nombres = document.getElementsByName("nombres")[0].value.trim();
    var formValido = true;

    // Validación del Carnet de Identidad
    var carnetRegex = /^[0-9-]+$/;
    if (!carnetRegex.test(carnet)) {
        document.getElementById("errorCarnet").innerHTML = "Nit inválido.";
        formValido = false;
    } else {
        document.getElementById("errorCarnet").innerHTML = "";
    }

    // Validación de Nombres
    var nombresRegex =  /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s']+$/;
    if (!nombresRegex.test(nombres) ) {
        document.getElementById("errorNombres").innerHTML = "Razón Social inválidos.";
        formValido = false;
    } else {
        document.getElementById("errorNombres").innerHTML = "";
    }

    if (!formValido) {
        // Si hay errores, evita que se envíe el formulario
        return false;
    }

    // Si todas las validaciones pasan, puedes permitir el envío del formulario
    return true;
}
</script>

   