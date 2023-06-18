@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-uppercase ">{{ __('common.branches') }}</h3>
            </div>
        </div>
        {{-- <div class="row pb-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select class="form-control select2" name="branch" id="branch">
                  <option value="">Please Select Location</option>
                  <option value="Pahang">PAHANG</option>
                  <option value="Kuala Lumpur">KUALA LUMPUR</option>
                </select>
            </div>
        </div> --}}
        <div id="div"></div>

        <div id="all-branches">
            {{-- Kuantan --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
                            width="100%" height="100%" frameborder="0" style="" allowfullscreen="" class="df-example"></iframe>
                            <canvas width="100%" height="100%"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-text-bold"><a href="{{route('branches.kuantan') }}" style="color:black;">EL MEDINA SPA BEKAM Kuantan</a></h3>
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
                    </div>
                </div>
            </div>

            {{-- Shah Alam --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
                            width="100%" height="100%"  frameborder="0" style="" allowfullscreen=""></iframe>
                            <canvas width="100%" height="100%"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-text-bold"><a href="{{route('branches.shah-alam') }}" style="color:black;">EL MEDINA SPA BEKAM Shah Alam </a></h3>
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
                    </div>
                </div>
            </div>

            {{-- Ulu Klang --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5761908200093!2d101.75463901426286!3d3.2054137536992826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc399ec2f54fd1%3A0xd80a5aca4960b3b6!2sEl%20Medina%20Bekam%20and%20Recovery%20Ulu%20Klang!5e0!3m2!1sen!2smy!4v1633719169655!5m2!1sen!2smy" 
                            width="100%" height="100%"  frameborder="0" style="" allowfullscreen=""></iframe>
                            <canvas width="100%" height="100%"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-text-bold"><a href="{{route('branches.ulu-klang') }}" style="color:black;">EL MEDINA SPA BEKAM Ulu Klang </a></h3>
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                                        <i class="fas fa-home" title="Address"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                                        <h5>11-1, Jalan Lingkaran Tengah 2, Ukay Boulevard Ulu Klang, 68000 Ampang, Selangor</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                                        <i class="fas fa-phone" title="Telephone Number"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                                        <h5>010-454 7030  </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                                        <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM +item.branchName+"></i>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                                        <h5> <a href="https://www.facebook.com/elmedinahulukelang" target="_blank" style="color:black;">Facebook El Medina Spa Bekam Ulu Klang </a></h5>
                                    </div>
                                </div>
                                <div class="row pl-2">
                                    @include('branches.slider.hulu_klang')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Carousel --}}

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000;">

    <ul class="uk-slider-items uk-grid">
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{ asset('public/template/assets/carousel/branch/branch_kuantan.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100" class=" uk-text-uppercase">Kuantan</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{ asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100" class=" uk-text-uppercase">Shah Alam</h2>
                    {{-- <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p> --}}
                </div>
            </div>
        </li>
        <li class="uk-width-4-5">
            <div class="uk-panel">
                <img src="{{ asset('public/template/assets/carousel/branch/branch_ulu_klang.jpeg')}}" alt="">
                <div class="uk-position-center uk-text-center">
                    <h2 uk-slider-parallax="x: 100,-100" class=" uk-text-uppercase">Ulu Klang</h2>
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