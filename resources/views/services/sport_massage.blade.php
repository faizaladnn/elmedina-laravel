@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">URUTAN / MASSAGE</span></h4></div>
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
                            Urutan adalah satu proses memulihkan kesihatan dengan cara menekan kawasan badan dengan hujung jari, tapak tangan, lengan, siku dengan  tenknik urutan yang sistematik dan teratur.. 
                            Urutan boleh digunakan pada yang terseliuh, terkehel,sakit urat saraf, sakit kepala dan lenguh-lenguh seluruh badan. Ini adalah diantara penyakit yang boleh dikategorikan 
                            penyakit-penyakit ringan tetapi kalau dibiarkan ia boleh menjadi serius. Antara manfaat urutan ialah mengurangkan sakit kepala, mengurangkan sakit belakang, mengurangkan sakit sendi, 
                            mengurangkan lenguh-lenguh badan dan juga mengatasi masalah stress.
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Mengurangkan tekanan pada otot</li>
                    <li>Meningkatkan pelbagai pergerakan</li>
                    <li>Meningkatkan prestasi sukan</li>
                    <li>Meningkatkan fungsi tisu lembut</li>
                    <li>Mengurangkan kekejangan otot dan keletihan</li>
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