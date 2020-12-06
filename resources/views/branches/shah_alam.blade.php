@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{ asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-large uk-padding-remove-bottom"><h1>SHAH ALAM</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="phone"></i> 013 - 200 9518 
                <a href="https://www.facebook.com/elmedinaspabekamshahalam/" class="btn btn-social" target="_blank" style="text-decoration:underline;"><i class="fab fa-facebook"></i> EL MEDINA SHAH ALAM</a>
                <i class="fas fa-home" title="Address"></i> No. 17, 1, Jalan Plumbum R 7/R, Seksyen 7, 40000 Shah Alam, Selangor
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
                        <img src="{{ asset('public/template/assets/carousel/shah_alam/therapist3.jpg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Nazeera </div>
                            <div class="uk-text-small">Sport Therapist</div>
                            <p>
                                Mahir dalam sport massage dan juga cupping. Pernah bersama team Perak untuk Sukma 2018 
                                dan MSSM 2019 untuk team Terengganu sebagai sport therapist dan aktif dalam pelbagai 
                                event booth massage.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left">
                        <img src="{{ asset('public/template/assets/carousel/shah_alam/therapist1.jpg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Muhamad Adam Asyraff </div>
                            <div class="uk-text-small">Sport Therapist</div>
                            <p>
                                Berkebolehan dalam sport massage, cupping dan sport injury. 
                                Berpengalaman sebagai sport therapist dalam beberapa kejohanan sukan. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4@s uk-margin" uk-grid>
                    <div class="uk-card-media-left">
                        <img src="{{ asset('public/template/assets/carousel/shah_alam/najwa.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Nurul Najwa </div>
                            <div class="uk-text-small">Physiotherapist</div>
                            <p>
                                Berkebolehan dalam wet & dry cupping serta sport massage. Mempunyai pengalaman 
                                merawat dan mengendalikan kes Musculoskeletal & Neurology. Berpengalaman dalam 
                                menyelesaikan masalah muscle weakness & muscle tightness.
                            </p>
                        </div>
                    </div>
                    <div class="uk-card-media-left uk-flex-middle">
                        <img src="{{ asset('public/template/assets/carousel/shah_alam/fitri.jpeg')}}" alt="" uk-img>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body" style="color:black;">
                            <div class="uk-text-large">Muhd Fitri Firdaus </div>
                            <div class="uk-text-small">Sport Therapist</div>
                            <p>
                                Kelulusan bidang Sarjana Muda Sains Sukan (Kepujian) dan mempunyai sijil kemahiran sport massage dan tapping. 
                                Mahir dan berpengalaman dalam bidang terapi bekam dan berkebolehan dalam teknik cupping mobility.
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
                @include('branches.slider.shah_alam')
            </div>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
width="100%" height="300px" frameborder="0" style="" allowfullscreen=""></iframe>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection