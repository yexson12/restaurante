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
                            <h4 class="card-title">S/. <b>400,00</b></h4>
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
                            <label for="exampleFormControlSelect1">Escoga la cantidad de personas</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link active text-center pl-0 pr-0" id="pills-home-tab"
                           data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                           aria-selected="true">&nbsp; &nbsp; Por Platos &nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link text-center pl-0 pr-0" id="pills-profile-tab" data-toggle="pill"
                           href="#pills-profile" role="tab" aria-controls="pills-profile"
                           aria-selected="false">Personalizado</a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="row mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0">

            <div class="tab-content mt-2 mb-3 col-12" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <button class="btn btn-secondary btn-round mb-3 pt-1 pb-1" data-toggle="modal" data-target="#modal-asignados">
                                    <span class="btn-label">
                                        <i class="far fa-eye"></i>
                                    </span>
                        &nbsp;
                        Asignados
                    </button>
                    <div class="accordion accordion-secondary">
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" id="op1" data-toggle="collapse"
                                 data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                 role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 1
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 0.00</b></div>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="op1"
                                 data-parent="#accordion">
                                <hr class="m-0 p-0">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-link mt-1 mb-1" data-toggle="modal" data-target="#modal-agregar">
                                                    <span class="btn-label">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                        &nbsp;
                                        Agregar
                                    </button>
                                </div>
                                <div class="card-body pb-0" hidden>

                                </div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" id="item-persona2"
                                 data-toggle="collapse" data-target="#collapsePersona2" aria-expanded="true"
                                 aria-controls="collapsePersona2" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 2
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100.00</b></div>
                            </div>
                            <div id="collapsePersona2" class="collapse" aria-labelledby="item-persona2"
                                 data-parent="#accordion">
                                <hr class="m-0 p-0">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-link mt-1 mb-1">
                                                    <span class="btn-label">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                        &nbsp;
                                        Agregar
                                    </button>
                                    <button class="btn btn-link mt-1 mb-1" data-toggle="modal" data-target="#modal-editar">
                                                    <span class="btn-label">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                        &nbsp;
                                        Editar
                                    </button>
                                </div>
                                <div class="card-body pb-0 pt-3">
                                    <div class="d-flex">
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1">CSSaaaaaa aaaaa aaa a aaaaaaaaaaa</h6>
                                            <small class="text-muted">Cantidad: 4</small>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h5 class="text-info fw-bold">S/. 107,00</h5>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1">CSSaaaaaa aaaaa aaa a aaaaaaaaaaa</h6>
                                            <small class="text-muted">Cantidad: 4</small>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h5 class="text-info fw-bold">S/. 107,00</h5>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" id="item-persona3"
                                 data-toggle="collapse" data-target="#collapsePersona3" aria-expanded="true"
                                 aria-controls="collapsePersona3" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 3
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100.00</b></div>
                            </div>
                            <div id="collapsePersona3" class="collapse" aria-labelledby="item-persona3"
                                 data-parent="#accordion">
                                <div class="card-body pb-0">
                                    <div class="d-flex">
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1">CSSaaaaaa aaaaa aaa a aaaaaaaaaaa</h6>
                                            <small class="text-muted">Cantidad: 4</small>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h5 class="text-info fw-bold">S/. 107,00</h5>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1">CSSaaaaaa aaaaa aaa a aaaaaaaaaaa</h6>
                                            <small class="text-muted">Cantidad: 4</small>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h5 class="text-info fw-bold">S/. 107,00</h5>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" id="item-persona4"
                                 data-toggle="collapse" data-target="#collapsePersona4" aria-expanded="true"
                                 aria-controls="collapsePersona4" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 4
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100.00</b></div>
                            </div>
                            <div id="collapsePersona4" class="collapse" aria-labelledby="item-persona4"
                                 data-parent="#accordion">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                    <div class="accordion accordion-secondary">
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 1
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100,00</b></div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 2
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100,00</b></div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 3
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100,00</b></div>
                            </div>
                        </div>
                        <div class="card lista-item-personas mb-2"
                             style="background: white !important; border-radius: 5px !important;">
                            <div class="card-header collapsed d-flex" role="button">
                                <div class="d-flex align-items-center">
                                    <div class="span-icon">
                                        <div class="icon-user"></div>
                                    </div>
                                    <div class="span-title">
                                        Persona 4
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/.
                                        100,00</b></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col" hidden>
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

<!-- Modal Asignados-->
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
                <div class="accordion accordion-secondary">
                    <div class="card lista-item-personas mb-0"
                         style="background: white !important;">
                        <div class="card-header collapsed d-flex" id="op1" data-toggle="collapse"
                             data-target="#asignadosCollapse1" aria-expanded="true" aria-controls="asignadosCollapse1"
                             role="button">
                            <div class="d-flex flex-column">
                                <h6 class="text-muted bold m-0 p-0">Plato</h6>
                                <span class="text-secondary bold">Nombre del platillo largoooooaaao</span>
                            </div>
                            <span class="badge badge-secondary badge-pill">Max. 4</span>
                        </div>
                        <div id="asignadosCollapse1" class="collapse" aria-labelledby="op1"
                             data-parent="#accordion">
                            <div class="card-body pt-1 pb-1 bg-grey2">
                                <div class="d-flex">
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">Persona 1</h6>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <small class="text-muted">Cantidad: <b>1</b></small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">Persona 2</h6>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <small class="text-muted">Cantidad: <b>3</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card lista-item-personas mb-0"
                         style="background: white !important;">
                        <div class="card-header collapsed d-flex" id="op1" data-toggle="collapse"
                             data-target="#asignadosCollapse2" aria-expanded="true" aria-controls="asignadosCollapse2"
                             role="button">
                            <div class="d-flex flex-column">
                                <h6 class="text-muted bold m-0 p-0">Plato</h6>
                                <span class="text-secondary bold">Nombre del platillo largoooooaaao</span>
                            </div>
                            <span class="badge badge-secondary badge-pill">Max. 3</span>
                        </div>
                        <div id="asignadosCollapse2" class="collapse" aria-labelledby="asignadosCollapse2Label"
                             data-parent="#accordion">
                            <div class="card-body pt-1 pb-1 bg-grey2">
                                <div class="d-flex">
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">Persona 3</h6>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <small class="text-muted">Cantidad: <b>2</b></small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">Persona 4</h6>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <small class="text-muted">Cantidad: <b>1</b></small>
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
                <div class="accordion accordion-secondary">
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
                                    <button class="button-spinner" id="decrement" onclick="stepper(this)"> - </button>
                                    <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="my-input" readonly="">
                                    <button class="button-spinner" id="increment" onclick="stepper(this)"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <button class="button-spinner" id="decrement" onclick="stepper(this)"> - </button>
                                    <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="my-input" readonly="">
                                    <button class="button-spinner" id="increment" onclick="stepper(this)"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <button class="button-spinner" id="decrement" onclick="stepper(this)"> - </button>
                                    <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="my-input" readonly="">
                                    <button class="button-spinner" id="increment" onclick="stepper(this)"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <button class="button-spinner" id="decrement" onclick="stepper(this)"> - </button>
                                    <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="my-input" readonly="">
                                    <button class="button-spinner" id="increment" onclick="stepper(this)"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar -->

<!-- Modal editar -->
<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal-editar-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-asignados-label">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="d-flex flex-column">
                    <div class="card lista-item-personas mb-0 d-flex flex-column" style="background: white !important;">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <span class="text-secondary bold">Nombre del platillo largoooooaaao</span>
                            <button type="button" class="btn btn-icon btn-round btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <div class="d-flex align-items-center form-group pt-0">
                            <button class="button-spinner" id="decrement" onclick="stepper(this,'spn-modal-editar-element-1')"> - </button>
                            <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="spn-modal-editar-element-1" readonly="">
                            <button class="button-spinner" id="increment" onclick="stepper(this, 'spn-modal-editar-element-1')"> + </button>
                        </div>
                    </div>
                    <div class="card lista-item-personas mb-0 d-flex flex-column" style="background: white !important;">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <span class="text-secondary bold">Nombre del platillo largoooooaaao</span>
                            <button type="button" class="btn btn-icon btn-round btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <div class="card-header d-flex align-items-center form-group pt-0">
                            <button class="button-spinner" id="decrement" onclick="stepper(this, 'spn-modal-editar-element-2')"> - </button>
                            <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="spn-modal-editar-element-2" readonly="">
                            <button class="button-spinner" id="increment" onclick="stepper(this, 'spn-modal-editar-element-2')"> + </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal editar -->