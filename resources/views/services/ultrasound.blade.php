@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">Ultrasound Therapy</span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <dl class="uk-description-list">
                    <dt><h5 class="text-uppercase">{{ __('common.duration') }}</h5></dt>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Terapi ultrasound merupakan sejenis thermotherapy (terapi panas) yang menggunakan arus gelombang pemanasan dari dalam yang dapat mengurangkan kesakitan pada sendi dan otot.
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify"> 
                            Terapi ultrasound dapat mengurangkan masalah seperti bengkak, otot spasm , radang saraf, tendinitis (keradangan pada tendon), bursitis (keradangan pada bursa yang berada 
                            antara tendon dan tulang), sprain (kecederaan pada ligament), strain(kecederaan otot) ,kecederaan rotator  cuff , frozen shoulder (bahu beku) ,arthritis dan carpal tunnel syndrome.
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify"> 
                            Antara kebaikan terapi ultrasound adalah dapat mempercepatkan proses pemulihan pada kecederaan pada otot tisu , ligament dan tendon, mengurangkan bengkak, melancarkan peredaraan 
                            darah serta mengurangkan sakit.
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Mengurangkan kecederaan otot</li>
                    <li>Mengurangkan sakit sendi-sendi pada badan</li>
                    <li>Muscle spasm</li>
                    <li>Mengurangkan bengkak</li>
                    <li>Mempercepatkan kadar penyembuhan pada tisu otot</li>
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
                    @include('branches.slider.johor_bahru')
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