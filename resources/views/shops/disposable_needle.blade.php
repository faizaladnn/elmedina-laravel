@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-small" 
    style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark">
            <h4><span style="background-color:white;" class="">{{ __('common.jarum_pakai_buang') }}</span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid uk-padding-small">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <img src="{{asset('public/template/assets/carousel/shop/jarum_pakai_buang.jpeg')}}" alt="">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <h3>{{ __('common.jarum_pakai_buang') }}</h3>
                <dl class="uk-description-list uk-description-list-divider">
                    <dt style="padding-bottom: 10px;">{{ __('common.duration') }}</dt>
                    <dd>Material: Stainless steel and Plastic</dd>
                    <dd>{{ __('common.applicable_whole_body') }}</dd>
                    <dd>Model: 21G</dd>
                    <dt style="padding-bottom: 10px;">1 Box: 200 pcs</dt>
                    {{-- <dd></dd> --}}
                    <dt>RM 65.00 / {{ __('common.box') }} </dt>
                    <dt style="padding-bottom: 10px;">Inquiry :</dt>
                    <dd>Call/Whatsapp : 
                        <a href="tel:+60108387030">
                            0108387030
                        </a>

                        <a href="https://mywa.link/6hemvos7" target="_blank" title="Click here to order !">
                            <img src="{{asset('public/template/assets/carousel/shop/whatsapp.png')}}" alt="" width="50px" height="50px">
                        </a>
                    </dd>
                    <dd>Location : A75-1, Jalan IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang</dd>
                </dl>


            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
</script>
@endsection