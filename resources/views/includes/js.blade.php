<!-- Vendor JS Files -->
<script src="{{ asset('back/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('back/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('back/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('back/assets/js/main.js') }}"></script>

{{-- CK Editor --}}
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
</script>

{{-- export --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script type="text/javascript"> 
    $(document).ready(function () {
        $('#table-users').DataTable({
            dom: 'Bfrtip',
            buttons: ['pdf', 'print'],
            searching : false,
            orderable: false,
            bPaginate: false,
            bFilter: false,
        });
    });
</script>