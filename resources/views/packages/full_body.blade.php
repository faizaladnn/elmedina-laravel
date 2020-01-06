@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-bottom" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4 style="background-color:white;">BEKAM SUNNAH FULL BODY</h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="" uk-grid>
            <div class="uk-width-1-4">
                <div class="uk-card uk-card-hover uk-card-body">
                    <dl class="uk-description-list">
                        <dt>Harga</dt>
                        <dd>RM 180 (VIP)</dd>
                        <dd>RM 160 (NORMAL)</dd>
                    </dl>
                </div>
            </div>
            <div class="uk-width-3-4">
                <div class="uk-card uk-card-hover uk-card-body">
                    <dl class="uk-description-list">
                         <dt>&nbsp;</dt>
                        <dd>Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang</dd>
                        <dd>Free: Urutan Ringkas, Urutan Guasha, Bekam Luncur, dan Bekam Angin</dd>
                    </dl>
                </div>
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