<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand pl-5">
      {{-- <img src="{{asset('template/assets/img/elmedina.png')}}" width="190" height="45"> --}}
        <a href="{{route('home')}}" class="df-logo">EL MEDINA</a>
    </div>

  <!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
      <div class="navbar-menu-header">
        {{-- <img src="{{asset('template/assets/img/elmedina.png')}}" width="190" height="45"> --}}
          <a href="{{route('home')}}" class="df-logo">EL MEDINA</a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
      </div>
      <!-- navbar-menu-header -->
      <ul class="nav navbar-menu">
        <!-- Services -->

        <li class="nav-item">
          <a href="{{route('about-us')}}" class="nav-link">{{ __('common.about_us') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link"> {{ __('common.services') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">{{ __('common.packages') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('branches')}}" class="nav-link">{{ __('common.branches') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">{{ __('common.gallery') }}</a>
        </li>

      </ul>
  </div>
  <div class="navbar-right">
      <a href="#" class="btn btn-warning" id="appointment" style="font-size:0.8rem;"> <span>{{ __('common.make_an_appointment') }}</span></a>
    </div><!-- navbar-right -->

</header>