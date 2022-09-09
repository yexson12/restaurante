
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>/public/atlantis/assets/img/icon.ico" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: { "families": ["Lato:300,400,700,900"] },
        custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url() ?>/public/atlantis/assets/css/fonts.min.css'] },
        active: function () {
            sessionStorage.fonts = true;
        }
    });
</script>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

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
    <title>Document</title>
</head>
<body>
<STyle>
    .CONTAINERHOLA {
        border: 2px red solid;
        margin-top: 30px;
    }

    .panel-header {
        border: 2px greenyellow solid;

    }

    .page-inner {
        border: 2px greenyellow solid;

    }
</STyle>

<div class="container CONTAINERHOLA">

    <div class="container">
        <br>
        <br><h1> HOLA ESTAS EN EL ADMINISTRADOR DE PRODUCTOS</h1>
        <a class="btn  btn-success" href="<?= base_url('crear_pro') ?>">CREAR PRODUCTO </a>
        <a class="btn  btn-success" href="<?= base_url('cerrarsesion') ?>">CERRAR SESION </a>
        <br><br>
        <table class="table table-light">
            <thead class=" thead-light">
                <tr>
                    <th>#</th>
                    <th> Imagen</th>
                    <th>Nombrea</th>
                    <th> DESCRIPCION</th>
                    <th> PRECIO</th>
                    <th>Acciones</th>
                </tr>
                </theads>
            <tbody>
                <?php foreach ($producto as $bebida) : ?>
                    <tr>
                        <td><?= $bebida['PRODUCTO_ID']; ?></td>
                        <td>
                            <img class="img-thumbnail" src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>" alt="" width="100">

                        </td>
                        <td><?= $bebida['PRODUCTO_NOMBRE']; ?></td>
                        <td><?= $bebida['descripcion']; ?></td>
                        <td><?= $bebida['PRECIO_UNITARIO']; ?></td>
                  
                        <td>
                            <a href="<?= base_url('editar_pro/' . $bebida['PRODUCTO_ID']) ?>" class="btn btn-info" type="button">editar</a>
                                           
                           
                            <a href="<?= base_url('borrar_pro/'.$bebida['PRODUCTO_ID']) ?>" class="btn btn-danger" type="button">Borrar</a>


                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <select required class="form-control" name="idlibro" id="idlibro">
            <?php foreach ($producto as $bebida) : ?>
                <option value="<?= $bebida['PRODUCTO_ID']; ?>">
                    <td><?= $bebida['PRODUCTO_NOMBRE']; ?></td>

                </option>

            <?php endforeach; ?>

        </select>

    </div>



</div>
</body>
</html>


