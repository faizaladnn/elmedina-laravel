@extends ('layouts.master')

@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium uk-flex-center uk-flex-middle uk-background-cover uk-light" 
    style="background-image: url({{ asset('public/template/assets/carousel/cover_6.jpg')}});">
</div>

    <div class="content content-fixed">
        <div class="container-fluid pl-2 pr-2">
      
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="text-uppercase text-left">{{ __('common.shop') }}</h3>
              </div>
            </div>

            <div class="uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-2@s" uk-grid>
                <div>
                    <a href="{{route('shop.disposable-cup')}}">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{asset('public/template/assets/carousel/shop/cup_pakai_buang.jpeg')}}" alt="">
                            </div>
                            <div class="uk-card-body shop-card">
                                <h3 class="uk-card-title shop-card-title text-center">{{__('common.cup_pakai_buang')}}</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{route('shop.disposable-needle')}}">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{asset('public/template/assets/carousel/shop/jarum_pakai_buang.jpeg')}}" alt="">
                            </div>
                            <div class="uk-card-body shop-card">
                                <h3 class="uk-card-title shop-card-title text-center">{{__('common.jarum_pakai_buang')}}</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> --}}
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            
        </div>
    </div>

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection