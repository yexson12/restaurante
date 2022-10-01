<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dividir Cuenta</h4>
        </div>
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-coins text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <b class="card-category">Cuenta Total</b>
                            <h4 class="card-title"><b id="numbers-cuenta-total">00,00</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agregar personas</label>
                            <div class="input-group d-flex align-items-center">
                                <input type="number" class="form-control" id="txt-personas" placeholder="0...">
                                <button id="btn-agregar-personas" type="button" class="btn btn-icon btn-round btn-secondary btn-sm ml-2">
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link active text-center pl-0 pr-0" id="pills-platos-tab"
                           data-toggle="pill" href="#pills-platos" role="tab" aria-controls="pills-platos"
                           aria-selected="true">&nbsp; &nbsp; Por Platos &nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link text-center pl-0 pr-0" id="pills-personalizado-tab" data-toggle="pill"
                           href="#pills-personalizado" role="tab" aria-controls="pills-personalizado"
                           aria-selected="false">Personalizado</a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="row mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0">

            <div id="container-personas" class="tab-content mt-2 mb-3 col-12" id="pills-tabContent">
                <div class="tab-pane fade show active tab-platos" id="pills-platos" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    
                    <div class="d-flex justify-content-between"> 
                        <button id="btn-asignados" class="btn btn-secondary btn-round mb-3 pt-1 pb-1">
                            <span class="btn-label">
                                <i class="far fa-eye"></i>
                            </span>
                            &nbsp;
                            Asignados
                        </button>
                        <button id="btn-limpiar" class="btn btn-secondary btn-border btn-round mb-3 pt-1 pb-1">
                            <span class="btn-label">
                                <i class="fas fa-broom"></i>
                            </span>
                            &nbsp;
                            Limpiar
                        </button>
                    </div>
                    <div class="d-flex justify-content-between pl-2 pr-2 pb-2">
                        <span class="text-muted">Faltan: <b id="lbl-faltante"></b></span>
                        <span class="text-muted">Subtotal: <b id="lbl-subtotal"></b></span>
                    </div>
                    <div id="list-platos-personas" class="accordion accordion-secondary">

                    </div>
                </div>

                <div class="tab-pane fade" id="pills-personalizado" role="tabpanel">
                    <div id="list-personalizado-personas" class="accordion accordion-secondary">
                    </div>
                </div>

            </div>

            <div id="container-sinpersonas" class="col">
                <div class="empty-person col-12 p-5">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="icon mb-2">
                            <i class="icon-people fa-5x text-muted"></i>
                        </div>
                        <h4 class="text-center">Sin personas</h4>
                        <div class="text-center">Debe seleccionar la cantidad de personas para poder dividir
                            la cuenta.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal Asignar -->
<div class="modal fade" id="modal-asignados" tabindex="-1" role="dialog" aria-labelledby="modal-asignados-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-asignados-label">Asignados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div id="mdl-asignados-container" class="accordion accordion-secondary">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Asignar -->

<!-- Modal Agregar-->
<div class="modal fade" id="modal-agregar" tabindex="-1" role="dialog" aria-labelledby="modal-agregar-label" aria-hidden="true" style="z-index:5000;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-asignados-label">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div id="modal-agregar-body" class="accordion accordion-secondary">
                    <div class="card lista-item-personas mb-0" style="background: white !important;">
                        <div class="card-header collapsed d-flex justify-content-between p-2">
                            <div class="col-1 d-flex justify-content-center pr-1 pl-1">
                                <input type="checkbox">
                            </div>
                            <div class="col-7 d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-muted bold m-0 p-0">Plato</h6>
                                    <span class="badge badge-secondary badge-pill">Max. 4</span>
                                </div>
                                <span class="text-secondary bold">Nombre del platillo largoooooaaao</span>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <!-- <span class="badge badge-secondary badge-pill">Max. 4</span> -->
                                <div class="d-flex align-items-center form-group p-0 mt-1">
                                    <button class="button-spinner" id="decrement" onclick="stepper(this,'spn-modal-agregar-elemet-1')"> - </button>
                                    <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="spn-modal-agregar-elemet-1" readonly="">
                                    <button class="button-spinner" id="increment" onclick="stepper(this, 'spn-modal-agregar-elemet-1')"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-modal-agregar" data-idpersona="" type="button" class="btn btn-primary btn-sm">Añadir</button>
                <button type="button" class="btn btn-secondary btn-sm btn-border" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar -->

<!-- Modal Editar -->
<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal-editar-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-asignados-label">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modal-editar-body"  class="modal-body p-0">

            </div>
            <div class="modal-footer">
                <button id="btn-modal-editar" data-idpersona="" type="button" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Editar -->