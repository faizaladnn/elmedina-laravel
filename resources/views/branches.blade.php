@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h5>FIND <span style="font-weight:bold;">EL MEDINA</span> AROUND YOU </h5>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select class="form-control select2" name="branch" id="branch">
                  <option value="">Please Select Location</option>
                  <option value="Pahang">PAHANG</option>
                  <option value="Selangor">SELANGOR</option>
                  <option value="Johor">JOHOR</option>
                  <option value="Kuala Lumpur">KUALA LUMPUR</option>
                </select>
            </div>
        </div>

        <div id="div"> </div>

        <div id="all-branches">
            {{-- Kuantan --}}
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
                    width="100%" height="100%" frameborder="0" style="" allowfullscreen="" class="df-example"></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.kuantan') }}" style="color:black;">EL MEDINA SPA BEKAM Kuantan</a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>010 - 838 7030</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM +item.branchName+"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamkuantan/" target="_blank" style="color:black;">Facebook El Medina Spa Bekam Kuantan</a></h5>
                        </div>
                    </div>
                    <div class="row pl-2">
                        @include('branches.slider.kuantan')
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Shah Alam --}}
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
                    width="100%" height="100%"  frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"> <a href="{{route('branches.shah-alam') }}" style="color:black;">EL MEDINA SPA BEKAM Shah Alam </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>No. 17, 1, Jalan Plumbum R 7/R, Seksyen 7, 40000 Shah Alam, Selangor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>013 - 200 9518</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM +item.branchName+"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamshahalam/" target="_blank" style="color:black;">Facebook El Medina Spa Bekam Shah Alam</a></h5>
                        </div>
                    </div>
                    <div class="row pl-2">
                        @include('branches.slider.shah_alam')
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Bangi --}}
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.491109200717!2d101.75445281525252!3d2.961142855104205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbe18e82a0db%3A0x5bae158640d76c66!2sEl%20Medina%20Spa%20Bekam%20-%20Bangi!5e0!3m2!1sen!2smy!4v1576500339532!5m2!1sen!2smy" 
                    width="100%" height="100%"  frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.bangi') }}" style="color:black;"> EL MEDINA SPA BEKAM Bangi </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>2nd Floor, 1-09-03, Jln Medan Pusat Bandar 7, Seksyen 9, 43650 Bandar Baru Bangi, Selangor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>017 - 727 1152</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM Bangi"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekambangi/" target="_blank" style="color:black;">Facebook El Medina Spa Bekam Bangi</a></h5>
                        </div>
                    </div>
                    <div class="row pl-2">
                        @include('branches.slider.bangi')
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Johor Bahru --}}
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16421.356899928163!2d103.69805845728803!3d1.4905870294991632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da72bee481bedf%3A0xdff5448648e97aa3!2sEl%20Medina%20Spa%20Bekam%20-%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1576500453749!5m2!1sen!2smy" 
                    width="100%" height="100%"  frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.johor-bahru') }}" style="color:black;"> EL MEDINA SPA BEKAM Johor Bahru </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>29, Uda Business Centre, 01, Jln Padi Emas 1/5, Bandar Baru Uda, 81200 Johor Bahru, Johor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>013 - 999 8458</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM Johor Bahru"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamjohorbahru/" target="_blank" style="color:black;">Facebook El Medina Spa Bekam Johor Bahru</a></h5>
                        </div>
                    </div>
                    <div class="row pl-2">
                        @include('branches.slider.johor_bahru')
                    </div>
                </div>
            </div>
            <hr/>
        </div>
        
    </div>
</div>

{{-- Carousel --}}

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000;">

    <ul class="uk-slider-items uk-grid">
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{asset('template/assets/carousel/branch/branch_kuantan.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100">Kuantan</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{asset('template/assets/carousel/branch/branch_bangi.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100">Bangi</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{asset('template/assets/carousel/branch/branch_shah_alam.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100">Shah Alam</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{asset('template/assets/carousel/branch/branch_johor.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100">Johor Bahru</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div> <br/>

@endsection

@section('js')

<script type="text/javascript">
UIkit.slider(element).startAutoplay();

</script>
@endsection