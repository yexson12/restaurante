<div class="container">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresar una categoria</h5>

            <p class="card-text">
            <form action="<?= site_url('/guardar_cat') ?>" method="post" enctype="multipart/form-data">

                <form method="get" action="">


                    <div class="form-group">
                        <label for="NOMBRE_CATEGORIA">NOMBRE CATEGORIA</label>
                        <input id="NOMBRE_CATEGORIA" value="" class="form-control" type="text" name="NOMBRE_CATEGORIA">
                    </div>

                    <div class="form-group">
                        <label for="DES_CATEGORIA">DESCRIPCION</label>
                        <input id="DES_CATEGORIA" value="" class="form-control" type="text" name="DES_CATEGORIA">
                    </div>


                    <button class="btn btn-success" type="submit">guardar</button>
                </form>
        </div>
    </div>



</div>