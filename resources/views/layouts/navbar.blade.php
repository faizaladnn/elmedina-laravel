<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand pl-5">
      <a href="{{route('home')}}" title="EL MEDINA logo. Go to EL MEDINA homepage"><img src="{{ asset('public/template/assets/img/logo2.png')}}" width="190" height="45"></a>
        {{-- <a href="{{route('home')}}" class="df-logo text-decoration-none">EL MEDINA</a> --}}
    </div>

  <!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
      <div class="navbar-menu-header">
        <a href="{{route('home')}}"><img src="{{ asset('public/template/assets/img/logo2.png')}}" width="190" height="45"></a>
          {{-- <a href="{{route('home')}}" class="df-logo">EL MEDINA</a> --}}
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
      </div>
      <!-- navbar-menu-header -->
      <ul class="nav navbar-menu">

        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">{{ __('common.home') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('about-us')}}" class="nav-link">{{ __('common.about_us') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('packages.')}}" class="nav-link"> {{ __('common.packages') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('services.')}}" class="nav-link"> {{ __('common.services') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('branches.')}}" class="nav-link">{{ __('common.branches') }}</a>
        </li>


      </ul>
  </div>
  <div class="navbar-right"><a href="#" class="btn btn-social"><i class="fa fa-globe"></i></a>
    <div uk-dropdown>
        <ul class="uk-nav uk-dropdown-nav">
            <li><a href="{{ url('locale/en') }}" style="color:black;"><i class="fa fa-flag-usa"></i> ENGLISH</a></li>
            <li><a href="{{ url('locale/my') }}" style="color:black;"><i class="fa fa-language"></i> BAHASA MELAYU</a></li>
        </ul>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{route('login')}}" class="btn btn-outline-warning btn-appointment " id="appointment"> <span>{{ __('common.make_an_appointment') }}</span></a>
    
  </div><!-- navbar-right -->

</header>