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
                            <input id="PRECIO_UNITARIO" value="" class="form-control" type="text" name="PRECIO_UNITARIO">
                        </div>


                        <div class="form-group">
                            <label for="STOCK">STOCK</label>
                            <input id="STOCK" value="" class="form-control" type="text" name="STOCK">
                        </div>


                        <div class="form-group">

                            <label for="ID_CATEGORIA">CATEGORIA</label>
                            <select type="hidden" required class="form-control" name="ID_CATEGORIA" id="ID_CATEGORIA">
                                <?php foreach ($categoria as $categorias) : ?>
                                    <option value="<?= $categorias['ID_CATEGORIA']; ?>">
                                        <td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>
                        <div class="form-group">

                            <label for="ID_SUBCAT">SUBCATEGORIA</label>
                            <select type="hidden" required class="form-control" name="ID_SUBCAT" id="ID_SUBCAT">
                                <?php foreach ($subcategoria as $subcategorias) : ?>
                                    <option value="<?= $subcategorias['ID_SUBCAT']; ?>">
                                        <td><?= $subcategorias['NOMBRE_SUBCAT']; ?></td>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="foto">imagen</label>
                            <input id="foto" class="form-control-file" type="file" name="foto">
                        </div>




                        <button class="btn btn-success" type="submit">guardar</button>
                    </form>
            </div>
        </div>



    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#ID_CATEGORIA').val(1);
            recargarLista();

            $('#ID_CATEGORIA').change(function() {
                recargarLista();
            });
        })
    </script>
    <script type="text/javascript">
        function recargarLista() {
            $.ajax({
                type: "POST",
                url: "http://localhost/restaurante/controller/index",
                data: "categoria=" + $('#ID_CATEGORIA').val(),
                success: function(r) {
                    $('#ID_SUBCAT').html(r);
                }
            });
        }
    </script>

</div>