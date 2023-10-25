<!-- page content -->
<div class="row">
    <div class="col-md-12">
        <div class="right_col card" role="main">
            <div class="">
                <div class="card-header d-flex justify-content-between text-center">
                    <div class="header-title">
                        <h1><b>Nueva Prestación</b></h1>
                    </div>
                </div>
                <form class="" action="<?php echo base_url(); ?>index.php/prestacion/nuevaPrestacion" autocomplete="off" method="post">
                    <div class="card-body">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h3><b>Solicitante</b></h3>
                                        <ul class="nav navbar-right panel_toolbox">

                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for=""><h4>Ci/Nit:</h4></label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control" autocomplete="off" name="ciNit" id="ci">
                                                    </div>
                                                    <div id="result">
                                                    </div><!-- /input-group -->
                                                </div>
                                            </div>
                                            <input type="hidden" id="id" name="idSolicitante">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for=""><h4>Razón Social:</h4></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="disabled" name="razonSocial" id="razonSocial">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-flat" type="button" data-toggle="modal" data-target="#modal-clientes">
                                                            <i class="icon">
                                                                <svg class="icon-15" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </i>
                                                        </button>
                                                    </span>
                                                    </div><!-- /input-group -->
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for=""><h4>Fecha:</h4></label>
                                                    <?php
                                                    date_default_timezone_set('America/La_Paz');
                                                    $fecha_actual = date('d-m-Y ');
                                                    ?>
                                                    <input type="text" id="fecha" name="fecha" value="<?php echo $fecha_actual; ?>" disabled="disabled" readonly name="fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <h3><b>Detalle de la Prestación</b></h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for=""><h4>Servicio:</h4></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" autocomplete="off" name="nombreServicio" id="nombreSer">

                                                    </div>
                                                    <div id="result2"></div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="idServicio" name="idServicio">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for=""><h4>Detalle:</h4></label>
                                                    <div class="input-group">
                                                        <textarea rows="3" class="form-control" autocomplete="off" name="observacion" id="observacion"></textarea>

                                                    </div><!-- /input-group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <label for=""><h4>Fecha Servicio:</h4></label>
                                                    <input type="datetime-local" id="fecha2" name="fechaServicio">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label></label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-primary btn-flat" type="button" id="btn-agregar">
                                                                <span>Agregar</span>
                                                            </button>
                                                        </span>
                                                    </div><!-- /input-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12"><br>


                                            <h3><b>Servicios Agregados a la Prestación</b></h3>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered" id="tabla" name="tabla">
                                                    <thead>
                                                        <tr>
                                                            <th style="display: none;">idServicio</th>
                                                            <th>Servicio</th>
                                                            <th>Observación</th>
                                                            <th>Fecha</th>
                                                            <th id="precio">Precio</th>
                                                            <th>Cantidad</th>
                                                            <th>Importe</th>
                                                            <th>Opción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="5" style="text-align: right;"><h4><b>Total</b></h4></th>

                                                            <td >
                                                            <input type="text" id="total" name="total" value="0 Bs." style="border: none; outline: none; width: 90px;font-size: 15px;">
                                                            </td>



                                                            </td>
                                                            <td>

                                                            </td>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            
                                            <input class="form-control" type="hidden" autocomplete="off" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>" />
                                            <div class="form-group">
                                                <button id="btn-success" type="submit" class="btn btn-primary btn-flat btn-guardar">Guardar</button>
                                                <button type='reset' class="btn btn-success">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>





</div>
</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
</div>
</div>

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-venta">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion de la orden</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button id="btn-cmodal" type="button" class="btn btn-danger pull-left btn-cerrar-imp" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary btn-flat btn-print"><span class="fa fa-print"></span> Imprimir</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal fade" id="modal-clientes">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Solicitante</h4>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-right">&times;</span></button>


            </div>
            <div class="modal-body">
                <form class="" action="<?php echo base_url(); ?>index.php/solicitante/agregar2bd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                    <span class="section"></span>
                    <div class="field item form-group">
                        <label class="col-form-label  label-align">Ci/Nit: <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12">
                            <input class="form-control" class='optional' id="carnet" name="carnet" autocomplete="off" type="text" required="required" onblur="validarCarnet()" />
                            <span id="errorCarnet" class="error"></span>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label   label-align">Razón Social: <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12">
                            <input class="form-control" class='optional' name="nombres" autocomplete="off" type="text" required="required" onblur="validarNombres()" />
                            <span id="errorNombres" class="error"></span>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="hidden" autocomplete="off" name="idUsuario" value="<?php echo $this->session->userdata('id'); ?>" />
                        </div>
                    </div>

                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 ">
                                <button type='submit' class="btn btn-primary">Agregar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /page content -->


</div>
</div>



<script>
    $(document).ready(function() {
        $('#ci').on('input', function() {
            var ci = $(this).val();
            if (ci.length >= 1) {
                $.post('<?php echo base_url('index.php/solicitante/buscar'); ?>', {
                        ci: ci
                    },
                    function(data) {
                        var result = '';
                        var solicitantes = JSON.parse(data);
                        for (var i = 0; i < solicitantes.length; i++) {
                            result += '<p class="solicitante-item" data-ci="' + solicitantes[i].ciNit + '" data-razon-social="' + solicitantes[i].razonSocial + '" data-id="' + solicitantes[i].id + '">' + solicitantes[i].ciNit + '</p>';
                        }
                        $('#result').html(result);
                    });
            } else {
                // Vaciar el campo razonSocial cuando ci esté vacío
                $('#result').empty();
                $('#razonSocial').val('');
                $('#id').val('');
            }
        });

        $('#result').on('click', '.solicitante-item', function() {
            var selectedCINIT = $(this).data('ci');
            var selectedRazonSocial = $(this).data('razon-social');
            var selectedId = $(this).data('id');
            $('#ci').val(selectedCINIT);
            $('#razonSocial').val(selectedRazonSocial);
            $('#id').val(selectedId);
            $('#result').empty();
        });

    });
</script>
<script>
    var costoSeleccionado = '';

    $(document).ready(function() {
        $('#nombreSer').on('input', function() {
            var nombre = $(this).val();
            if (nombre.length >= 1) {
                $.post('<?php echo base_url('index.php/servicio/buscar'); ?>', {
                        nombre: nombre
                    },
                    function(data) {
                        var result = '';
                        var servicios = JSON.parse(data);

                        for (var i = 0; i < servicios.length; i++) {
                            result += '<p class="servicio-item" data-nombre="' + servicios[i].nombre + '" data-costo="' + servicios[i].precio + '" data-id="' + servicios[i].id + '">' + servicios[i].nombre + '</p>';
                        }
                        $('#result2').html(result);
                    });
            } else {
                $('#result2').empty();
                $('#idServicio').val('');
            }
        });

        $('#result2').on('click', '.servicio-item', function() {
            var selectedCINIT = $(this).data('nombre');
            costoSeleccionado = ($(this).data('costo'));
            var selectedIdSer = $(this).data('id');
            $('#nombreSer').val(selectedCINIT);
            $('#idServicio').val(selectedIdSer);

            $('#result2').empty();
        });

        $('#btn-agregar').on('click', function() {
            // Obtén los valores de los campos
            var nombreSer = $('#nombreSer').val();
            var idServicio = $('#idServicio').val();
            var observacion = $('#observacion').val();
            var fecha = $('#fecha2').val();
            var cantidad = 1;


            // Valida que los campos no estén vacíos
            if (nombreSer !== '' && observacion !== '' && fecha !== '') {
                // Formatea el costo con dos decimales

                // Agrega una nueva fila a la tabla
                var nuevaFila = '<tr>' +
                    "<td style='display: none;'><input type='hidden' name='idServicio[]' value='" + idServicio + "'>" + idServicio + "</td>" +
                    "<td> <input type='hidden' name='nombreSer[]' value='" + nombreSer + "'>" + nombreSer + '</td>' +
                    "<td><input type='hidden' name='observacion[]' value='" + observacion + "'>" + observacion + "</td>" +
                    "<td><input type='hidden' name='fecha2[]' value='" + formatearFecha(fecha) + "'>" + formatearFecha(fecha) + "</td>" +
                    "<td><input type='hidden' name='costo[]' value='" + costoSeleccionado + "'>" + costoSeleccionado + ' Bs.'+ "</td>" +
                    "<td><input type='hidden' name='cantidad[]' value='" + cantidad + "'>" + cantidad + "</td>" +
                    "<td><input type='hidden' name='importe[]' value='" + importe(costoSeleccionado, cantidad)  + "'>" + importe(costoSeleccionado, cantidad) + ' Bs.'+ "</td>" +
                    '<td><button type="submit" class="btn-eliminar btn btn-small btn-danger"><i class="icon"><svg class="icon-24" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"/><path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"/></svg></i></button></td>' +
                    '</tr>';
                $('#tabla tbody').append(nuevaFila);


                // Limpia los campos después de agregar
                $('#nombreSer').val('');
                $('#observacion').val('');
                $('#fecha2').val('');
                costoSeleccionado = 0;

                sumaTotal();

            }


        });
    });

    function importe(costo, cantidad) {
        var numero = parseFloat(costo);
        var numeroFormateado = numero.toFixed(2);
        var resultado = numeroFormateado * cantidad;
        var importe = resultado.toFixed(2);
        return importe;
    }

    $('#tabla').on('click', '.btn-eliminar', function() {
        // Encuentra la fila a la que pertenece el botón y elimínala
        $(this).closest('tr').remove();

        // Llama a la función para actualizar el total
        sumaTotal();
    });



    function sumaTotal() {
        var tabla = document.getElementById("tabla");
        var total = 0.0;

        // Itera a través de las filas de la tabla (excluyendo la primera fila, que a menudo contiene encabezados)
        for (var i = 1; i < tabla.rows.length - 1; i++) {
            var celda = tabla.rows[i].cells[6]; // Obtén la celda de la columna "Importe" (índice 5)

            // Convierte el contenido de la celda a un número y súmalo al total
            var valor = parseFloat(celda.textContent);
            if (!isNaN(valor)) {
                total += valor;
            }
        }

        // Actualiza el valor del elemento <td id="total"> con el resultado de la suma
        var totalElement = document.getElementById("total");
        totalElement.textContent = total.toFixed(2);
        var totaldecimal=total.toFixed(2)+" Bs.";
        document.getElementById('total').value = totaldecimal;

        
    }

    // Llama a la función sumaTotal() cuando se cargue la página o cuando se realice alguna acción que modifique la tabla.
    window.onload = sumaTotal;






    function formatearFecha(fechaStr) {
        // Crear un objeto Date a partir de la cadena de fecha
        const fecha = new Date(fechaStr);

        // Obtener los componentes de la fecha
        const dia = fecha.getDate();
        const mes = fecha.getMonth() + 1; // ¡Atención! Los meses comienzan desde 0
        const año = fecha.getFullYear();
        const hora = fecha.getHours();
        const minutos = fecha.getMinutes();

        // Formatear la fecha en el formato deseado
        const fechaFormateada = `${dia.toString().padStart(2, '0')}-${mes.toString().padStart(2, '0')}-${año} ${hora.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}`;

        return fechaFormateada;
    }
</script>
<script>
    // Función de validación para el Carnet de Identidad
    function validarCarnet() {
        var carnet = document.getElementById("carnet").value.trim();
        var carnetRegex = /^[0-9]+$/;
        var errorCarnet = document.getElementById("errorCarnet");

        if (!carnetRegex.test(carnet)) {
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
        var nombresRegex = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s']+$/;
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