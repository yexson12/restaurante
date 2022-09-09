

    <div class="container">
        <br>
        <br><h1> HOLA ESTAS EN EL ADMINISTRADOR DE CATEGORIA</h1>
        <a class="btn  btn-success" href="<?= base_url('crear_subcat') ?>">CREAR PRODUCTO </a>
        <br><br>
        <table class="table table-light">
            <thead class=" thead-light">
                <tr>
                    <th>#</th>
                    <th> IDCATEGORIA</th>
                    <th> NOMBRE SUBCATEGORIA</th>
                    <th>ACCIONES</th>
                 
                </tr>
                </theads>
            <tbody>
                <?php foreach ($subcategoria as $subcategorias) : ?>
                    <tr>
                        <td><?= $subcategorias['ID_SUBCAT']; ?></td>
                        <td><?= $subcategorias['ID_CATEGORIA']; ?></td>
                        <td><?= $subcategorias['NOMBRE_SUBCAT']; ?></td>
                        
                  
                        <td>
                            <a href="<?= base_url('editar_subcat/'. $subcategorias['ID_SUBCAT']) ?>" class="btn btn-info" type="button">editar</a>
                                           
                           
                            <a href="<?= base_url('borrar_subcat/'.$subcategorias['ID_SUBCAT']) ?>" class="btn btn-danger" type="button">Borrar</a>


                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>






