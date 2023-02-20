<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand pl-5">
      <a href="{{route('admin.dashboard')}}" title="EL MEDINA logo. Go to EL MEDINA homepage"><img src="{{ asset('public/template/assets/img/logo4.png')}}" width="190" height="45"></a>
        {{-- <a href="{{route('home')}}" class="df-logo text-decoration-none">EL MEDINA</a> --}}
    </div>

  <!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
      <div class="navbar-menu-header">
        <a href="{{route('admin.dashboard')}}"><img src="{{ asset('public/template/assets/img/logo4.png')}}" width="190" height="45"></a>
          {{-- <a href="{{route('home')}}" class="df-logo">EL MEDINA</a> --}}
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
      </div>
      <!-- navbar-menu-header -->
      <ul class="nav navbar-menu">

        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">Dashboard</a>
        </li>

        <li class="nav-item">
          <a href="{{route('admin.booking.index')}}" class="nav-link">Booking</a>
        </li>

        <li class="nav-item">
          <a href="{{route('admin.blog.index')}}" class="nav-link"> Blog</a>
        </li>

        <li class="nav-item">
          <a href="{{route('admin.index')}}" class="nav-link"> Admin</a>
        </li>

        <li class="nav-item">
          <a href="{{route('admin.customer.index')}}" class="nav-link"> Customers</a>
        </li>

        @auth('admin')
        <li class="nav-item"><a href="#" class="btn btn-social"><i class="fa fa-user"></i></a>
          <div uk-dropdown="boundary: .boundary">
              <ul class="uk-nav uk-dropdown-nav">
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
    
  </div><!-- navbar-right -->

</header>