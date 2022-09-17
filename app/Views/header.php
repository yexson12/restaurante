<?php
$servidor = "mysql:dbname=bd_restaurante;host=localhost";
$usuario = "root";
$password = "1234";

try {
    $pdo = new PDO($servidor, $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // echo "conectado...";
} catch (PDOException $e) {
    echo "Conexion mala.. " . $e->getMessage();
}

$sentencia = $pdo->prepare("SELECT ID_CATEGORIA ,DES_CATEGORIA ,UCASE(NOMBRE_CATEGORIA) as NOMBRE_CATEGORIA   FROM categoria");
$sentencia->execute();
$listaEmpleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);


/*$nav ="SELECT * FROM categoria limit 4";
        $resultnav=mysqli_query($conexion,$nav);
$row= mysqli_fetch_array($resultnav)*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>El Parrillero</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url() ?>/public/atlantis/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url() ?>/public/atlantis/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>




    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/atlantis.css">
    <!-- PARTE YEXSON  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/style.css">
    <!-- FIN PARTE YEXSON -->
    <!-- Input Spinner -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/input-spinner.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/demo.css">

    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .input-spinner {
            height: 20px !important;
            width: 50px !important;
            font-size: 12px;
        }

        .lista-item-personas {
            background: white !important;
            box-shadow: 2px 6px 15px 0px rgba(69, 65, 78, 0.1) !important;
            border-radius: 10px !important;
        }

        .empty-person {
            /* padding: 70px 60px 80px !important; */
            border: 3px dashed rgba(0, 0, 0, 0.247) !important;
            background: transparent !important;
            height: 100%;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
                    <img src="<?= base_url() ?>/public/atlantis/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="fas fa-concierge-bell"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" href="<?= base_url() ?>/dividir">
                                <i class="fas fa-coins"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link quick-sidebar-toggler">
                                <i class="fas fa-list-ul"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" href="<?= base_url() ?>/login">
                                <i class="fas flaticon-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <style>
                        .gatito .nav-item a {
                            display: flex;
                        
             
                          
                            position: relative;

                       
                        }

                        #miBoton {
               
                            background: light-gray;
                        
                        }

                        #miBoton:hover {
                 
                            background: #1572E8;
                            color: white;
                        }

                        #miBoton:active {
                            background: gray;
                            color: white;
                        }
                    </style>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <!-- <div class="avatar-sm float-left mr-2 d-flex justify-content-center align-items-center">
                        <i class="fas fa-apple-alt fa-2x text-center text-muted"></i>
                    </div> -->

                        <div class="info d-flex justify-content-center align-items-center">

                            <a href="<?= base_url() ?>/menugeneral">
                                <span class="h2 text-center text-muted m-0"><b>~MENU~</b>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <ul class="nav nav-primary">
                        <p>


                        </p>

                        <?php foreach ($listaEmpleados as $empleado) { ?>
                            <li  class="nav-item ">
                                <a id="miBoton" href="<?= base_url() ?>/<?php echo $empleado['NOMBRE_CATEGORIA'];  ?>">
                                    <i class="fas fa-home"></i>
                                    <p><?php echo $empleado['NOMBRE_CATEGORIA'];  ?></p>
                                </a>
                            </li>


                        <?php } ?>

                    </ul>

                  
                   
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">