
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Nueva subcategoria</p>
                            <a class="btn bg-gradient-primary btn-sm ms-auto" href="<?= base_url('admin_subcat'); ?>">Volver</a>
                        </div>
                    </div>
                    <form  action="<?= site_url('/guardar_subcat') ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">NOMBRE SUBCATEGORIA</label>
                                        <input required v-model="PRODUCTO_NOMBRE" class="form-control" name="NOMBRE_SUBCAT" type="text" placeholder="Nombre de subcategoria" :class="{ 'is-invalid': errors.barcode }" n>
                                        <div class="invalid-feedback">{{ errors.barcode }}</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Categoría</label>
                                        
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
          
        </div>