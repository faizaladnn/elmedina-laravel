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
                    <img src="{{asset('template/assets/carousel/services/stretching.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Stretching</h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/bekam.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Dry Cupping / Bekam</h5>
                    <p class="uk-text-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/air_relax.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Air Relax Therapy</h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
    </div>

      <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/hypervolt.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Vibration Therapy (Hypervolt)</h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/kinesio_tapping.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Kinesio Taping</h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/electro_therapy.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Electro Therapy (TENS)</h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <img src="{{asset('template/assets/carousel/services/massage.jpg')}}" alt="">
                </div>
                <div class="uk-card-body">
                    <h5 class="uk-text-uppercase uk-text-bold">Sport massage </h5>
                    <p class="uk-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
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