<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta -->
<meta name="description" content="EL MEDINA SPA BEKAM & RECOVERY">
<meta name="author" content="el medina spa bekam & recovery">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/assets/img/light.png') }}">

<title>{{!empty($nav) ? $nav." | " : ""}} EL MEDINA SPA BEKAM</title>

<!----------------------------------------------- Theme CSS ----------------------------------------------->
<link rel="stylesheet" href="{{ asset('template/lib/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('template/lib/datatables.net-dt/css/jquery.dataTables.min.css') }}">
{{-- <link rel="stylesheet" href="http://themepixels.me/dashforge/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css"> --}}

<link rel="stylesheet" href="{{ asset('template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/lib/ionicons/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('template/assets/css/dashforge.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/dashforge.auth.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('template/assets/css/dashforge.dashboard.css') }}"> --}}

<!-- Additional Skin CSS -->
<link rel="stylesheet" href="{{ asset('template/assets/css/skin.gradient1.css') }}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('template/assets/css/skin.cool.css') }}"> --}}

<!-- Custom CSS -->
{{-- <link rel="stylesheet" href="{{ asset('custom.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('custom.css') }}">

@yield('css')

<!----------------------------------------------- Theme JS ----------------------------------------------->
<script src="{{ asset('template/lib/jquery/jquery.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('template/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('template/lib/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('template/lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('template/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('template/lib/jquery.flot/jquery.flot.resize.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="{{ asset('template/assets/js/dashforge.js') }}"></script>
<script src="{{ asset('template/assets/js/dashforge.sampledata.js') }}"></script>

<!-- append theme customizer -->
<script src="{{ asset('template/lib/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('template/assets/js/dashforge.settings.js') }}"></script>

<!-- paresley -->
<script src="{{ asset('template/lib/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('template/lib/jquery.flot/jquery.js') }}"></script>

<script src="{{ asset('template/lib/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('template/lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<!----------------------------------------------- Custom JS ----------------------------------------------->

<script src="{{ asset('template/assets/js/custom.js') }}"></script>
<script src="{{ asset('template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>

@yield('js')
