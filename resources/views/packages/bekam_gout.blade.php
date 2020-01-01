@extends ('layouts.master')
@section ('content')
<div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('template/assets/carousel/branch/branch_bangi.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bold uk-panel uk-padding-large uk-padding-remove-bottom uk-text-secondary"><h1>BEKAM ANGIN</h1></div>
        <div class="uk-text-left uk-text-bold uk-panel uk-padding-small uk-padding-remove-bottom uk-text-secondary pl-5">
            <h4>
                Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang
            </h4>
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

@endsection
@section('js')
<script type="text/javascript">
</script>
@endsection