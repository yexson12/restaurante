<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?= base_url('/public/assets/img/icon/icon.ico'); ?>">
    <title>New Start</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('/public/assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('/public/assets/css/fontawesome.css'); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('/public/assets/css/argon-dashboard.css'); ?>" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url('/public/assets/css/style.css'); ?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100 prt">
    <div class="min-height-300 bg-primary position-absolute w-100 prt"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-scrollbar">
            <div class="sidenav-header">
                <a class="navbar-brand m-0" href="<?= base_url('admin_general'); ?>">
                    <img src="<?= base_url('/public/assets/img/icon/icon.png'); ?>" class="navbar-brand-img h-100">
                    <span class="ms-1 font-weight-bold">Administrador</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin_general'); ?>" :class="dashboardClass">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-chart-pie text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                
                  
                    <li class="nav-item">
                    
                    <a class="nav-link" href="<?= base_url('admin_pro'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-seedling text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">PRODUCTO</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    
                    <a class="nav-link" href="<?= base_url('admin_cat'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-calendar-alt text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">CATEGORIA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin_subcat'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-clone text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">SUBCATEGORIA</span>
                        </a>
                    </li>

              
                </ul>
            </div>
            <div class="sidenav-footer mx-3 ">
                <div class="card card-plain shadow-none" id="sidenavCard">
                    <img class="w-50 mx-auto" src="<?= base_url('/public/assets/img/icon/icon.png'); ?>">
                    <div class="card-body text-center p-3 w-100 pt-0">
                        <div class="docs-info">
                            <h6 class="mb-0">CELESTINA</h6>
                            <p class="text-xs font-weight-bold mb-0">Comidas para tu palagar</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-dark btn-sm mb-0 w-100" href="<?= base_url('/'); ?>">Ver Menú</a>
            </div>
        </div>
    </aside>
    