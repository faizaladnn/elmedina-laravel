@extends ('layouts.master')

@section ('content')

{{-- Carousel --}}
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000;">
  <ul class="uk-slider-items uk-grid">
      {{-- <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/img/banner.jpg')}}" alt="" class="banner">
          </div>
      </li> --}}
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/carousel/cover_2.jpg')}}" alt="" class="banner">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/carousel/cover_3.jpg')}}" alt="" class="banner">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/carousel/cover_4.jpg')}}" alt="" class="banner">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/carousel/cover_5.jpg')}}" alt="" class="banner">
          </div>
      </li>
      <li class="uk-width-1-1">
          <div class="uk-panel">
              <img src="{{asset('public/template/assets/carousel/cover_6.jpg')}}" alt="" class="banner">
          </div>
      </li>
  </ul>

  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>{{-- Carousel End --}}

    {{-- Why El Medina ? --}}
    <div class="content pt-4" style="">
        <div class="container-fluid pl-3 pr-3">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h2 class="text-uppercase font-weight-bold">{{ __('common.why_elmedina') }}</h2>
                </div>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                      <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                              <span uk-icon="icon: star; ratio: 2.5"></span>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.various_treatments') }}</h4>
                            <p class="font-weight-light">Menyediakan perkhidmatan bekam, urutan badan, sport massage dan sport recovery untuk Lelaki dan Wanita.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 2.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.syariah_compliance') }}</h4>
                            <p class="font-weight-light">Patuh syariah, privacy, bilik yg selesa dan berasingan, aurat terjaga sepenuhnya.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 2.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.various_therapist') }}</h4>
                            <p class="font-weight-light">Ahli terapi terdiri daripada Massage Therapist, Physiotherapist, Sport Therapist, Specialist in Cupping Therapy dan 100% Ahli Terapi Bumiputera.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 2.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.treatment_many_ways') }}</h4>
                            <p class="font-weight-light">Menggabungkan rawatan tradisional dan moden.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 2.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.many_choices') }}</h4>
                            <p class="font-weight-light">Spa yang menjadi pilihan ramai Selebriti, Atlet dan juga Kerabat Diraja.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 2.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h4 class="font-weight-bold">{{ __('common.professional') }}</h4>
                            <p class="font-weight-light">Profesional dan Hygiene terjaga, dijamin suci dan bersih.</p>
                          </div>
                      </div>
                  </div>
              </div>
            
        </div>
    </div>
</div>

    {{-- SERVICES --}}
    <div class="content" style="">
      <div class="container-fluid pl-5 pr-5">
          <div class="align-items-center justify-content-between">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h2 class="text-uppercase text-center font-weight-bold">{{ __('common.services') }}</h2>
              </div>

              <div class="uk-child-width-1-4@m" uk-grid>
                <div>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-media-top">
                            <img src="{{asset('public/template/assets/carousel/services/bekam.jpg')}}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-uppercase uk-text-bold">Bekam (Bekam Sunnah, Wajah, Migrain, Gout)</h5>
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
                            <h5 class="uk-text-uppercase uk-text-bold">Sport massage / Message Therapy</h5>
                            <p class="uk-text-light">Urutan sukan @ sport massage adalah urutan yang ditujukan kepada mereka yang aktif dalam bidang2 kesukanan dan juga aktif dalam pekerjaan.</p>
                            <a href="{{route('services.sport-massage')}}" class="btn btn-outline-warning text-dark">Learn More</a>
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
                            <a href="{{route('services.air-relax')}}" class="btn btn-outline-warning text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-media-top">
                            <div class="uk-inline">
                                <img src="{{asset('public/template/assets/carousel/services/postnatal.jpg')}}" alt="">
                                <div class="uk-overlay-primary uk-position-cover"></div>
                                <div class="uk-overlay uk-position-center uk-light">
                                    <h3>{{ __('common.coming_soon') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-uppercase uk-text-bold">Pre and Post Natal Treatments</h5>
                            <p class="uk-text-light">
                                Rawatan dan latihan untuk memastikan pra-kehamilan, kehamilan, dan kelahiran yang sihat dan penghantaran untuk ibu dan bayi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <a href="{{route('services.')}}">
                <button class="btn btn-block btn-outline-warning" style="color:black;">{{ __('common.more') }}</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- What We Offer --}}
    <div class="content pt-5 pb-5" style="">
        <div class="container-fluid pl-5 pr-5">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="uk-grid-match " uk-grid>
                        <div class="uk-width-1-5@m uk-width-1-3@l">
                            <h2 class="text-uppercase font-weight-bold">What we offer</h2>
                        </div>
                        <div class="uk-width-3-5@m uk-width-2-3@l">
                            <ul uk-accordion>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h3 class="font-weight-bold"><span uk-icon="icon: home; ratio: 1.5"></span> Community Events</h3></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        Our team of expert therapists will personalize a mobility and treatment program specifically for your community. 
                                        Plus, our dedicated community team helps with every detail, ensuring you receive a customized and unforgettable experience.
                                    </div>
                                </li>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h3 class="font-weight-bold"><span uk-icon="icon: happy; ratio: 1.5"></span> Wellness Programs</h3></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        The team that stays healthy together, sticks together. Get colleagues or clients to participate in custom 
                                        Mobility Workshops or Treatment Sessions to improve their overall health. Book a tailored experience for 
                                        your wellness program, team bonding, or just to show your appreciation.
                                    </div>
                                </li>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h3 class="font-weight-bold"><span uk-icon="icon: users; ratio: 1.5"></span> Brand Partnerships</h3></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        Whether its Educational Workshops or Interactive Demonstrations, we partner with leading 
                                        lifestyle and wellness brands on a series of major events to offer exclusive programming to help create an elevated brand experience.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    {{-- TESTIMONI --}}
    <div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}});">
        {{--  center: true; autoplay:true; autoplay-interval: 3000; --}}
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-2" uk-slider="clsActivated: uk-transition-active;center: true; autoplay:true; autoplay-interval: 3000;">
          <ul class="uk-slider-items uk-grid">
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_1.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">YAM Tengku Amir</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Guys here have a magic hands"</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_2.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Syamim Yahya</h2>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Bersih, selesa dan privacy serta mewah dengan harga berpatutan"</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_3.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Safiq Rahim</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Service Terbaik..yang berminat nak buat bekam dan urut kampung boleh datang ke El Medina Spa Bekam"</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_7.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Azrel Ismail</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Selain bekam darah, paling best sport massage with the new equipment they call Hypervolt. For those yang ada masalah muscle, anda kena dapatkan treatment ini."</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_4.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Along Cham</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Paling penting tempat ni cukup selesa, bersih dan cup pakai buang"</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_5.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Farizal Marlias</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Spa bekam terbaik! Menjalankan servis bekam sunnah dan menggunakan konsep berbekam disposable cups (cawan pakai buang), spa dan servis tip top!"</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_6.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Dickson Nwakame</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"El Medina is good. I always do dry cupping and sport massage here for my hamstring and good recovery."</h6>
                      </div>
                  </div>
              </li>
              <li class="uk-width-1-2">
                  <div class="uk-panel">
                      <img src="{{asset('public/template/assets/carousel/testimoni/testimony_8.jpg')}}" alt="" width="100%">
                      <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                          <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Nonny Nadirah</h3>
                          <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Badan rasa ringan gila !!. korang kena try gaiss !!."</h6>
                      </div>
                  </div>
              </li>
          </ul>
          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
      </div>
    </div>
    
    {{-- Strategic Partner --}}
    <div class="content pt-5" style="">
        <div class="container-fluid pl-5 pr-5">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-uppercase text-center ">{{ __('common.strategic_partner') }}</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 3000;">{{--  --}}
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/fazeeda_life_care.png')}}" alt="" style="width:100%;" title="">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/doc_bekam.jpg')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/cenviro.png')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/air_relax.png')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/hypervolt.jpg')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/sk_bunut_rendang.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/jkm.png')}}" alt="" style="width:100%;">
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

    {{-- Corporate Client --}}
    <div class="content pt-5" style="">
        <div class="container-fluid pl-5 pr-5">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-uppercase text-center ">{{ __('common.corporate_client') }}</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 3000;">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/time.png')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/pahang_ranger.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/fam.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/kuantan_fa.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/miat_fc.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/selangor_fa.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/selangor_mac.png')}}" alt="" style="width:70%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/kotasas.png')}}" alt="" style="width:100%;">
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel text-center">
                                    <img src="{{asset('public/template/assets/img/partners/hk_fighters.png')}}" alt="" style="width:70%;">
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