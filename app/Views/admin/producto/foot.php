<!--   Core JS Files   -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('/public/assets/js/core/popper.min.js'); ?>"></script>
<script src="<?= base_url('/public/assets/js/core/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('/public/assets/js/plugins/sweetalert2.js'); ?>"></script>
<script src="<?= base_url('/public/assets/js/plugins/datatables.js'); ?>"></script>
<script src="<?= base_url('/public/assets/js/argon-dashboard.js'); ?>"></script>

<!-- Vue JS -->
<script src="<?= base_url('/public/assets/js/plugins/vue.global.js'); ?>"></script>
<script src="<?= base_url('/public/assets/js/plugins/axios.min.js'); ?>"></script>

<!-- jQuery UI -->



</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#ID_CATEGORIA').val(1);
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