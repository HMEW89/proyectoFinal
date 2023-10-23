</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Agregar Solicitante</h4>
                    </div>
                </div>
                <div class="card-body">
                <form class="" action="<?php echo base_url();?>index.php/solicitante/agregarbd"  autocomplete="off" method="post" onsubmit="return validarFormulario()">
                  <span class="section"></span>
                  <div class="field item form-group">
                      <label class="col-form-label   label-align">Ci/Nit: <span class="required">*</span></label>
                      <div class="col-md-10 col-sm-10">
                      <input class="form-control" class='optional' id="carnet" name="carnet" autocomplete="off" type="text" required="required"  onblur="validarCarnet()"/>
                          <span id="errorCarnet" class="error"></span></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label   label-align">Razón Social: <span class="required">*</span></label>
                      <div class="col-md-10 col-sm-10">
                      <input class="form-control" class='optional' name="nombres" autocomplete="off" type="text" required="required"   onblur="validarNombres()"/>
                          <span id="errorNombres" class="error"></span></div>
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
// Función de validación para el Carnet de Identidad
function validarCarnet() {
    var carnet = document.getElementById("carnet").value.trim();
    var carnetRegex = /^[0-9]+$/;
    var errorCarnet = document.getElementById("errorCarnet");

    if (!carnetRegex.test(carnet) ) {
        errorCarnet.innerHTML = "Ci/Nit inválido.";
        return false;
    } else {
        errorCarnet.innerHTML = "";
        return true;
    }
}

// Función de validación para Nombres
function validarNombres() {
    var nombres = document.getElementsByName("nombres")[0].value.trim();
    var nombresRegex =/^[A-Za-zÁáÉéÍíÓóÚúÑñ\s']+$/;
    var errorNombres = document.getElementById("errorNombres");

    if (!nombresRegex.test(nombres) || nombres === "") {
        errorNombres.innerHTML = "Razón Social inválido";
        return false;
    } else {
        errorNombres.innerHTML = "";
        return true;
    }
}

// Función de validación para el formulario completo
function validarFormulario() {
    return (
        validarCarnet() &&
        validarNombres() 
    );
}
</script>

    