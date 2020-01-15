@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
  <div class="container-fluid pl-5 pr-5">
    <div class="align-items-center justify-content-between">
      
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="text-uppercase text-left ">{{ __('common.services') }}</h3>
        </div>
      </div>

      <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/bekam.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold"> Bekam / Hijama </h5>
                    <p class="uk-text-light">Mengurangkan ketegangan otot dan meningkatkan peredaran darah.</p>
                    <a href="{{route('services.bekam')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/massage.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold"> Urutan / Massage </h5>
                    <p class="uk-text-light">Urutan sukan @ sport massage adalah urutan yang ditujukan kepada mereka yang aktif dalam bidang2 kesukanan dan juga aktif dalam pekerjaan.</p>
                    <a href="{{route('services.sport-massage')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/air_relax.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Air Relax Therapy</h5>
                    <p class="uk-text-light">Sesuai untuk yang banyak menggunakan kaki dalam pekerjaan harian.</p>
                    <a href="{{route('services.air-relax')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>

      <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/hypervolt.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Vibration Therapy (Hypervolt)</h5>
                    <p class="uk-text-light">Digunakan untuk meningkatkan persembahan fizikal.</p>
                    <a href="{{route('services.hypervolt')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/electro_therapy.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Electro Therapy (TENS)</h5>
                    <p class="uk-text-light">Bebas dari sebarang ubatan dan menghasilkan Endorphins.</p>
                    <a href="{{route('services.electro-therapy')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/ultrasound.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Ultrasound Therapy</h5>
                    <p class="uk-text-light">Ultrasound Therapy adalah penggunaan gelombang bunyi untuk mengurangkan sakit sendi-sendi pada badan.</p>
                    <a href="{{route('services.ultrasound')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('public/template/assets/carousel/services/kinesio_tapping.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Kinesio Taping</h5>
                    <p class="uk-text-light">Membentuk ruang antara sendi dan meningkatan peredaran darah.
                    </p>
                    <a href="{{route('services.kinesio-taping')}}" class="btn btn-outline-warning text-dark">Learn More</a>
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