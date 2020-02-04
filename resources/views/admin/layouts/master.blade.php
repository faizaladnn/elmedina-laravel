<!DOCTYPE html>
<html lang="en">

<!-- Import CSS/JS -->

<head>
  @include ('admin/layouts/header')
</head>

<body>
  <!-- Navbar -->
  @include('admin/layouts/navbar')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('admin/layouts/footer')
</body>

</html>
