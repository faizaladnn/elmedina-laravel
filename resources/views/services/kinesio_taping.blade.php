@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">KINESIO TAPING</span></h4></div>
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
                            Kenesio tape digunakan untuk memberikan sokongan pada badan, mengurangkan sakit, mengurangkan bengkak dan meningkatkan mutu persembahan di dalam sukan.
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Kenesio taping diperbuat daripada gabungan kapas dan nylon tidak menghalang pergerakkan badan. 
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Apabila tape diletakkan pada badan, ianya mengangkat sedikit permukaan kulit dan dapat membantu membentuk ruang ruang halus di antara permukaan kulit dan tisu di bawah lapisannya.
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Kenesio tape juga mampu membantu di dalam melancarkan peredaran darah dan mengurangkan bengkak di kawasan permukaan yang sakit.
                        </p>
                    </dd>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Kenesio tape boleh digunakan untuk merawat kecederaan sukan, memberi sokongan kepada bahagian yang lemah, re-edecating muscle, meningkatkan mutu permainan dalam sukan.
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Membentuk ruang antara sendi</li>
                    <li>Meningkatan peredaran darah</li>
                    <li>Memberi sokongan kepada tempat yang lemah</li>
                    <li>Melatih semula otot</li>
                    <li>Meningkatkan persembahan dalam sukan</li>
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