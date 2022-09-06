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

                <form action="<?= site_url('/actualizar_pro') ?>" method="post" enctype="multipart/form-data">
                <label for="STOCK">solo es para pruebas</label>
                <input type="text" name="PRODUCTO_ID" value="<?= $bebida['PRODUCTO_ID'];?>">
                    <input type="hidden" name="foto" value="<?= $bebida['foto']; ?>">

                    <div class="form-group">
                        <label for="PRODUCTO_NOMBRE">nombre</label>
                        <input id="PRODUCTO_NOMBRE" value="<?= $bebida['PRODUCTO_NOMBRE']; ?>" class="form-control" type="text" name="PRODUCTO_NOMBRE">
                    </div>


                    <div class="form-group">
                        <label for="descripcion">descripcion</label>
                        <input id="descripcion" value="<?= $bebida['descripcion']; ?>" class="form-control" type="text" name="descripcion">
                    </div>


                    <div class="form-group">
                        <label for="PRECIO_UNITARIO">PRECIO_UNITARIO</label>
                        <input id="PRECIO_UNITARIO" value="<?= $bebida['PRECIO_UNITARIO']; ?>" class="form-control" type="text" name="PRECIO_UNITARIO">
                    </div>


                    <div class="form-group">
                        <label for="STOCK">STOCK</label>
                        <input id="STOCK" value="<?= $bebida['STOCK']; ?>" class="form-control" type="text" name="STOCK">
                    </div>


                    <div class="form-group">
                        <label for="ID_CATEGORIA">ID_CATEGORIA</label>
                        <input id="ID_CATEGORIA" value="<?= $bebida['ID_CATEGORIA']; ?>" class="form-control" type="text" name="ID_CATEGORIA">
                    </div>  
                    
                    <div class="form-group">
                        <label for="ID_SUBCAT">ESTADO</label>
                        <input id="ID_SUBCAT" value="<?= $bebida['ID_SUBCAT']; ?>" class="form-control" type="text" name="ID_SUBCAT">
                    </div>


                    <div class="form-group">
                        <label for="foto">imagen</label>
                        <br />
                        <img class="img-thumbnail" src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>" alt="" width="100">

                        <input id="foto" value="<?= $bebida['foto']; ?>" class="form-control-file" type="file" name="foto">
                    </div>

                    <div class="form-group">
                        <label for="ESTADO">ESTADO</label>
                        <input id="ESTADO" value="<?= $bebida['ESTADO']; ?>" class="form-control" type="text" name="ESTADO">
                    </div>

                    <button class="btn btn-success" type="submit">guardar</button>
                </form>
                </P>
            </div>
        </div>






    </div>



</div>