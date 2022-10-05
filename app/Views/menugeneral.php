<STyle>

</STyle>

<div class="container CONTAINERHOLA">

  <div class="panel-header card-primary" style="	background-image: linear-gradient(rgba(231, 197, 197, 0.507),rgba(61, 60, 60, 0.863)), url('<?= base_url() ?>/public/atlantis/assets/img/proyecto/como-prender-una-parrilla-1900Wx500H.jpg');
                 background-repeat: no-repeat; background-position: 50% 50%;
                 background-size:cover; ">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
          <h2 class="text-white pb-2 fw-bold">MENU GENERAL</h2>
          <h5 class="text-white op-7 mb-2">Todas las comidas en un solo lugar</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- SECCION MENUS-->

  <section class="food_section layout_padding-bottom">
    <div class="container">


      <ul class="filters_menu">
        <li class="active" data-filter="*">TODO</li>
        <?php foreach ($subcategoria as $subcategorias) : ?>

          <li data-filter=".<?= $subcategorias['ID_SUBCAT']; ?>"> <?= $subcategorias['NOMBRE_SUBCAT']; ?></li>

        <?php endforeach; ?>
      </ul>

      <div class="filters-contenr">

        <div class="row grid">

          <?php foreach ($producto as $bebida) : ?>

            <div class="col-sm-6 col-lg-4 all     <?= $bebida['ID_SUBCAT']; ?>">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="<?= base_url() ?>/public/uploads/<?= $bebida['foto']; ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?= $bebida['PRODUCTO_NOMBRE']; ?>
                    </h5>
                    <p>
                      <?= $bebida['descripcion']; ?>
                    </p>
                    <div class="options">
                      <h6>
                        <?= $bebida['PRECIO_UNITARIO']; ?>
                      </h6>
                      <a class="btn-agregar-producto-orden" type="button" data-idproducto="<?= $bebida['PRODUCTO_ID']; ?>">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>


        </div>

      </div>
      <img class="img-thumbnail" src="<?= base_url() ?>/uploads/<?= $bebida['foto']; ?>" alt="" width="100">
   
    </div>
    <!-- prueba-->

    <span id="displayYear"></span>
    <!-- prueba-->


    <!-- end food section -->



</div>