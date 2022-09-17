
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Todos los productos</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="<?= base_url('crear_pro'); ?>" class="btn bg-gradient-primary btn-sm mb-0"><i class="fa-solid fa-plus"></i> Nuevo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0" id="data-list">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NOMBRE PRODUCTO</th>


                                      
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">PRECIO</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">categoria</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">sub categoria</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">estado</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">ACCIONES</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($producto as $bebida) :  ?>
                                        <tr>
                                            <td><img class="ps-3 w-10" src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>"><span class="text-xs ms-4 font-weight-bold"><?= $bebida['PRODUCTO_NOMBRE']; ?></span></td>

     <td><span class="text-xs font-weight-bold"><?= $bebida['PRECIO_UNITARIO']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['NOMBRE_CATEGORIA']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $bebida['NOMBRE_SUBCAT']; ?></span></td>
                                            <td>

                                                <?php if ($bebida['ESTADO'] == 0) : ?>
                                                    <form action="<?= site_url('/actualizar_estado') ?>" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="ESTADO" value="1">
                                                        <input type="hidden" name="PRODUCTO_ID" value="<?= $bebida['PRODUCTO_ID']; ?>">
                                                        <button style='width:120px; height:40px' class="btn bg-gradient-danger ms-auto mb-0" type="submit">ACTIVAR</button>
                                                    </form>

                                                <?php else : ?>
                                                    <form action="<?= site_url('/actualizar_estado') ?>" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="ESTADO" value="0">
                                                        <input type="hidden" name="PRODUCTO_ID" value="<?= $bebida['PRODUCTO_ID']; ?>">
                                                        <button style='width:120px; height:40px' class="btn bg-gradient-success ms-auto mb-0" type="submit">DESACTIVAR</button>

                                                    </form>

                                                <?php endif; ?>
                                            </td>

                                            <td class="text-lg pe-5">
                                                <span type="button" id="options" data-bs-toggle="dropdown"><i class="fa-solid fa-list"></i></span>
                                                <ul class="dropdown-menu" aria-labelledby="options">
                                                    <li><a class="dropdown-item" href="<?= base_url('editar_pro/' . $bebida['PRODUCTO_ID']) ?>">editar</a></li>
                                                    <li><a class="dropdown-item" href="<?= base_url('borrar_pro/' . $bebida['PRODUCTO_ID']) ?>">Eliminar</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>