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
    <div class="content" style="background-color:#3f458e;">
        <div class="container-fluid pl-5 pr-5">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 style="color:#ffff;font-weight:bold;padding:0;" id="slide">TESTIMONI</h1>
                </div>
              </div>
            </div>
        </div>
    </div>
    {{-- TESTIMONI --}}
    {{-- Carousel --}}
    <div id="carouselTestimoni" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{asset('template/assets/carousel/testimoni/testimony_1.jpg')}}" class="d-block w-50" alt="PAKEJ BEKAM">
              <div class="carousel-caption vertical">
                <h3>YAM Tengku Amir</h3>
                <p>"Guys here have a magic hands"</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_2.jpg')}}" class="d-block w-50" alt="EL MEDINA KUANTAN">
            <div class="carousel-caption vertical">
              <h3>Syamim Yahya</h3>
              <p>"Bersih, selesa dan privacy serta mewah dengan harga berpatutan"</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_3.jpg')}}" class="d-block w-50" alt="SPORT MASSAGE LELAKI & WANITA">
            <div class="carousel-caption vertical">
              <h3>Safiq Rahim</h3>
              <p>"Service Terbaik..yang berminat nak buat bekam dan urut kampung boleh datang ke El Medina Spa Bekam"</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_4.jpg')}}" class="d-block w-50" alt="URUTAN TRADISIONAL">
            <div class="carousel-caption vertical">
              <h3>Along Cham</h3>
              <p>"Paling penting tempat ni cukup selesa, bersih dan cup pakai buang"</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_5.jpg')}}" class="d-block w-50" alt="URUTAN TRADISIONAL">
            <div class="carousel-caption vertical">
              <h3>Farizal Marlias</h3>
              <p>"Spa bekam terbaik! Menjalankan servis bekam sunnah dan menggunakan konsep berbekam disposable cups (cawan pakai buang), spa dan servis tip top!"</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_6.jpg')}}" class="d-block w-50" alt="URUTAN TRADISIONAL">
            <div class="carousel-caption vertical">
              <h3>Dickson Nwakame</h3>
              <p>"El Medina is good. I always do dry cupping and sport massage here for my hamstring and good recovery."</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_7.jpg')}}" class="d-block w-50" alt="URUTAN TRADISIONAL">
            <div class="carousel-caption vertical">
              <h3>Azrel Ismail</h3>
              <p>"Selain bekam darah, paling best sport massage with the new equipment they call Hypervolt. For those yang ada masalah muscle, anda kena dapatkan treatment ini."</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('template/assets/carousel/testimoni/testimony_8.jpg')}}" class="d-block w-50" alt="URUTAN TRADISIONAL">
            <div class="carousel-caption vertical">
              <h3>Nonny Nadirah</h3>
              <p>"Badan rasa ringan gila !!. korang kena try gaiss !!."</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTestimoni" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimoni" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>{{-- Carousel End --}}

    <div class="content content-fixed">
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
    </div>

@endsection

@section('js')

<script type="text/javascript">
    $('#carouselCoverImage').carousel({
      interval: 9000,
    })
    $('#carouselTestimoni').carousel({
      interval: 90000,
    })

    $(document).on('scroll', function() {
      $("#slide").css("opacity", Math.max(2.7 - 0.005*window.scrollY, 0));
    })
</script>
@endsection