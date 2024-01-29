<div class="nav-bar" id="navbar">
    <div class="nav-container">
        <div class="brand">
            <a href="{{url('/v2')}}">
                <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}"/>
            </a>
        </div>
        <nav id="navbarMenu">
            <div class="nav-mobile">
                <a id="nav-toggle">
                    <span></span>
                </a>
            </div>
            <ul class="nav-list">
                @if ($_SERVER['REQUEST_URI'] == "/v2")
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#services">Services</a> </li>
                    <li><a class="page-scroll" href="#branches">Branches</a></li>
                    <li><a class="page-scroll" href="{{route('v2.package')}}">Packages</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="page-scroll" href="#partners">Partners</a></li>
                    <li><a class="page-scroll" href="#clients">Clients</a></li>
                @else
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'About'])}}">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'Services'])}}">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'Branches'])}}">Branches</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.package')}}">Packages</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'Contact'])}}">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'Partners'])}}">Partner</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('v2.home-type', ['type' => 'Clients'])}}">Client</a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>