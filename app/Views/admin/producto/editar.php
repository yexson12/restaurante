
		<!-- End Navbar -->
		<div class="container-fluid py-4">
		<form action="<?= site_url('/actualizar_pro') ?>" method="post" enctype="multipart/form-data">
			<div class="row">

				<div class="col-md-8">
					<div class="card">
						<div class="card-header pb-0">
							<div class="d-flex align-items-center">
								<p class="mb-0">Actualizar producto</p>
								<a class="btn bg-gradient-primary btn-sm ms-auto" href="<?= base_url('admin_pro'); ?>">Volver</a>
							</div>
						</div>
				
							<div class="card-body">

								<input type="hidden" name="PRODUCTO_ID" value="<?= $bebida['PRODUCTO_ID']; ?>">
								<input type="hidden" name="ID_CATEGORIA" value="<?= $bebida['ID_CATEGORIA']; ?>">
								<input type="hidden" name="ID_SUBCAT" value="<?= $bebida['ID_SUBCAT']; ?>">
								<input type="hidden" name="ESTADO" value="<?= $bebida['ESTADO']; ?>">

								<div class="row">
									<div class="col-md-10">
										<div class="form-group">
											<label for="example-text-input" class="form-control-label">PRODUCTO_NOMBRE</label>
											<input required v-model="PRODUCTO_NOMBRE" value="<?= $bebida['PRODUCTO_NOMBRE']; ?>" class="form-control" name="PRODUCTO_NOMBRE" type="text" placeholder="Nombre del producto" :class="{ 'is-invalid': errors.barcode }" n>
											<div class="invalid-feedback">{{ errors.barcode }}</div>
										</div>
									</div>

									<style>
									





										#ID_CATEGORIA {
										


											background: orange;
								
										}


										#ID_SUBCAT {

					

											background: greenyellow;
								

										}
									</style>



									<div id="genecate" class="col-md-6">
										<label for="example-text-input" class="form-control-label">CATEGORIA</label>

										<select  class="form-control" name="ID_CATEGORIA" id="ID_CATEGORIA">
											<option value="0">Selecciona una opcion</option>
											<?php foreach ($categoria as $categorias) : ?>
												<?php if ($categorias['ID_CATEGORIA'] == $bebida['ID_CATEGORIA']) : ?>
													<option selected   value="<?= $categorias['ID_CATEGORIA']; ?>">
														<td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>
													</option>
												<?php endif; ?>
												<option  value="<?= $categorias['ID_CATEGORIA']; ?>">
													<td><?= $categorias['NOMBRE_CATEGORIA']; ?></td>
												</option>
											<?php endforeach; ?>
										</select>


									</div>



									<div id="genecate" class="col-md-6">
										<label for="example-text-input" class="form-control-label">SUBCATEGORIA</label>

										<div id="select2lista"></div>

									</div>


									
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label required for="exampleFormControlTextarea1">DESCRIPCION</label>
                                        <textarea name="descripcion" v-model="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Descripción del producto" :class="{ 'is-invalid': errors.description }"> <?= $bebida['descripcion']; ?></textarea>
                                        <div class="invalid-feedback">{{ errors.description }}</div>
                                    </div>
                                </div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="example-text-input" class="form-control-label">PRECIO_UNITARIO</label>
											<input required v-model="PRECIO_UNITARIO" value="<?= $bebida['PRECIO_UNITARIO']; ?>" class="form-control" name="PRECIO_UNITARIO" type="number" placeholder="Precio unitario" :class="{ 'is-invalid': errors.barcode }" n>
											<div class="invalid-feedback">{{ errors.barcode }}</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="example-text-input" class="form-control-label">STOCK</label>
											<input required v-model="barcode" value="<?= $bebida['STOCK']; ?>" class="form-control" name="STOCK" type="number" placeholder="Stock del producto" :class="{ 'is-invalid': errors.barcode }" n>
											<div class="invalid-feedback">{{ errors.barcode }}</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="example-text-input" class="form-control-label">ESTADO</label>
											<br>
											<?php if ($bebida['ESTADO'] == 0) : ?>
												      <a    class="btn bg-gradient-danger" type="button" disabled="false" >DESACTIVADO</a>
                                                <?php else : ?>
                                                 	<a disabled style="pointer-events:none;" title="EL PRODUCTO ESTA ACTIVADO" class="btn bg-gradient-success ms-auto mb-0" type="submit">ACTIVADO</a>
                                                <?php endif; ?>
										</div>
									</div>

									<div class="col-md-12">
										<div class="button-row d-flex mt-4">
											<button class="btn bg-gradient-success ms-auto mb-0" type="submit">Actualizar</button>
										</div>
									</div>
								</div>
							</div>
				
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body pt-0">
							<div class="text-center mt-4">
								<div class="file">
									<input  name="foto" value="<?= $bebida['foto']; ?>" type="file" id="fileProduc" >
									<label for="fileProduc">Cambiar...</label>
									</div>
								<div class="content-file">
									<img  src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>">
								</div>
						
							</div>
						</div>
					</div>
				</div>
			
			</div>
			</form>




			<script src="<?= base_url() ?>/public/atlantis/assets/js/core/jquery.3.2.1.min.js"></script>




			<script type="text/javascript">
				$(document).ready(function() {
					$('#ID_CATEGORIA').val();
					recargarLista();

					$('#ID_CATEGORIA').change(function() {
						recargarLista();
					});
				})
			</script>
			<script type="text/javascript">
				function recargarLista() {
					$.ajax({
						type: "POST",
						url: "<?= base_url() ?>/combo",
						data: "continente=" + $('#ID_CATEGORIA').val(),
						success: function(r) {
							$('#select2lista').html(r);
						}
					});
				}
			</script>