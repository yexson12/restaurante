
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Nueva categoria</p>
                                <a class="btn bg-gradient-primary btn-sm ms-auto" href="<?= base_url('admin_cat'); ?>">Volver</a>
                            </div>
                        </div>
                        <form  action="<?= site_url('/guardar_cat') ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NOMBRE CATEGORIA</label>
                                            <input required v-model="PRODUCTO_NOMBRE" class="form-control" name="NOMBRE_CATEGORIA" type="text" placeholder="Nombre la categoria" :class="{ 'is-invalid': errors.barcode }" n>
                                            <div class="invalid-feedback">{{ errors.barcode }}</div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label required for="exampleFormControlTextarea1">DESCRIPCION CATEGORIA</label>
                                            <textarea name="DES_CATEGORIA" v-model="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Descripción dela categoria" :class="{ 'is-invalid': errors.description }"></textarea>
                                            <div class="invalid-feedback">{{ errors.description }}</div>
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