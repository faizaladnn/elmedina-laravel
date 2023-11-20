@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bold uk-panel uk-padding-large uk-padding-remove-bottom uk-text-secondary"><h1>BANGI</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            <h4>
                <i data-feather="phone"></i> 017 - 727 1152 
                <a href="https://www.facebook.com/elmedinaspabekambangi/" class="btn btn-social" target="_blank" style="text-decoration:underline;"><i class="fab fa-facebook"></i> EL MEDINA BANGI</a>
                <i class="fas fa-home" title="Address"></i> 2nd Floor, 1-09-03, Jln Medan Pusat Bandar 7, Seksyen 9, 43650 Bandar Baru Bangi, Selangor
            </h4>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            <h4>
                <i data-feather="clock"></i>
                Monday - Sunday : 10AM - 10PM
            </h4>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            {{-- <a href="#" class="btn btn-outline-warning uk-animation-shake text-uppercase text-dark"> <span>{{ __('common.make_an_appointment') }}</span></a> --}}
        </div>
    </div>
</div>

{{-- <div class="content">
    <div class="container-fluid pl-2 pr-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2> {{ __('common.our_therapist') }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4@s uk-margin" uk-grid>
                    <div class="uk-card-media-left">
                        <img src="{{ asset('public/template/assets/carousel/bangi/wan_umi.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Wan Umi Amierah</div>
                            <div class="uk-text-small">Physiotherapists</div>
                            <p>
                                Mempunyai pengalaman dalam merawat dan mengendalikan pesakit yang mempunyai masalah dengan otot, saraf dan sistem musculoskeletal. 
                                Berkebolehan dalam bekam, urutan, dry cupping untuk pemulihan dan boleh mengendalikan alatan elektro terapi.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/bangi/nur_hidayah.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Nur Hidayah </div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Mempunyai ilmu berkaitan dengan otot dan sistem saraf serta berpengalaman dalam merawat pesakit strok/lumpuh 
                                badan dan masalah berkaitan otot dan tulang. Berkebolehan dalam bekam, urutan,tapping dan boleh mengendalikan alatan elektro terapi.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/bangi/khairul.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Khairul Syafiq </div>
                            <div class="uk-text-small">Sports Therapist</div>
                            <p>
                                Berkebolehan dalam urutan dan bekam. Mempunyai sijil Tahap 1 dalam sports massage. Selain daripada itu, pernah menjadi fisioterapi di atas padang.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/bangi/danial.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Muhammad Danial Adib</div>
                            <div class="uk-text-small">Sports Masseur</div>
                            <p>
                                Menjadi pembantu kecergasan atlet Karisma Uitm Perlis dengan mengembalikan kecergasan atlet menggunakan teknik sport massage. 
                                Berkebolehan dalam berbekam dan urutan relaxing yang lain.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div> --}}

<div class="content">
    <div class="container-fluid pl-2 pr-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2> {{ __('common.our_customers') }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @include('branches.slider.bangi')
            </div>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.491109200717!2d101.75445281525252!3d2.961142855104205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbe18e82a0db%3A0x5bae158640d76c66!2sEl%20Medina%20Spa%20Bekam%20-%20Bangi!5e0!3m2!1sen!2smy!4v1576500339532!5m2!1sen!2smy" 
width="100%" height="300px" frameborder="0" style="" allowfullscreen=""></iframe>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection