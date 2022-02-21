@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{ asset('public/template/assets/carousel/branch/branch_kuantan.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-large uk-padding-remove-bottom"><h1>KUANTAN</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="phone"></i> 010-838 7030 
                <a href="https://www.facebook.com/elmedina.kuantan" class="btn btn-social" target="_blank" style="text-decoration:underline;"><i class="fab fa-facebook"></i> EL MEDINA KUANTAN</a>
                <i class="fas fa-home" title="Address"></i> A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="clock"></i>
                Monday - Sunday : 10AM - 10PM
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            {{-- <a href="#" class="btn btn-outline-warning uk-animation-shake text-uppercase"> <span>{{ __('common.make_an_appointment') }}</span></a> --}}
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

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Shamsuhaimi </div>
                            <div class="uk-text-small">Massage therapist & Specialist Cupping</div>
                            <p>
                                Berpengalaman dalam bidang bekam dan urutan tradisional. Mahir dalam 
                                teknik dry cupping dan berpengalaman bersama pasukan bola sepak tempatan dalam program sport recovery.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Muhammad Shahrul Safuan </div>
                            <div class="uk-text-small">Physiotherapist & Sport Therapist</div>
                            <p>
                                Berpengalaman dalam cupping therapy dan juga mengendalikan kes-kes musculoskeletal dan 
                                sport injury. Berkemahiran dalan sport massage dan pernah menjadi fisioterapis di 
                                sebuah kelab bola sepak tempatan dan program sukan di dalam negara.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Siti Aisyah </div>
                            <div class="uk-text-small">Sport therapist & Massage therapist</div>
                            <p>
                                Berkebolehan dalam melakukan bekam dan urutan dan berpengalaman menjadi sport 
                                physiotherapist di pusat fisioterapi. Boleh mengendalikan TENS, ultrasound , 
                                tapping untuk rawatan sport injury.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Siti Aisyah </div>
                            <div class="uk-text-small">Sport therapist & Massage therapist</div>
                            <p>
                                Berkebolehan dalam melakukan bekam dan urutan dan berpengalaman menjadi sport 
                                physiotherapist di pusat fisioterapi. Boleh mengendalikan TENS, ultrasound , 
                                tapping untuk rawatan sport injury.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ asset('public/template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Aizat bin Abdul Razak</div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berpengalaman dalam stroke rehabilitation, sports injury rehabilitation, 
                                taping, manual therapy, cupping, sport massage dan boleh mengendalikan 
                                electro therapy modalities seperti ultrasound,TENS Shockwave Diathermy dan Infrared.
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
                @include('branches.slider.kuantan')
            </div>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
width="100%" height="300px" frameborder="0" style="" allowfullscreen=""></iframe>


@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection