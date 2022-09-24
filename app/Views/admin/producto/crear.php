<!-- End Navbar -->
<div class="container-fluid py-4">
    <form action="<?= site_url('/guardar_pro') ?>" method="post" enctype="multipart/form-data">
        <div class="row">


            <div class="col-md-8">

                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Nuevo producto</p>
                            <a class="btn bg-gradient-primary btn-sm ms-auto" href="<?= base_url('admin_pro'); ?>">Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">PRODUCTO_NOMBRE</label>
                                    <input required v-model="PRODUCTO_NOMBRE" class="form-control" name="PRODUCTO_NOMBRE" type="text" placeholder="Nombre del producto" :class="{ 'is-invalid': errors.barcode }" n>
                                    <div class="invalid-feedback">{{ errors.barcode }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categoría</label>
                                    <label for="ID_CATEGORIA">CATEGORIA</label>


                                    <select type="hidden" required class="form-control" name="ID_CATEGORIA" id="ID_CATEGORIA">
                                        <option value="0">Selecciona una opcion</option>
                                        <?php foreach ($categoria as $categorias) : ?>
                                            <option required value="<?= $categorias['ID_CATEGORIA']; ?>">
                                                <td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="exampleFormControlSelect1">SUBCATEGORIA</label>
                                <div id="select2lista"></div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label required for="exampleFormControlTextarea1">DESCRIPCION</label>
                                    <textarea name="descripcion" v-model="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Descripción del producto" :class="{ 'is-invalid': errors.description }"></textarea>
                                    <div class="invalid-feedback">{{ errors.description }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">PRECIO_UNITARIO</label>
                                    <input required v-model="PRECIO_UNITARIO" class="form-control" name="PRECIO_UNITARIO" type="number" placeholder="Precio unitario" :class="{ 'is-invalid': errors.barcode }" n>
                                    <div class="invalid-feedback">{{ errors.barcode }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">STOCK</label>
                                    <input required v-model="barcode" class="form-control" name="STOCK" type="number" placeholder="Stock del producto" :class="{ 'is-invalid': errors.barcode }" n>
                                    <div class="invalid-feedback">{{ errors.barcode }}</div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-success ms-auto mb-0" type="submit">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </form>
</div>
</div>
<STyle>
    .content-file {
        width: 100%;
        height: 416px;
        margin: 20px 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .input-file-image img {
        max-width: 100%;
        max-height: 416px;
    }

    /*      Input File      */
    .input-file input[type="file"],
    .input-file .form-control,
    .input-file .form-control-file {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .input-file label.error,
    .input-file label.success {
        display: block;
    }

    .input-file input[type="file"]+label:not(.error),
    .input-file .form-control+label:not(.error),
    .input-file .form-control-file+label:not(.error),
    .input-file .label-input-file {
        font-weight: 600;
        letter-spacing: 0.02em;
        color: white !important;
        display: inline-block;
    }

    .input-file.input-file-image img.img-upload-preview {
        max-width: 100%;
        display: block;
        margin-bottom: 15px;
        box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1);
    }

    .input-file.input-file-image img.img-upload-preview.img-circle {
        border-radius: 2000px;
    }

    .filess {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 46px;
        margin-bottom: 0;
    }

    .filess input {
        display: none;
    }

    .filess label {
        cursor: pointer;
        font-weight: 400;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        right: 0;
        padding: 12px;
        height: inherit;
        font-size: 1rem;
        text-align: start;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
        -webkit-box-shadow: 0 3px 2px #fdfefe;
        box-shadow: 0 3px 2px #fdfefe;
    }

    .filess label:after {
        position: absolute;
        z-index: 3;
        right: 0;
        top: 0;
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        height: inherit;
        text-transform: capitalize;
        content: '\f07c';
        color: #8898aa;
        border-left: inherit;
        padding: 12px;
    }

    .content-file img {
        max-width: 100%;
        max-height: 416px;
    }
</STyle>
<div class="col-md-4">
    <div class="card">
        <div class="card-body pt-0">
            <div class="text-center mt-4">
                <label for="fileProduc">IMAGEN</label>
                <div class="filess">

                    <label for="uploadImg">ELEGIR...</label>
                </div>
                <div class="content-file">
                    <div class="input-file input-file-image">
                        <!-- USO EN LA IMAGEN CIRCULAR img-circle -->

                        <img name="foto" class="img-upload-preview"  src="http://placehold.it/100x100" alt="Elegir imagen">
                        <input required name="foto" type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" accept="image/*" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>
</form>