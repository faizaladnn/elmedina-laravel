@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">DRY CUPPING / BEKAM</span></h4></div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <dl class="uk-description-list">
                    <dt><h5 class="text-uppercase">{{ __('common.duration') }}</h5></dt>
                    <dd>
                        <p class="font-weight-light">
                            Bekam merupakan satu amalan tradisional yang diamalkan dalam pelbagai budaya di seluruh dunia. 
                            Tujuan berbekam adalah untuk mengeluarkan darah kotor dari badan yang menjadi punca penurunan tahap kesihatan.
                        </p>
                    </dd>
                    <dt><h5 class="text-uppercase">Jenis-jenis bekam</h5></dt>
                    <dd>
                        <ul class="uk-list uk-list-bullet font-weight-light">
                            <li>
                                <span class="font-weight-bold">Bekam kering/bekam angin</span> - Peralatan bekam hanya diletakkan di atas permukaan kulit, kulit tidak ditoreh dan tiada pendarahan berlaku.
                            </li>
                            <li>
                                <span class="font-weight-bold">Bekam basah</span> - Kaedah ini melibatkan peralatan bekam yang diletakkan di atas permukaan kulit yang telah ditoreh/dicucuk dan berlaku 
                                pendarahan melalui luka tersebut yang dikumpul di dalam peralatan bekam.
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Mengurangkan ketegangan otot dan meningkatkan peredaran darah</li>
                    <li>Sedate the nervous system ( sesuai untuk merawat penyakit darah tinggi)</li>
                    <li>Untuk melegakan dan mengurangkan sakit belakang dan leher, mengurangkan keresahan kepenatan,migrain, rheumatism</li>
                </ul>
                <dl class="uk-description-list">
                    <dd>
                        <p class="font-weight-light">
                            Pelanggan yang ingin mendapatkan rawatan bekam mestilah berumur antara 10 hingga 65 tahun. Bagi pelanggan yang berumur lebih daripada 65 tahun, berbekam boleh 
                            dilakukan sekiranya mempunyai tahap kesihatan yang baik.
                        </p>
                    </dd>
                </dl>
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