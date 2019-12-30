@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('template/assets/carousel/branch/branch_bangi.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bold uk-panel uk-padding-large uk-padding-remove-bottom uk-text-secondary"><h1>BANGI</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-text-secondary uk-padding-small">
            <h4>
                <i data-feather="phone"></i> 017 - 727 1152 
                <a href="https://www.facebook.com/elmedinaspabekambangi/" class="btn btn-social" target="_blank"><i class="fab fa-facebook"></i> EL MEDINA BANGI</a>
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
          <button type="button" class="btn btn-warning uk-animation-shake"><span style="font-size:0.9rem;">MAKE AN APPOINTMENT</span></button>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2> {{ __('common.our_therapist') }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{asset('template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Therapist 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="{{asset('template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Therapist 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{asset('template/assets/carousel/branch/branch_bangi.jpg')}}" alt="" uk-cover>
                        <canvas width="100%" height="100%"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Therapist 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

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