<div class="container">


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresar datos del libro</h5>
            <p class="card-text">

            <form action="<?= site_url('/actualizar_subcat') ?>" method="post" enctype="multipart/form-data">
                <label for="STOCK">solo es para pruebas</label>
                <input type="text" name="ID_SUBCAT" value="<?= $subcategoria['ID_SUBCAT'];?>">


            
                <div class="form-group">
                        <label for="ID_CATEGORIA">NOMBRE SUBCATEGORIA</label>
                        <input id="ID_CATEGORIA" value="<?=$subcategoria['ID_CATEGORIA']; ?>" class="form-control" type="text" name="ID_CATEGORIA">
                    </div>



                <div class="form-group">
                    <label for="NOMBRE_SUBCAT">nombre</label>
                    <input id="NOMBRE_SUBCAT" value="<?= $subcategoria['NOMBRE_SUBCAT']; ?>" class="form-control" type="text" name="NOMBRE_SUBCAT">
                </div>


<<<<<<< HEAD
                <button class="btn btn-success" type="submit">guardar</button>
            </form>
            </P>
        </div>
    </div>



=======
    </div>
>>>>>>> 67d8756ca396458a0258a3422f63ead94169fb61



</div>