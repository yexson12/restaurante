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
        <br>
        <a class="btn  btn-success" href="<?= base_url('crear_pro') ?>">crear un libro </a>
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