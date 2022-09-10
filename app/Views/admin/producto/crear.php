<main class="main-content position-relative border-radius-lg" id="product">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white">Paginas</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Producto</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Producto</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group-search">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Buscar...">
                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown auth-dropdown px-3 d-flex align-items-center">
                        <a class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-sm-inline d-none me-1"></span>
                            <img src="" class="profile-img rounded-circle img-fluid border border-2 border-white">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item border-radius-md" href=""><i class="fa-solid fa-user me-1"></i> Ver perfil</a></li>
                            <form method="POST" action="<?= route_to('logout'); ?>">
                                <li><button class="dropdown-item border-radius-md" type="submit"><i class="fa-solid fa-right-from-bracket me-1"></i> Cerrar sessión</button></li>
                            </form>
                        </ul>
                    </li>
                    <li class="nav-item d-xl-none ps-0 d-flex align-items-center">
                        <a class="nav-link text-white p-0" onclick="toggleSidenav()">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
        </div>