@extends ('layouts.master')

@section ('content')
    {{-- Carousel --}}
    <div id="carouselCoverImage" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('template/assets/carousel/cover_2.jpg')}}" class="d-block w-100" alt="PAKEJ BEKAM">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/carousel/cover_3.jpg')}}" class="d-block w-100" alt="EL MEDINA KUANTAN">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/carousel/cover_4.jpg')}}" class="d-block w-100" alt="SPORT MASSAGE LELAKI & WANITA">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/carousel/cover_1.jpg')}}" class="d-block w-100" alt="URUTAN TRADISIONAL">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselCoverImage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselCoverImage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>{{-- Carousel End --}}
    
    {{-- SERVICES --}}
    <div class="content" style="">
      <div class="container-fluid pl-5 pr-5">
          <div class="align-items-center justify-content-between">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="text-uppercase text-center ">{{ __('common.services') }}</h3>
              </div>

              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM SUNNAH - FULL BODY</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Free: Urutan Ringkas, Urutan Guasha, Bekam Luncur, dan Bekam Angin</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM SUNNAH - HALF BODY</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Free: Urutan Ringkas, Urutan Guasha, Bekam Luncur, dan Bekam Angin</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM WAJAH</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk yang bermasalah resdung, jerawat, gatal-gatal dan gangguan mata</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>{{-- end row --}}

              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM MIGRAIN</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk yang mengalami migrain, stress, sakit kepala, tengkuk dan bahu</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM GOUT</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM ANGIN</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>{{-- end row --}}
              
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">URUTAN BADAN</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Urutan fullbody selama 1 jam</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">SPORT MASSAGE + HYPERVOLT THERAPY</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-3">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold service-title" title="SPORT MASSAGE + HYPERVOLT THERAPY + AIR RELAX">SPORT MASSAGE + HYPERVOLT THERAPY + AIR RELAX</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>{{-- end row --}}

            </div>
          </div>
      </div>
    </div>
    {{-- END OF SERVICES --}}

    {{-- TESTIMONI --}}
    <div class="content" style="">
        <div class="container-fluid pl-5 pr-5">
            <div class="align-items-center justify-content-between">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-uppercase text-center ">{{ __('common.testimony') }}</h3>
                </div>
              </div>

              <div class="row pt-2">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                      <figure class="pos-relative mg-b-0 wd-lg">
                      <img src="{{asset('template/assets/carousel/testimoni/testimony_1.jpg')}}" class="img-fit-cover " alt="..." >
                        <figcaption class="pos-absolute b-0 tx-white-8">
                          <h6 class="tx-black mg-b-20 mg-5" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Guys here have a magic hands" - YAM Tengku Amir</h6>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                  <div class="card">
                    <figure class="pos-relative mg-b-0 wd-lg">
                      <img src="{{asset('template/assets/carousel/testimoni/testimony_2.jpg')}}" class="img-fit-cover" alt="..." >
                      <figcaption class="pos-absolute b-0 tx-white-8">
                        <h6 class="tx-black mg-b-20 mg-5" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Bersih, selesa dan privacy serta mewah dengan harga berpatutan" - Syamim Yahya</h6>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                      <figure class="pos-relative mg-b-0 wd-lg">
                        <img src="{{asset('template/assets/carousel/testimoni/testimony_3.jpg')}}" class="img-fit-cover" alt="..." >
                        <figcaption class="pos-absolute b-0 tx-white-8">
                          <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Service Terbaik..yang berminat nak buat bekam dan urut kampung boleh datang ke El Medina Spa Bekam" - Safiq Rahim</h6>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                      <figure class="pos-relative mg-b-0 wd-lg">
                        <img src="{{asset('template/assets/carousel/testimoni/testimony_7.jpg')}}" class="img-fit-cover" alt="..." >
                        <figcaption class="pos-absolute b-0 tx-white-8">
                          <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Selain bekam darah, paling best sport massage with the new equipment they call Hypervolt. For those yang ada masalah muscle, anda kena dapatkan treatment ini." - Azrel Ismail</h6>
                        </figcaption>
                      </figure>
                    </div>
                </div>
              </div>

              <div class="row pt-5">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                      <figure class="pos-relative mg-b-0 wd-lg">
                        <img src="{{asset('template/assets/carousel/testimoni/testimony_4.jpg')}}" class="img-fit-cover" alt="..." >
                        <figcaption class="pos-absolute b-0 tx-white-8">
                          <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Paling penting tempat ni cukup selesa, bersih dan cup pakai buang" - Along Cham</h6>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                  <div class="card">
                    <figure class="pos-relative mg-b-0 wd-lg">
                      <img src="{{asset('template/assets/carousel/testimoni/testimony_5.jpg')}}" class="img-fit-cover" alt="..." >
                      <figcaption class="pos-absolute b-0 tx-white-8">
                        <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Spa bekam terbaik! Menjalankan servis bekam sunnah dan menggunakan konsep berbekam disposable cups (cawan pakai buang), spa dan servis tip top!" - Farizal Marlias</h6>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                      <figure class="pos-relative mg-b-0 wd-lg">
                        <img src="{{asset('template/assets/carousel/testimoni/testimony_6.jpg')}}" class="img-fit-cover" alt="..." >
                        <figcaption class="pos-absolute b-0 tx-white-8">
                          <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"El Medina is good. I always do dry cupping and sport massage here for my hamstring and good recovery." - Dickson Nwakame</h6>
                        </figcaption>
                      </figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6">
                  <div class="card">
                    <figure class="pos-relative mg-b-0 wd-lg">
                      <img src="{{asset('template/assets/carousel/testimoni/testimony_8.jpg')}}" class="img-fit-cover" alt="..." >
                      <figcaption class="pos-absolute b-0 tx-white-8">
                        <h6 class="tx-black mg-b-20 mg-5 text-justify" style="border-radius:10px; background-color:#ffc107; opacity:0.8; font-size:0.8rem;">"Badan rasa ringan gila !!. korang kena try gaiss !!." - Nonny Nadirah</h6>
                      </figcaption>
                    </figure>
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
    $('#carouselCoverImage').carousel({
      interval: 9000,
    })
    $('#carouselTestimoni').carousel({
      interval: 9000,
    })

    $(document).on('scroll', function() {
      $("#slide").css("opacity", Math.max(3.7 - 0.005*window.scrollY, 0));
    })
</script>
@endsection