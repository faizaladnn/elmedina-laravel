@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-5 pr-5">
          <div class="align-items-center justify-content-between">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="text-uppercase text-left ">{{ __('common.services') }}</h3>
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM MIGRAIN</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk yang mengalami migrain, stress, sakit kepala, tengkuk dan bahu</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">BEKAM GOUT</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">URUTAN BADAN</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Urutan fullbody selama 1 jam</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{asset('template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-bold">SPORT MASSAGE + HYPERVOLT THERAPY</h6>
                      <p class="card-text font-weight-light tx-12 service-info">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <a href="#" class="btn btn-outline-warning">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
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

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection