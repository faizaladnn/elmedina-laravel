@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">AIR RELAX THERAPY</span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <dl class="uk-description-list">
                    <dt><h5 class="text-uppercase">{{ __('common.duration') }}</h5></dt>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Air relax adalah alat sarung “ compression” dari kaki hingga ke peha (leg cuff). Apabila alat ini diaktifkan ia akan mengembang dan mengempis ke setiap bahagian 
                            kaki anda melalui mode yang disetkan. Ia juga dapat meningkatkan dan melancarkan peredaraan darah ke jantung  dengan baik. Air relax juga digunakan sebagai alat 
                            bantuan dalan proses recovery kerana ia mempunyai persamaan  urutan professional. Air relax mempunyai 5 mode  yang berlainan (“A”,”B”, “C”, “POINT”, “AUTO”). 
                            Air relax  juga dikenali juga sebagai terapi urutan yang dapat melancarkan peredaraan darah serta mengurangkan asid laktik  yang berpunca dari sukan yang 
                            banyak menggunakan kaki seperti berlari, berbasikal, bermain bola atau berdiri dalam masa yang lama. Air relax juga dapat mengurangkan sakit pada otot, 
                            meningkatkan flexible pada otot, meningkatkan imuniti dan untuk tidur yang lebih baik.
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Mengurangkan sakit pada otot</li>
                    <li>Meningkatkan peredaran darah</li>
                    <li>Meningkatkan flexibility pada otot</li>
                    <li>Meningkatkan imuniti</li>
                    <li>Untuk tidur lebih selesa</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <br/><br/>
                <a href="{{route('login')}}" class="btn btn-outline-wrng" style="border-width:medium; padding: 20px;"> <span class="uk-text-uppercase" style="color:black;">{{ __('common.make_an_appointment') }}</span></a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    @include('branches.slider.kuantan')
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
</script>
@endsection