</div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div>
    <div class="row">
        <div class="col-sm-3 col-lg-3"></div>
        <div class="col-sm-6 col-lg-6">
        <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h4 class="card-title">Modificar Actividad</h4>
                    </div>
                </div>
                <div class="card-body">
                <?php
foreach($infoactividad->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/actividad/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
    <span class="section"></span>
    <div class="field item form-group">
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label   label-align">Nombre de la Actividad: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->nombre;?>" class='optional' id="nombre" name="nombre" type="text" required="required" />
            <span id="errorNombre" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label  label-align">Descripción: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->descripcion;?>" class='optional' name="descripcion" type="text" required="required"/>
            <span id="errorDescripcion" class="error"></span>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label label-align">Hora Inicio de la Actividad: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->horaInicio;?>" class='optional' id="horaInicio" name="horaInicio" type="time" required="required" />
            <span id="errorHoraInicio" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label  label-align">Hora Fin de la Actividad: <span class="required">*</span></label>
        <div class="col-md-12 col-sm-12">
            <input class="form-control" value="<?php echo $row->horaFin;?>" class='optional' name="horaFin" type="time" required="required"/>
            <span id="errorHoraFin" class="error"></span>
        </div>
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
                            <h3>Modificar Actividad</h3>
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
foreach($infoactividad->result() as $row){
?>
                                    <form class="" action="<?php echo base_url();?>index.php/actividad/modificarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
    <span class="section"></span>
    <div class="field item form-group">
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->id;?>" class='optional' name="id"  type="hidden" required="required"/>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre de la Actividad: <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->nombre;?>" class='optional' id="nombre" name="nombre" type="text" required="required" />
            <span id="errorNombre" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Descripción: <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->descripcion;?>" class='optional' name="descripcion" type="text" required="required"/>
            <span id="errorDescripcion" class="error"></span>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Hora Inicio de la Actividad: <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->horaInicio;?>" class='optional' id="horaInicio" name="horaInicio" type="time" required="required" />
            <span id="errorHoraInicio" class="error"></span>
        </div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Hora Fin de la Actividad: <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" value="<?php echo $row->horaFin;?>" class='optional' name="horaFin" type="time" required="required"/>
            <span id="errorHoraFin" class="error"></span>
        </div>
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

   