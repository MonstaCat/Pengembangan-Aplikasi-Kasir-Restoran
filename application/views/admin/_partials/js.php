<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('js/demo/chart-pie-demo.js') ?>"></script>
<script src="<?= base_url('js/demo/datatables-demo.js') ?>"></script>

<script>
    // Display data tables
    $(document).ready(function() {
        $('table.display').DataTable();
    });

    // Field formatting
    var fnf = document.getElementById("formattedNumberField");
    fnf.addEventListener('keyup', function(evt){
        var n = parseInt(this.value.replace(/\D/g,''),10);
        fnf.value = n.toLocaleString();
    }, false);
</script>