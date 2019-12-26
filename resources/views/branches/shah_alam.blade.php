@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('template/assets/carousel/branch/branch_shah_alam.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-large uk-padding-remove-bottom"><h1>SHAH ALAM</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="phone"></i> 013 - 200 9518 
                <a href="https://www.facebook.com/elmedinaspabekamshahalam/" class="btn btn-social" target="_blank"><i class="fab fa-facebook"></i> EL MEDINA SHAH ALAM</a>
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
          <button type="button" class="btn btn-warning uk-animation-shake"><span style="font-size:0.9rem;">MAKE AN APPOINTMENT</span></button>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Our Therapist</h2>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
width="100%" height="300px" frameborder="0" style="" allowfullscreen=""></iframe>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection