@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-bottom" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4 style="background-color:white;">STRETCHING</h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="uk-text-large uk-text-bold">Rates</div>
                <p class="uk-text-small uk-text-light">
                    RM 50 - RM 150
                </p>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <br/><br/>
                <p class="uk-text-small uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <br/><br/>
                <a href="{{route('login')}}" class="btn btn-outline-warning"> <span class="uk-text-uppercase" style="color:black;">{{ __('common.make_an_appointment') }}</span></a>
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