@extends ('layouts.master')

@section ('content')

{{-- Carousel --}}
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000;">
  <ul class="uk-slider-items uk-grid">
      <li class="uk-width-1-1">
        <div class="uk-panel">
            {{-- <div class="uk-inline">
                <img src="{{asset('public/template/assets/carousel/cover_20.jpg')}}" alt="">
                <div class="uk-overlay uk-light uk-position-center">
                    <div class="text-uppercase uk-text-large text-center" style="font-size:1.5rem; color:white;">Berkonsepkan Spa</div>
                    <div class="text-uppercase uk-text-small text-center" style="font-size:12px; color:white;">Beroperasi Setiap Hari dari 10pagi - 10malam</div>
                </div>
            </div> --}}
            <img src="{{asset('public/template/assets/carousel/cover_20.jpg')}}" alt="">
        </div>
    </li>
      <li class="uk-width-1-1">
        <div class="uk-panel">
            {{-- <div class="uk-inline">
                <img src="{{asset('public/template/assets/carousel/cover_14.jpg')}}" alt="">
                <div class="uk-overlay uk-light uk-position-center">
                    <div class="text-uppercase uk-text-large text-center" style="font-size:1.5rem; color:white;">Sport Massage & Urutan Badan</div>
                    <div class="text-uppercase uk-text-small text-center" style="font-size:12px; color:white; border-top:1px solid white;">Lelaki & Wanita</div>
                </div>
            </div> --}}
            <img src="{{asset('public/template/assets/carousel/cover_16.jpg')}}" alt="">
        </div>
    </li>
    <li class="uk-width-1-1">
        <div class="uk-panel">
            {{-- <div class="uk-inline">
                <img src="{{asset('public/template/assets/carousel/cover_15.jpg')}}" alt="">
                <div class="uk-overlay uk-light uk-position-center">
                    <div class="text-uppercase uk-text-large text-center" style="font-size:1.5rem; color:white;">Bekam&nbsp;&nbsp;/&nbsp;&nbsp;Hijama</div>
                </div>
            </div> --}}
            <img src="{{asset('public/template/assets/carousel/cover_17.jpg')}}" alt="">
        </div>
    </li>
    <li class="uk-width-1-1">
        <div class="uk-panel">
            <img src="{{asset('public/template/assets/carousel/cover_18.jpg')}}" alt="">
        </div>
    </li>
    <li class="uk-width-1-1">
        <div class="uk-panel">
            <img src="{{asset('public/template/assets/carousel/cover_19.jpg')}}" alt="">
        </div>
    </li>
    <li class="uk-width-1-1">
        <div class="uk-panel">
            <img src="{{asset('public/template/assets/carousel/cover_6.jpg')}}" alt="">
        </div>
    </li>
  </ul>

  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>{{-- Carousel End --}}

    {{-- Why El Medina ? --}}
    <div class="content pt-4" style="background-color:#f7f9fb;">
        <div class="container-fluid pl-2 pr-2">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h3 class="font-weight-bold txt-color-blue">{{ __('common.why_elmedina') }}</h3>
                </div>
              </div>

              <div class="row pt-2">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                      <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                              <span uk-icon="icon: star; ratio: 1.5"></span>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.various_treatments') }}</h5>
                            <p class="font-weight-light">Menyediakan perkhidmatan bekam, urutan badan, sport massage dan sport recovery untuk Lelaki dan Wanita.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.syariah_compliance') }}</h4>
                            <p class="font-weight-light">Patuh syariah, privacy, bilik yang selesa dan berasingan, aurat terjaga sepenuhnya.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.various_therapist') }}</h4>
                            <p class="font-weight-light">
                                Ahli terapi terdiri daripada Massage Therapist, Physiotherapist, Sport Therapist, Specialist in Cupping Therapy. 
                                100% Ahli Terapi Bumiputera yang berkelulusan dalam bidang perubatan, fisioterapi dan sains sukan (Diploma, Degree, Master).
                            </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.treatment_many_ways') }}</h4>
                            <p class="font-weight-light">
                                Gabungan antara rawatan tradisional (bekam, urutan tradisional) dan rawatan moden (sport massage, electro modalities, hypervolt).
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.many_choices') }}</h4>
                            <p class="font-weight-light">
                                Spa yang menjadi pilihan ramai Selebriti, Atlet, Kerabat Diraja serta orang ramai dari pelbagai peringkat umur dan pekerjaan.
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center uk-visible@m">
                            <span uk-icon="icon: star; ratio: 1.5"></span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <h5 class="font-weight-bold">{{ __('common.professional') }}</h4>
                            <p class="font-weight-light">
                                Mengikut SOP yang disarankan oleh KKM (Kementerian Kesihatan Malaysia) dan berdaftar dengan Agensi Pengendalian Sisa Klinikal.
                            </p>
                          </div>
                      </div>
                  </div>
              </div>
            
        </div>
    </div>
</div>

    {{-- SERVICES --}}
    <div class="content" style="">
      <div class="container-fluid pl-2 pr-2">
          <div class="align-items-center justify-content-between">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="text-center font-weight-bold txt-color-blue">{{ __('common.services') }}</h3>
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
                            <h5 class="uk-text-uppercase uk-text-bold">Urutan Badan & Sport Massage</h5>
                            <p class="uk-text-light">Urutan boleh membantu melancarkan peredaran darah, meningkatkan tahap kecerdasan tubuh badan dan mengurangkan tekanan.</p>
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
                            <a href="{{route('services.ultrasound')}}" class="btn btn-outline-warning text-dark">Learn More</a>
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
                            <h5 class="uk-text-uppercase uk-text-bold">Pre and Post Natal Treatment</h5>
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
    <div class="content pt-5 pb-5" style="background-color:#f7f9fb;">
        <div class="container-fluid pl-2 pr-2">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="uk-grid-match " uk-grid>
                        <div class="uk-width-1-5@m uk-width-1-3@l">
                            <h3 class="font-weight-bold txt-color-blue">{{ __('common.what_we_offer') }}</h3>
                        </div>
                        <div class="uk-width-3-5@m uk-width-2-3@l">
                            <ul uk-accordion>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h4 class="font-weight-bold"><span uk-icon="icon: home; ratio: 1.5"></span> {{ __('common.community_events') }}</h4></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        {{ __('common.community_events_desc') }}
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div uk-slider="autoplay: true; autoplay-interval: 2000">

                                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m uk-light">
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img1.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img2.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img3.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img4.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img5.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img6.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img7.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img8.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img9.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img10.jpg')}}" alt="">
                                                    </li>
                                                </ul>
                                            
                                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            
                                            </div>
                                            {{-- <div class="uk-child-width-1-3@m uk-child-width-1-3" uk-grid uk-lightbox="animation: slide">
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/community_services/img3.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/community_services/img6.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/community_services/img9.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/community_services/img9.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h4 class="font-weight-bold"><span uk-icon="icon: happy; ratio: 1.5"></span> {{ __('common.wellness_program') }}</h4></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        {{ __('common.wellness_program_desc') }}
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div uk-slider="autoplay: true; autoplay-interval: 2000">

                                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m uk-light">
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img1.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img2.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img3.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img4.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img5.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img6.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img7.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img8.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img9.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/wellness_program/img10.jpg')}}" alt="">
                                                    </li>
                                                </ul>
                                            
                                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><h4 class="font-weight-bold"><span uk-icon="icon: users; ratio: 1.5"></span> {{ __('common.brand_partnership') }}</h4></a>
                                    <div class="uk-accordion-content font-weight-light text-small mt-0">
                                        {{ __('common.brand_partnership_desc') }}
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div uk-slider="autoplay: true; autoplay-interval: 2000">

                                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m uk-light">
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img1.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img2.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img3.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img4.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img5.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img6.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img7.jpg')}}" alt="">
                                                    </li>
                                                    <li class="uk-transition-toggle" tabindex="0">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img8.jpg')}}" alt="">
                                                    </li>
                                                </ul>
                                            
                                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            
                                            </div>
                                            {{-- <div class="uk-child-width-1-3@m uk-child-width-1-3" uk-grid uk-lightbox="animation: scale">
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/brand_partnership/img1.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/brand_partnership/img5.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="uk-inline" href="{{asset('public/template/assets/carousel/brand_partnership/img7.jpg')}}">
                                                        <img src="{{asset('public/template/assets/carousel/brand_partnership/img7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
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
    <div class="content " style="">
        <div class="container-fluid pl-2 pr-2">
            <div class="align-items-center justify-content-between">
              <div class="row">
                  <div class="col-lg-12">
                    <h3 class="text-center font-weight-bold txt-color-blue">{{ __('common.testimony') }}</h3>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-2" uk-slider="clsActivated: uk-transition-active;center: true; autoplay:true; autoplay-interval: 2000;">
                        <ul class="uk-slider-items uk-grid">
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_1.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">YAM Tengku Panglima Raja, Mejar Tengku Amir Nasser Ibrahim Shah</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Guys here have a magic hands"</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_2.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Syamim Yahya</h2>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Bersih, selesa dan privacy serta mewah dengan harga berpatutan"</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_3.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Safiq Rahim</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Service Terbaik..yang berminat nak buat bekam dan urut kampung boleh datang ke El Medina Spa Bekam"</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_7.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Azrel Ismail</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Selain bekam darah, paling best sport massage with the new equipment they call Hypervolt. For those yang ada masalah muscle, anda kena dapatkan treatment ini."</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_4.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Along Cham</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Paling penting tempat ni cukup selesa, bersih dan cup pakai buang"</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_5.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Farizal Marlias</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Spa bekam terbaik! Menjalankan servis bekam sunnah dan menggunakan konsep berbekam disposable cups (cawan pakai buang), spa dan servis tip top!"</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_6.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Dickson Nwakame</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"El Medina is good. I always do dry cupping and sport massage here for my hamstring and good recovery."</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_8.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Nonny Nadirah</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Badan rasa ringan gila !!. korang kena try gaiss !!."</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_9.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">KDYMM Pemangku Raja Pahang Tengku Mahkota Tengku Hassanal Ibrahim Alam Shah</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Sport massage 👍👍"</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_10.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Hadi Mirza</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Bekamnya ringkas dan comfortable..Alhamdulillah migrain hilang"</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_11.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Safawi Rasid</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Bekam dan urutan terbaik"</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_12.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Aidil Aziz</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Perkhidmatan spa bekam yang sangat memuaskan, berkualiti, selesa dan selamat"</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_14.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Rody Kristal & Niena Azman</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Best dan selesa! Serius lepas bekam dan sport massage badan rasa ringan!!"</h6>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="uk-width-1-2@m uk-width-1-1@s">
                                <div class="uk-panel">
                                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_15.jpg')}}" alt="" width="100%">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom p-0">
                                        <h2 class="uk-text-lead uk-margin-remove uk-text-bold" style="font-size:100%;">Jufferi Jamari</h3>
                                        <h6 class="uk-text-meta uk-margin-remove" style="font-size:100%;color:white;">"Sangat-sangat best! Baik untuk semua"</h6>
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
    {{-- <div class="uk-background-fixed uk-background-center-center" style="background-image: url({{asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}});">
        </div> --}}
    
    {{-- Strategic Partner --}}
    <div class="content pt-5">
        <div class="container-fluid pl-2 pr-2">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="text-center font-weight-bold txt-color-blue">{{ __('common.strategic_partner') }}</h4>
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
    <div class="content pt-5">
        <div class="container-fluid pl-2 pr-2">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="text-center font-weight-bold txt-color-blue">{{ __('common.corporate_client') }}</h4>
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


@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection