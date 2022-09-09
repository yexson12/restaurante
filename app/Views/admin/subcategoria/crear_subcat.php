<div class="container">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresar una subcategoria</h5>

            <p class="card-text">
            <form action="<?= site_url('/guardar_subcat') ?>" method="post" enctype="multipart/form-data">


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
             


                <div class="form-group">
                    <label for="NOMBRE_SUBCAT">NOMBRE SUBCATEGORIA</label>
                    <input id="NOMBRE_SUBCAT" value="" class="form-control" type="text" name="NOMBRE_SUBCAT">
                </div>



                <button class="btn btn-success" type="submit">guardar</button>
            </form>
        </div>
    </div>



</div>