@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">BEKAM GOUT</span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <dl class="uk-description-list">
                    <dt><h5 class="text-uppercase">{{ __('common.duration') }}</h5></dt>
                    <dd>{{ __('common.bekam_gout') }}</dd>
                    <dt><h5 class="text-uppercase">{{ __('common.free') }}</h5></dt>
                    <dd>{{ __('common.full_body_free') }}</dd>
                </dl>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Membuang kristal uric acid</li>
                    <li>Mengurangkan rasa sakit</li>
                    <li>Membaik pulih sistem organ badan</li>
                    <li>Mengurangkan bengkak pada sendi</li>
                    {{-- <li>Mengurangkan risiko penyakit</li> --}}
                </ul>
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