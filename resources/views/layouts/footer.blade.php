<footer class="footer">
    <nav class="nav">

        {{-- Nav for right side--}}
        <div class="footer-rgt uk-animation-toggle" tabindex="0">
            <button type="button" class="btn btn-block btn-outline-warning uk-animation-shake"><span style="font-size:0.9rem;">MAKE AN APPOINTMENT</span></button>
        </div>
        
        {{-- Nav for center --}}
        <div class="footer-ctr">
            <ul class="" style="list-style-type:none;">
                <!-- Services -->
                <li class="">
                    <i data-feather="clock"></i>
                    Monday - Sunday : 10AM - 10PM
                </li>
        
                <li class="">
                    <a href="{{route('branches.bangi')}}" class="">
                        <i data-feather="phone"></i>
                        BANGI : 017-727 1152</a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.kuantan')}}" class="">
                        <i data-feather="phone"></i>
                        KUANTAN : 010-838 7030
                    </a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.shah-alam')}}" class="">
                        <i data-feather="phone"></i>
                        SHAH ALAM : 013-200 9518</a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.johor-bahru')}}" class="">
                        <i data-feather="phone"></i>
                        JOHOR BAHRU : 013-999 8458
                    </a>
                </li>
            </ul>
        </div>
        
        {{-- Nav for left side --}}
        <div class="footer-left">
            <table class="" width="100%" style="">
                <thead style="">
                    <tr style="text-decoration:underline;">
                        <td>About</td>
                        <td>Help</td>
                        <td>Learn</td>
                    </tr>
                </thead>
                <tbody style="">
                    <tr>
                        <td><a href="{{route('about-us')}}">Our Story</a></td>
                        <td><a href="#">Contact Us</a></td>
                        <td><a href="#">Products</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('branches.')}}">Branches</a></td>
                        <td><a href="#">FAQ</a></td>
                        <td><a href="{{route('packages.')}}" class="text-uppercase">{{ __('common.packages') }}</a></td>
                    </tr>
                    <tr style="font-size:1.5rem; letter-spacing:10px;">
                        <td class="text-center" colspan="3">
                            <a href="https://www.facebook.com/elmedinaspabekamshahalam/" class="btn btn-social" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCeHyGwZb6QMH3GPNsDvBHpw" class="btn btn-social" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/elmedinaspabekam_shahalam/" class="btn btn-social" target="_blank"><i class="fab fa-instagram"></i></a>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
            
            <div>
                <span style="padding-left:3.5rem;">&copy; EL MEDINA SPA BEKAM 2018 </span>
                <span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </div>
        </div>
    </nav>
</footer>