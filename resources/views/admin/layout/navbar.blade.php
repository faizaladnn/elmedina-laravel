<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand pl-5">
      <a href="{{route('home')}}" title="EL MEDINA logo. Go to EL MEDINA homepage"><img src="{{ asset('public/template/assets/img/logo3.jpg')}}" width="190" height="45"></a>
        {{-- <a href="{{route('home')}}" class="df-logo text-decoration-none">EL MEDINA</a> --}}
    </div>

  <!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
      <div class="navbar-menu-header">
        <a href="{{route('home')}}"><img src="{{ asset('public/template/assets/img/logo3.jpg')}}" width="190" height="45"></a>
          {{-- <a href="{{route('home')}}" class="df-logo">EL MEDINA</a> --}}
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
      </div>
      <!-- navbar-menu-header -->
      <ul class="nav navbar-menu">

        {{-- <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">{{ __('common.home') }}</a>
        </li> --}}

        <li class="nav-item">
          <a href="{{route('about-us')}}" class="nav-link">{{ __('common.about_us') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('packages.')}}" class="nav-link"> {{ __('common.packages') }}</a>
        </li>

        <li class="nav-item">
          <a href="{{route('services.')}}" class="nav-link"> {{ __('common.services') }}</a>
        </li>

        <li class="nav-item with-sub">
          <a href="" class="nav-link">{{ __('common.branches') }}</a>
          <ul class="navbar-menu-sub">
            <li class="nav-sub-item"><a href="{{route('branches.kuantan')}}" class="nav-sub-link">Kuantan</a></li>
            <li class="nav-sub-item"><a href="{{route('branches.shah-alam')}}" class="nav-sub-link">Shah Alam</a></li>
            <li class="nav-sub-item"><a href="{{route('branches.bangi')}}" class="nav-sub-link">Bangi</a></li>
            <li class="nav-sub-item"><a href="{{route('branches.johor-bahru')}}" class="nav-sub-link">Johor Bahru</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link"> {{ __('common.shop') }}</a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link"> {{ __('common.blog') }}</a>
        </li>

        <li class="nav-item"><a href="#" class="btn btn-social"><i class="fa fa-globe"></i></a>
          <div uk-dropdown>
              <ul class="uk-nav uk-dropdown-nav">
                  <li><a href="{{ url('locale/en') }}" style="color:black;"><i class="fa fa-flag-usa"></i> ENGLISH</a></li>
                  <li><a href="{{ url('locale/my') }}" style="color:black;"><i class="fa fa-language"></i> BAHASA MELAYU</a></li>
              </ul>
          </div>
        </li>
        @auth
        <li class="nav-item"><a href="#" class="btn btn-social"><i class="fa fa-user"></i></a>
          <div uk-dropdown="boundary: .boundary">
              <ul class="uk-nav uk-dropdown-nav">
                <li><a href="{{ url('locale/my') }}" style="color:black;"><i class="fa fa-list"></i> {{__('common.see_booking')}}</a></li>
                <li>
                  <form id="logout" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="javascript:;" onclick="document.getElementById('logout').submit()" style="color:black;"><i class="fa fa-sign-out-alt"></i> {{__('common.logout')}}
                    </a>
                </form>
              </ul>
          </div>
        </li>
        @endauth


      </ul>
  </div>
  <div class="navbar-right">
    <a href="{{route('login')}}" class="btn btn-outline-wrng btn-appointment " id="appointment"> <span>{{ __('common.make_an_appointment') }}</span></a>
  </div><!-- navbar-right -->

</header>