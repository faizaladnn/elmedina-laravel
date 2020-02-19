<footer class="footer">
    <nav class="nav">

        {{-- Nav for right side--}}
        <div class="footer-rgt uk-animation-toggle" tabindex="0">
            <a href="{{route('login')}}" ><button type="button" class="btn btn-block btn-outline-wrng uk-animation-shake" style="border-width:medium; padding: 20px;">
                <span style="font-size:0.9rem;" class="text-uppercase">{{ __('common.make_an_appointment') }}</span></button></a>
        </div>
        
        {{-- Nav for center --}}
        <div class="footer-ctr">
            <ul class="" style="list-style-type:none;">
                <!-- Services -->
                <li class="">
                    <i data-feather="clock"></i>
                    {{ __('common.monday_sunday') }}
                </li>
        
                <li class="">
                    <a href="{{route('branches.bangi')}}" class="">
                        <i data-feather="phone"></i>
                        BANGI : </a> <a href="tel:+60177271152">017-727 1152</a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.kuantan')}}" class="">
                        <i data-feather="phone"></i>
                        KUANTAN : </a> <a href="tel:+60108387030">010-838 7030</a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.shah-alam')}}" class="">
                        <i data-feather="phone"></i>
                        SHAH ALAM : </a> <a href="tel:+60132009518">013-200 9518</a>
                </li>
        
                <li class="">
                    <a href="{{route('branches.johor-bahru')}}" class="">
                        <i data-feather="phone"></i>
                        JOHOR BAHRU : </a> <a href="tel:+60139998458">013-999 8458 / 07-288 0702</a>
                </li>
            </ul>
        </div>
        
        {{-- Nav for left side --}}
        <div class="footer-left">
            <table class="" width="100%" style="">
                <thead style="">
                    <tr style="text-decoration:underline;">
                        <td>{{ __('common.about') }}</td>
                        <td>{{ __('common.help') }}</td>
                        <td>{{ __('common.learn') }}</td>
                    </tr>
                </thead>
                <tbody style="">
                    <tr>
                        <td><a href="{{route('about-us')}}">{{ __('common.about_us') }}</a></td>
                        <td><a href="{{route('branches.')}}">{{ __('common.contact_us') }}</a></td>
                        <td><a href="{{route('services.')}}">{{ __('common.services') }}</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('branches.')}}">{{ __('common.branches') }}</a></td>
                        <td><a href="#">&nbsp;</a></td>
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