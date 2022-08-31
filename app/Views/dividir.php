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
                    <a class="nav-link active text-center pl-0 pr-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">&nbsp; &nbsp; Por Platos &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item flex-grow-1">
                    <a class="nav-link text-center pl-0 pr-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Personalizado</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0">

        <div class="tab-content mt-2 mb-3 col-12" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="accordion accordion-secondary">
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" id="op1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 1
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100.00</b></div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="op1" data-parent="#accordion">
                            <div class="card-body pt-1 pb-2">
                                <button class="btn btn-link mb-2" hidden>
                                    <span class="btn-label"><i class="fa fas fa-plus-circle"></i></span>
                                    &nbsp; Agregar platillo
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" id="item-persona2" data-toggle="collapse" data-target="#collapsePersona2" aria-expanded="true" aria-controls="collapsePersona2" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 1
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100.00</b></div>
                        </div>
                        <div id="collapsePersona2" class="collapse" aria-labelledby="item-persona2" data-parent="#accordion">
                            <div class="card-body p-0">
                                <div class="list-group list-group-messages list-group-flush">
                                    <div class="list-group-item unread pb-2">
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10 p-0">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Jimmy Denis</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> How are you? </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right p-0">
                                                    <p class="list-group-item-text"> 16 minutes ago </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="list-group-item unread">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star2" value="1" checked="">
                                                    <label for="star2">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-offline">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Chad</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Ok, Thanks ! </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 20 minutes ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star3" value="1">
                                                    <label for="star3">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-away">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Talha</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Follow up this reminder asap, quam error praesentium asperiores a quidem. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 2 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star4" value="1">
                                                    <label for="star4">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-offline">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">John Doe</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Ready for the meeting today with client. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 2 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star5" value="1">
                                                    <label for="star5">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-online">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/arashmil.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Arash Mil</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Hi Guys, minus, aliquam porro repudiandae numquam. Molestias. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 3 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item unread">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star6" value="1">
                                                    <label for="star6">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-online">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Jimmy Denis</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> How are you? </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 16 minutes ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item unread">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star7" value="1" checked="">
                                                    <label for="star7">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-offline">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Chad</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Ok, Thanks ! </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 20 minutes ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star8" value="1">
                                                    <label for="star8">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-away">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Talha</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Follow up this reminder asap, quam error praesentium asperiores a quidem. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 2 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star9" value="1">
                                                    <label for="star9">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-offline">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">John Doe</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Ready for the meeting today with client. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 2 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item read">
                                        <div class="list-group-item-figure">
                                                <span class="rating rating-sm mr-3">
                                                    <input type="checkbox" id="star10" value="1">
                                                    <label for="star10">
                                                        <span class="fa fa-star"></span>
                                                    </label>
                                                </span>
                                            <a href="conversations.html" class="user-avatar">
                                                <div class="avatar avatar-online">
                                                    <img src="<?= base_url() ?>/public/atlantis/assets/img/arashmil.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item-body pl-3 pl-md-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-10">
                                                    <h4 class="list-group-item-title">
                                                        <a href="conversations.html">Arash Mil</a>
                                                    </h4>
                                                    <p class="list-group-item-text text-truncate"> Hi Guys, minus, aliquam porro repudiandae numquam. Molestias. </p>
                                                </div>
                                                <div class="col-12 col-lg-2 text-lg-right">
                                                    <p class="list-group-item-text"> 3 days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item-figure">
                                            <div class="dropdown">
                                                <button class="btn-dropdown" data-toggle="dropdown">
                                                    <i class="icon-options-vertical"></i>
                                                </button>
                                                <div class="dropdown-arrow"></div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Mark as read</a>
                                                    <a href="#" class="dropdown-item">Mark as unread</a>
                                                    <a href="#" class="dropdown-item">Toggle star</a>
                                                    <a href="#" class="dropdown-item">Trash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" id="item-persona3" data-toggle="collapse" data-target="#collapsePersona3" aria-expanded="true" aria-controls="collapsePersona3" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 1
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100.00</b></div>
                        </div>
                        <div id="collapsePersona3" class="collapse" aria-labelledby="item-persona3" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" id="item-persona4" data-toggle="collapse" data-target="#collapsePersona4" aria-expanded="true" aria-controls="collapsePersona4" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 1
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100.00</b></div>
                        </div>
                        <div id="collapsePersona4" class="collapse" aria-labelledby="item-persona4" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                <div class="accordion accordion-secondary">
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 1
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100,00</b></div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 2
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100,00</b></div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 3
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100,00</b></div>
                        </div>
                    </div>
                    <div class="card lista-item-personas" style="background: white !important; border-radius: 5px !important;">
                        <div class="card-header collapsed d-flex" role="button">
                            <div class="d-flex align-items-center">
                                <div class="span-icon">
                                    <div class="icon-user"></div>
                                </div>
                                <div class="span-title">
                                    Persona 4
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">S/. 100,00</b></div>
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
                    <div class="text-center">Debe seleccionar la cantidad de personas para poder dividir la cuenta.</div>
                </div>
            </div>
        </div>

    </div>
</div>
