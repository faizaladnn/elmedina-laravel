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

<div class="content">
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
                        <img src="{{ asset('public/template/assets/carousel/bangi/aisyah.jpg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Siti Nur Aishah </div>
                            <div class="uk-text-small">Massage Therapist & Physiotherapist</div>
                            <p>
                                Berkebolehan dalam bekam dan urutan tradisional serta sport massage. Mempunyai pengalaman 
                                dalam teknik dry needling dan dry cupping dan aktif dalam program health awareness dan 
                                health education.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/bangi/aniq.jpg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Aniq Syazwan </div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berpengalaman sebagai Physiotherapist  selama 2 tahun lebih dan mahir dalam urutan 
                                dan menjalani personal rehab training,injury prevention training and biomechanic training.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/bangi/ainun.jpg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Ainun Najihah </div>
                            <div class="uk-text-small">Sport Therapist & Massage Therapist </div>
                            <p>
                                Berkebolehan dalam berbekam dan mempunyai sijil Tahap 1 dalam Sport Massage dan 
                                sudah 2 tahun pengalaman dalam  urutan. Mahir mengendalikan TENS dan ultrasound.
                            </p>
                        </div>
                    </div>
                </div>
                
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