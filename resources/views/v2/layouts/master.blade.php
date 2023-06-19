<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Import CSS/JS -->

<head>
  @include ('v2/layouts/header')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navbar -->
  @include('v2/layouts/navbar')
  
  <!-- Content -->
  @yield('content')
  
  <!-- Footer -->
  @include('v2/layouts/footer')

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ asset('public/v2/custom.js') }}"></script>

</html>
