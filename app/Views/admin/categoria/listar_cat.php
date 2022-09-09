

    <div class="container">
        <br>
        <br><h1> HOLA ESTAS EN EL ADMINISTRADOR DE CATEGORIA</h1>
        <a class="btn  btn-success" href="<?= base_url('crear_cat') ?>">CREAR PRODUCTO </a>
        <br><br>
        <table class="table table-light">
            <thead class=" thead-light">
                <tr>
                    <th>#</th>
                    <th> NOMBRE CATEGORIA</th>
                    <th>DESCRIPCION</th>
                    <th>ACCIONES</th>
                 
                </tr>
                </theads>
            <tbody>
                <?php foreach ($categoria as $categorias) : ?>
                    <tr>
                        <td><?= $categorias['ID_CATEGORIA']; ?></td>
                        <td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>
                        <td><?= $categorias['DES_CATEGORIA']; ?></td>
                  
                        <td>
                            <a href="<?= base_url('editar_cat/'. $categorias['ID_CATEGORIA']) ?>" class="btn btn-info" type="button">editar</a>
                                           
                           
                            <a href="<?= base_url('borrar_cat/'.$categorias['ID_CATEGORIA']) ?>" class="btn btn-danger" type="button">Borrar</a>


                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>






