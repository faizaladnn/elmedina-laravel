@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">Needling Treatments</span></h4></div>
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
                            Dry needling ialah prosedur di mana jarum filirom dimasukkan ke tubuh melalui permukaan kulit hingga ke tisu otot yang dikehendaki untuk memberi kesan terapuetik. 
                            Tiada ubat yang diperlukan sebab itu ianya digelar "dry" dibandingkan dengan suntikkan dimana ianya "wet" kerana ada ubat dimasukkan pada permukaan yang disuntik. 
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Pengunaan jarum yang digunakan adalah berdasarkan kedalaman tisu yang disasarkan. Dry needling mengunakan "clean field technique" dimana hanya sedikit atau 
                            tiada darah yang keluar dari permukaan yang dicucuk. 
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Mengurangkan sakit</li>
                    <li>Mengurangkan muscle tension</li>
                    <li>Mengurangkan muscle spasm</li>
                    <li>Stimulasikan otot untuk "contract and relax"</li>
                    <li>Memperbaiki "joint range of motion"</li>
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