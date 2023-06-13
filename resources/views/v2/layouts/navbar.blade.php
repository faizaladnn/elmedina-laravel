  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbar-ex1-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @if ($_SERVER['REQUEST_URI'] == "/v2")
                <a class="navbar-logo page-scroll" href="#page-top">
                    <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" />
                </a>
            @else
                <a class="navbar-logo" href="{{route('v2.home')}}">
                    <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" />
                </a>
            @endif
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top">
                        <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" />
                    </a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#branches">Branches</a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#packages">Packages</a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#contact">Contact</a>
                </li>
                {{-- <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#">Shop</a>
                </li>
                <li>
                    <a class="page-scroll" data-bs-toggle="collapse"  data-bs-target=".navbar-collapse.show" href="#">Blog</a>
                </li> --}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

