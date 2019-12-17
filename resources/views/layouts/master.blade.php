<!DOCTYPE html>
<html lang="en">

<!-- Import CSS/JS -->

<head>
  @include ('layouts/header')
</head>

<body>
  <!-- Navbar -->
  @include('layouts/navbar')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('layouts/footer')
</body>

</html>
