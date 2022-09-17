
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Nuevo producto</p>
                            <a class="btn bg-gradient-primary btn-sm ms-auto" href="<?= base_url('admin_pro'); ?>">Volver</a>
                        </div>
                    </div>
                    <form  action="<?= site_url('/guardar_pro') ?>" method="post" enctype="multipart/form-data">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foto">imagen</label>
                                        <input required id="foto" class="form-control-file" type="file" name="foto">
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
            <div class="col-md-4">
				<div class="card">
					<div class="card-body pt-0">
						<div class="text-center mt-4">
							<div class="file">
								<input type="file" id="fileProduct" @change="readFile">
								<label for="fileProduct">Buscar...</label>
							</div>
							<div class="content-file">
								<img :src="preview">
							</div>
						</div>
					</div>
				</div>
			</div>
            </form>
        </div>