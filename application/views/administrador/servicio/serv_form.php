</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Agregar Servicio</h4>
                    </div>
                </div>
                <div class="card-body">
                <form class="" action="<?php echo base_url();?>index.php/servicio/agregarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                    <span class="section"></span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre: <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12">
                            <input class="form-control" class='optional'autocomplete="off" name="nombre"  type="text" required="required" onblur="validarNombre()"/>
                            <span id="errorNombres" class="error"></span></div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Costo:<span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12">
                            <input class="form-control" type="number" autocomplete="off" name="costo" step="0.01" min="0" required='required'  onblur="validarCosto()"/>
                            <span id="errorCosto" class="error"></span></div>
                    </div>
                    <div class="field item form-group">
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="hidden" autocomplete="off" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>"/>
                            </div>
                    </div>
                    
                    <div class="ln_solid">
                        <div class="form-group">
                        <button type='submit' class="btn btn-primary">Agregar</button>
                        <button type='reset' class="btn btn-success">Limpiar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3"></div>
    </div>
</div>
      </div>
                    
      </div>
    </div>

    <script>

function validarCosto() {
    var costo = document.getElementById("costo").value.trim();
    var costoRegex = /^(?!-)\d+(\.\d+)?$/;
    var errorCosto = document.getElementById("errorCosto");

    if (!costoRegex.test(costo) || costo === "") {
        errorCosto.innerHTML = "Costo inválido.";
        return false;
    } else {
        errorCosto.innerHTML = "";
        return true;
    }
}

// Función de validación para Nombres
function validarNombre() {
    var nombre = document.getElementsByName("nombre")[0].value.trim();
    var nombresRegex =/^[0-9A-Za-zÁáÉéÍíÓóÚúÑñ\s']+$/u;
    var errorNombres = document.getElementById("errorNombres");

    if (!nombresRegex.test(nombre) || nombre === "") {
        errorNombres.innerHTML = "Nombre de actividad inválido";
        return false;
    } else {
        errorNombres.innerHTML = "";
        return true;
    }
}

// Función de validación para el formulario completo
function validarFormulario() {
    return (
        validarCosto() &&
        validarNombre() 
    );
}
</script>

   