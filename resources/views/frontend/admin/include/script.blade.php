<!-- / Layout wrapper -->


<script src=" {{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src=" {{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
<script src=" {{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
<script src=" {{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('admin/assets/js/dashboards-analytics.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

@if (session('success'))
    <script>
        swal({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            button: "Ok",
        });
    </script>
@endif
@if (session('error'))
    <script>
        swal({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            button: "Ok",
        });
    </script>
@endif

<script>
    $(document).ready(function() {
        CKEDITOR.replace('descriptions');
    });
</script>
