

<footer class="footer">
    <div class="container-fluid">
        <div class="copyright ml-auto">
            2022, made with <i class="fa fa-heart heart text-danger"></i> by NewStartup
        </div>
    </div>
</footer>
</div>

<div class="quick-sidebar">
    <a href="#" class="close-quick-sidebar">
        <i class="flaticon-cross"></i>
    </a>
    <div class="quick-sidebar-wrapper">
        <div class="tab-content mt-3">
            <div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
                <div class="messages-contact">
                    <div class="quick-wrapper">
                        <div class="quick-scroll scrollbar-outer">
                            <div class="quick-content contact-content">
                                <span class="category-title mt-0">Orden</span>
                                <div id="quicksidebar-container-item" class="contact-list">
                                    <!-- Items de la Orden -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Detalles Platillo -->
                <div class="messages-wrapper w-100" data-indexitem="">
                    <div class="messages-title d-flex flex-reverse align-items-center">
                        <button class="return">
                            <i class="flaticon-left-arrow-3"></i>
                        </button>
                        <div class="user">
                            <span id="qsb-details-name" class="h2">null</span>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row-md-4">
                            <div class="card card-post card-round">
                                <img class="card-img-top" src="<?= base_url() ?>/public/atlantis/assets/img/proyecto/chadengle.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <div>
                                        <p id="qsb-details-description" class="card-text mb-0">
                                            null
                                        </p>
                                        <b class="d-flex flex-row justify-content-end align-items-center text-center p-0 m-0 mb-3">
                                            unidad:&nbsp;
                                            <h6 id="qsb-details-unit" class="h6 m-0 p-0 text-center">0</h6>
                                        </b>
                                    </div>


                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center form-group pl-0">
                                            <button class="button-spinner qsb-details-btnminus" id="decrement"> - </button>
                                            <input class="input-spinner" disabled="" type="number" min="1" max="100" step="1" value="1" id="qsb-details-amount" readonly="">
                                            <button class="button-spinner qsb-details-btnplus" id="increment"> + </button>
                                        </div>
                                        <span id="qsb-details-total" class="h3 m-0 text-center"><b>0</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Detalles Platillo -->

            </div>

        </div>
    </div>
    <div class="col-12 pr-5 pb-3 d-flex" style="position: absolute; bottom: 0; height: 70px;">
        <div class="col-12 p-0 d-flex justify-content-between align-items-center">
            <span class="h2 m-0">TOTAL:</span>
            <b id="quicksidebar-footer-total" class="h2 m-0 mr-3">null</b>
        </div>
    </div>
</div>





<!--   Core JS Files   -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/core/bootstrap.min.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/sweetalert2/sweetalert2.min.js"></script>

<!-- System -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/alertas.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/moneda.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/KodotiLocalCache.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/localStorage/LocalOrden.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/localStorage/LocalPersona.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/localStorage/LocalOrdenAsignado.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/input-spinner/input-spinner.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/app/sidebar-orden.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/app/particion.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/restaurante/app/menu.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/moment/moment.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>


<!-- Dropzone -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/dropzone/dropzone.min.js"></script>

<!-- Fullcalendar -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

<!-- DateTimePicker -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap Tagsinput -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<!-- Bootstrap Wizard -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

<!-- jQuery Validation -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

<!-- Summernote -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/select2/select2.full.min.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Owl Carousel -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

<!-- Magnific Popup -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/atlantis.min.js"></script>

<!-- Input Spinner -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/input-spinner/input-spinner.js"></script>


<!-- PARTE YEXSON  -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/jcategoria.js"></script>
<!-- ISOTE PERMITE LA NAVEGACION -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<!-- FIN PARTE YEXSON  -->




</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#ID_CATEGORIA').val(1);
		recargarLista();

		$('#ID_CATEGORIA').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"<?= base_url() ?>/combo",
			data:"continente=" + $('#ID_CATEGORIA').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
