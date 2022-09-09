
    <div class="container">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ingresar datos del libro</h5>
                <p class="card-text">

                <form action="<?= site_url('/actualizar_cat') ?>" method="post" enctype="multipart/form-data">
                <label for="STOCK">solo es para pruebas</label>
                <input type="text" name="ID_CATEGORIA" value="<?= $categoria['ID_CATEGORIA'];?>">
             

                    <div class="form-group">
                        <label for="NOMBRE_CATEGORIA">nombre</label>
                        <input id="NOMBRE_CATEGORIA" value="<?= $categoria['NOMBRE_CATEGORIA']; ?>" class="form-control" type="text" name="NOMBRE_CATEGORIA">
                    </div>


                    <div class="form-group">
                        <label for="DES_CATEGORIA">descripcion</label>
                        <input id="DES_CATEGORIA" value="<?= $categoria['DES_CATEGORIA']; ?>" class="form-control" type="text" name="DES_CATEGORIA">
                    </div>
                    <button class="btn btn-success" type="submit">guardar</button>
                </form>
                </P>
            </div>
        </div>






    </div>



