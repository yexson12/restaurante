


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

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ingresar datos del libro</h5>

                <p class="card-text">
                <form action="<?= site_url('/guardar_pro') ?>" method="post" enctype="multipart/form-data">

                    <form method="get" action="">


                        <div class="form-group">
                            <label for="PRODUCTO_NOMBRE">PRODUCTO_NOMBRE</label>
                            <input id="PRODUCTO_NOMBRE" value="" class="form-control" type="text" name="PRODUCTO_NOMBRE">
                        </div>




                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input id="descripcion" value="" class="form-control" type="text" name="descripcion">
                        </div>


                        <div class="form-group">
                            <label for="PRECIO_UNITARIO">PRECIO_UNITARIO</label>
                            <input id="PRECIO_UNITARIO" value="" class="form-control" type="number" name="PRECIO_UNITARIO">
                        </div>


                        <div class="form-group">
                            <label for="STOCK">STOCK</label>
                            <input id="STOCK" value="" class="form-control" type="number" name="STOCK">
                        </div>


                        <div class="form-group">

                            <label for="ID_CATEGORIA">CATEGORIA</label>
                            <select type="hidden" required class="form-control" name="ID_CATEGORIA" id="ID_CATEGORIA">
                                <option value="0">Selecciona una opcion</option>
                                <?php foreach ($categoria as $categorias) : ?>
                                    <option value="<?= $categorias['ID_CATEGORIA']; ?>">
                                        <td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br>

                        </div>
                        <div id="select2lista"></div>

                  

                        <div class="form-group">
                            <label for="foto">imagen</label>
                            <input id="foto" class="form-control-file" type="file" name="foto">
                        </div>




                        <button class="btn btn-success" type="submit">guardar</button>
                    </form>
            </div>
        </div>



    </div>



</div>