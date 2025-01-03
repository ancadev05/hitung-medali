<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medali</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap5/css/bootstrap.min.css') }}">

    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('vendor/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/Buttons-2.4.2/css/buttons.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/Buttons-2.4.2/css/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/DataTables-1.13.8/css/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/Responsive-2.5.0/css/responsive.bootstrap5.css') }}">

    {{-- select2 --}}
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('medali') ? 'active' : '' }}" href="{{ url('/medali') }}">Medali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" href="{{ url('/laporan') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('atlet') ? 'active' : '' }}" href="{{ url('/atlet') }}">Atlet</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- jquery --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    {{-- bootstrap --}}
    <script src="{{ asset('vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    {{-- datatables --}}
    <script src="{{ asset('vendor/datatables/datatables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables-button.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/buttons.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Buttons-2.4.2/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/JSZip-3.10.1/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake-0.2.7/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake-0.2.7/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Responsive-2.5.0/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('vendor/datatables/Responsive-2.5.0/js/responsive.bootstrap5.js') }}"></script>

    {{-- select2 --}}
    <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
    @yield('script')
</body>

</html>
