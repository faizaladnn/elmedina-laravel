@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-left-center" style="background-image: url({{ asset('public/template/assets/carousel/branch/branch_johor.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bolder uk-panel uk-text-secondary uk-padding-large uk-padding-remove-bottom"><h1>JOHOR BAHRU</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            <h5>
                <i data-feather="phone"></i> 013 - 999 8458 
                <a href="https://www.facebook.com/elmedinaspabekamjohorbahru/" class="btn btn-social" target="_blank" style="text-decoration:underline;"><i class="fab fa-facebook"></i> EL MEDINA JOHOR BAHRU</a>
                <i class="fas fa-home" title="Address"></i> 29, Uda Business Centre, 01, Jln Padi Emas 1/5, Bandar Baru Uda, 81200 Johor Bahru, Johor
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            <h5>
                <i data-feather="clock"></i>
                Monday - Sunday : 10AM - 10PM
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            {{-- <a href="#" class="btn btn-outline-warning uk-animation-shake text-uppercase"> <span>{{ __('common.make_an_appointment') }}</span></a> --}}
        </div>
    </div>
</div>


<div class="content">
    <div class="container-fluid pl-2 pr-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2> {{ __('common.our_therapist') }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid>
                    {{-- <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div> --}}
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Mohamad Hanafi</div>
                            <div class="uk-text-small">Traditional & Complementari Therapist & Sport Therapist</div>
                            <p>
                                Mahir dan berpengalaman dalam bidang terapi bekam dengan pelbagai teknik tradisional. 
                                Merupakan juruterapi senior di El Medina.Selain itu, mahir dalam urutan traditional 
                                untuk masalah angin dan urat simpul.Berkebolehan dalam urutan sukan yang asas dan amat 
                                mahir dalam teknik cupping mobility untuk menyelesaikan masalah sport injuries.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div> --}}
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Shima Mohammad</div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berkebolehan dalam teknik cupping. Mahir dalam ilmu terkait dengan otot dan sistem saraf 
                                dan mempunyai pengalaman dalam merawat pesakit strok@ lumpuh badan/ masalah jantung dan 
                                masalah yang terkait tulang dan otot.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Indok Naedah Farhana</div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berkebolehan dalam bekam dan urutan. Mempunyai pengalaman mengurut ibu selepas 
                                bersalin dan bayi dan juga merawat pesakit strok dan pediatric.
                            </p>
                        </div>
                    </div>
                </div>

                
                {{-- <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Indok Naedah Farhana</div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berkebolehan dalam bekam dan urutan. Mempunyai pengalaman mengurut ibu selepas 
                                bersalin dan bayi dan juga merawat pesakit strok dan pediatric.
                            </p>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-2 pr-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2> {{ __('common.our_customers') }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @include('branches.slider.johor_bahru')
            </div>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16421.356899928163!2d103.69805845728803!3d1.4905870294991632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da72bee481bedf%3A0xdff5448648e97aa3!2sEl%20Medina%20Spa%20Bekam%20-%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1576500453749!5m2!1sen!2smy" 
width="100%" height="300px" frameborder="0" style="" allowfullscreen=""></iframe>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection