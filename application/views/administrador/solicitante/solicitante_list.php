<div class="x_content">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h2>Solicitantes</h2>
              <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#NuevoSolicitante">
                <i class="btn-inner">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                </i>
                <span>Nuevo Solicitante</span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="NuevoSolicitante" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header no-bd">
                    <h1 class="modal-title">
                      <span class="fw-mediumbold">
                        Nuevo</span>
                      <span class="fw-light">
                        Solicitante
                      </span>
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="<?php echo base_url(); ?>index.php/solicitante/agregarbd" autocomplete="off" method="post" onsubmit="return validarFormulario()">
                      <span class="section"></span>
                      <div class="field item form-group">
                        <label class="col-form-label   label-align">Ci/Nit: <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10">
                          <input class="form-control" class='optional' id="carnet" name="carnet" autocomplete="off" type="text" required="required" onblur="validarCarnet()" />
                          <span id="errorCarnet" class="error"></span>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label   label-align">Razón Social: <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10">
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
                          <button type='submit' class="btn btn-primary">Agregar</button>
                          <button type='reset' class="btn btn-success">Limpiar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
              <div class="table-responsive">
              <table id="tabla" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Ci/Nit</th>
                            <th>Razón Social</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $indice = 1;
                          foreach ($solicitante->result() as $row) {
                          ?>
                            <tr>
                              <td><?php echo $indice; ?></td>
                              <td><?php echo $row->ciNit; ?></td>
                              <td><?php echo $row->razonSocial; ?></td>
                              <td>
                                <div style="display: flex;align-items: center;">
                                  <?php
                                  echo form_open_multipart('solicitante/modificar');
                                  ?>
                                  <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                                  <button type="submit" class="btn btn-sm btn-icon btn-warning text-primary " style="display: inline-block; margin-right: 10px;"><i class="icon">
                                      <span class="btn-inner">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                      </span>
                                    </i></button>

                                  <?php
                                  echo form_close();
                                  ?>
                                  <?php
                                  echo form_open_multipart('solicitante/eliminarbd');
                                  ?>
                                  <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                                  <button type="submit" class="btn btn-sm btn-icon btn-danger text-light" style="display: inline-block; margin-right: 10px;"><i class="icon">

                                      <span class="btn-inner">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                          <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                      </span>
                                    </i></button>

                                  <?php
                                  echo form_close();
                                  ?>
                                </div>
                              </td>
                            </tr>
                          <?php
                            $indice++;
                          }
                          ?>
                        </tbody>
                      </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>