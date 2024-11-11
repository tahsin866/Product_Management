<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('frontend/images/favicon-32x32.png') }}" type="image/png" />
    <!-- plugins -->
    <link href="{{ asset('frontend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- loader -->
    <link href="{{ asset('frontend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('frontend/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/header-colors.css') }}" />
    <title>Product Management System</title>
</head>

<body>
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content') <!-- This is where page-specific content will go -->
            </div>
        </div>

        <!-- Footer -->

    </div>

    <!-- Start Overlay -->
    <div class="overlay toggle-icon"></div>
    <!-- End Overlay -->
    <!-- Start Back To Top Button -->
    <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!-- End Back To Top Button -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!-- App JS -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>
