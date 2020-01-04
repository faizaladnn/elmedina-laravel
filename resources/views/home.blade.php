@extends ('layouts.master')

@section ('content')
{{-- Carousel --}}
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000;">
  <ul class="uk-slider-items uk-grid">
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('template/assets/carousel/cover_2.jpg')}}" alt="">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('template/assets/carousel/cover_3.jpg')}}" alt="">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('template/assets/carousel/cover_4.jpg')}}" alt="">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" alt="">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('template/assets/carousel/cover_6.jpg')}}" alt="">
          </div>
      </li>
  </ul>

  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>{{-- Carousel End --}}
    
    {{-- SERVICES --}}
    <div class="content" style="">
      <div class="container-fluid pl-5 pr-5">
          <div class="align-items-center justify-content-between">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="text-uppercase text-center ">{{ __('common.services') }}</h3>
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
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <a href="{{route('services.')}}">
                <button class="btn btn-block btn-outline-warning" style="color:black;">MORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- END OF SERVICES --}}


    {{-- TESTIMONI --}}
    <div class="content" style="">
        <div class="container-fluid pl-4 pr-4">
            <div class="align-items-center justify-content-between">
              {{-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-uppercase text-center ">{{ __('common.testimony') }}</h3>
                </div>
              </div> --}}

              <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('template/assets/carousel/branch/branch_shah_alam.jpg')}});">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true; autoplay:true; autoplay-interval: 3000;">
                      <ul class="uk-slider-items uk-grid">
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_1.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">YAM Tengku Amir</h3>
                                      <p class="uk-margin-remove">"Guys here have a magic hands"</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_2.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Syamim Yahya</h3>
                                      <p class="uk-margin-remove">"Bersih, selesa dan privacy serta mewah dengan harga berpatutan"</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_3.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Safiq Rahim</h3>
                                      <p class="uk-margin-remove">"Service Terbaik..yang berminat nak buat bekam dan urut kampung boleh datang ke El Medina Spa Bekam"</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_7.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Azrel Ismail</h3>
                                      <p class="uk-margin-remove">"Selain bekam darah, paling best sport massage with the new equipment they call Hypervolt. For those yang ada masalah muscle, anda kena dapatkan treatment ini."</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_4.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Along Cham</h3>
                                      <p class="uk-margin-remove">"Paling penting tempat ni cukup selesa, bersih dan cup pakai buang"</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_5.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Farizal Marlias</h3>
                                      <p class="uk-margin-remove">"Spa bekam terbaik! Menjalankan servis bekam sunnah dan menggunakan konsep berbekam disposable cups (cawan pakai buang), spa dan servis tip top!"</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_6.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Dickson Nwakame</h3>
                                      <p class="uk-margin-remove">"El Medina is good. I always do dry cupping and sport massage here for my hamstring and good recovery."</p>
                                  </div>
                              </div>
                          </li>
                          <li class="uk-width-1-2">
                              <div class="uk-panel">
                                  <img src="{{asset('template/assets/carousel/testimoni/testimony_8.jpg')}}" alt="" >
                                  <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                      <h3 class="uk-margin-remove">Nonny Nadirah</h3>
                                      <p class="uk-margin-remove">"Badan rasa ringan gila !!. korang kena try gaiss !!."</p>
                                  </div>
                              </div>
                          </li>
                      </ul>
                      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    {{-- END OF TESTIMONI --}}
    
    {{-- <div class="content content-fixed">
        <div class="container-fluid pl-5 pr-5">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="text-justify">
                        {{ __('common.paragraph_1') }}
                    </p>
                </div>
              </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection