@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">TENS (Transcutaneous Electrical Nerve Stimulation)</span></h4></div>
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
                            TENS adalah kaedah yang digunakan untuk mengurangkan sakit (pain relief) dengan menggunakan aliran elektrik yang rendah. 
                            Pad diletakkan secara terus pada kulit dan aliran elektrik dimasukkan pada kawasan badan yang sakit, seterusnya badan akan terasa seperti sesemut (tingling sensation)
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Impuls elektrik akan mengurangkan signal sakit dan juga akan stimulasikan penghasilan endorphins iaitu “body natural painkillers”
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            TENS boleh digunakan pada pesakit yang mengalami arthritis, period pain, sakit lutut,sakit leher,sakit belakang dan pelbagai lagi.
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Bebas dari sebarang ubatan</li>
                    <li>Menghasilkan Endorphins</li>
                    <li>Mengurangkan rasa sakit</li>
                    <li>Melatih semula saraf</li>
                    <li>Mengurangkan keradangan</li>
                    <li>Sesuai untuk chronic dan acute pain</li>
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