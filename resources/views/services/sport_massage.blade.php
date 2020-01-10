@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">SPORT MASSAGE</span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <p class="font-weight-light text-justify pt-5">
                    Urutan sukan@ sport massage adalah urutan yang ditujukan kepada mereka yang aktif dalam bidang2 kesukanan dan juga aktif dalam pekerjaan. Urutan sukan berbeza dengan urutan traditional 
                    atau biasa kerana sport massage menggunakan teknik2 tertentu seperti teknik urutan yang digabungkan dengan pelbagai pergerakan yang spesifik untuk meregangkan otot yang sakit, lenguh 
                    dan kekejangan disebabkan faktor pergerakan agresif dan berlebihan.
                </p>
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