<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white">Paginas</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Producto</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Producto</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group-search">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Buscar...">
                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown auth-dropdown px-3 d-flex align-items-center">
                        <a class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-sm-inline d-none me-1"></span>
                            <img src="" class="profile-img rounded-circle img-fluid border border-2 border-white">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item border-radius-md" href="<?= base_url('perfil'); ?>"><i class="fa-solid fa-user me-1"></i> Ver perfil</a></li>
                            <li><a class="dropdown-item border-radius-md" href="<?= base_url('cerrarsesion'); ?>"><i class="fa-solid fa-user me-1"></i> Cerrar Sesion</a></li>

                        </ul>
                    </li>
                    <li class="nav-item d-xl-none ps-0 d-flex align-items-center">
                        <a class="nav-link text-white p-0" onclick="toggleSidenav()">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Todos los productos</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="<?= base_url('crear_pro'); ?>" class="btn bg-gradient-primary btn-sm mb-0"><i class="fa-solid fa-plus"></i> Nuevo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0" id="data-list">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NOMBRE PRODUCTO</th>
                              
            
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">DESCRIPCION</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">PRECIO</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">STOCK</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">categoria</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2"> sub categoria</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">estado</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">ACCIONES</th>
                                     
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($producto as $bebida) :  ?>
                                        <tr>
                                            <td><img class="ps-3 w-10" src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>"><span class="text-xs ms-4 font-weight-bold"><?= $bebida['PRODUCTO_NOMBRE']; ?></span></td>
             
                                            
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['descripcion']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['PRECIO_UNITARIO']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['STOCK']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['NOMBRE_CATEGORIA']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['NOMBRE_SUBCAT']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['ESTADO']; ?></span></td>

                                            <td class="text-lg pe-5">
                                                <span type="button" id="options" data-bs-toggle="dropdown"><i class="fa-solid fa-list"></i></span>
                                                <ul class="dropdown-menu" aria-labelledby="options">
                                                    <li><a class="dropdown-item" href="<?= base_url('editar_pro/'.$bebida['PRODUCTO_ID']) ?>">editar</a></li>
                                                    <li><a class="dropdown-item" href="<?= base_url('borrar_pro/'. $bebida['PRODUCTO_ID']) ?>">Eliminar</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>