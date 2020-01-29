@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
  <div class="container-fluid pl-5 pr-5">
    <div class="align-items-center justify-content-between">
      
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="text-uppercase text-left ">{{ __('common.packages') }}</h3>
        </div>
      </div>
            
      <ul uk-accordion>
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">VVIP</a>
            <div class="uk-accordion-content">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal" title="FULL BODY (24 CUP) + SPORT MASSAGE (45 Minit) + AIR RELAX (30 Minit)"><span class="uk-text-bold">VVIP A</span> : FULL BODY (24 CUP) + SPORT MASSAGE (45 Minit) + AIR RELAX (30 Minit)</h6>
                      <p class="card-text font-weight-light tx-12">Percuma : Urutan Guasha + Bekam Luncur + Bekam Angin</p>
                      <h5 style="margin: 0 0 20px;">RM 300</h5>
                      <a href="{{route('packages.pakej-a')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal" title="FULL BODY (24 CUP) + SPORT MASSAGE (30 Minit)"><span class="uk-text-bold">VVIP B</span> : FULL BODY (24 CUP) + SPORT MASSAGE (30 Minit)</h6>
                      <p class="card-text font-weight-light tx-12">Percuma : Urutan Guasha + Bekam Luncur + Bekam Angin</p>
                      <h5 style="margin: 0 0 20px;">RM 225</h5>
                      <a href="{{route('packages.pakej-b')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">BEKAM SUNNAH</a>
            <div class="uk-accordion-content">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="uk-card card">
                    {{-- <div class="marker marker-ribbon marker-danger pos-absolute t-10 l-0">ON DEMAND</div> --}}
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 1 : FULL BODY (24 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Free: Urutan Ringkas, Urutan Guasha, Bekam Luncur, dan Bekam Angin</p>
                      <h5 style="margin: 0 0 10px;">RM 180 (VIP) RM 160 (NORMAL)</h5> 
                      <a href="{{route('packages.full-body')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 2 : HALF BODY (14 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Free: Urutan Ringkas, Urutan Guasha, Bekam Luncur, dan Bekam Angin</p>
                      <h5 style="margin: 0 0 10px;">RM 120 (VIP) RM 110 (NORMAL)</h5>
                      <a href="{{route('packages.half-body')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">TERAPI KHUSUS</a>
            <div class="uk-accordion-content">
              <div class="row pb-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 3 : BEKAM WAJAH (8 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan bekam darah untuk yang bermasalah resdung, jerawat, gatal-gatal dan gangguan mata</p>
                      <h5 style="margin: 0 0 10px;">RM 80 (VIP) RM 70 (NORMAL)</h5>
                      <a href="{{route('packages.bekam-wajah')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 4 : BEKAM MIGRAIN (8 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan bekam darah untuk yang mengalami migrain, stress, sakit kepala, tengkuk dan bahu</p>
                      <h5 style="margin: 0 0 10px;">RM 80 (VIP) RM 70 (NORMAL)</h5>
                      <a href="{{route('packages.bekam-migrain')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 5 : BEKAM GOUT (12 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <h5 style="margin: 0 0 10px;">RM 110 (VIP) RM 100 (NORMAL)</h5>
                      <a href="{{route('packages.bekam-gout')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 6 : BEKAM ANGIN (21 CUP)</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang</p>
                      <h5 style="margin: 0 0 20px;">RM 100</h5>
                      <a href="{{route('packages.bekam-angin')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal">PAKEJ 7 : URUTAN BADAN</h6>
                      <p class="card-text font-weight-light tx-12">Urutan fullbody selama 1 jam</p>
                      <h5 style="margin: 0 0 20px;">RM 98</h5>
                      <a href="{{route('packages.urutan-badan')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
              </div>{{-- end row --}}
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">RECOVERY</a>
            <div class="uk-accordion-content">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal" title="SPORT MASSAGE + HYPERVOLT THERAPY">PAKEJ 8 : SPORT MASSAGE + HYPERVOLT THERAPY</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan bekam darah untuk mengeluarkan urik asid dari kaki</p>
                      <h5 style="margin: 0 0 20px;">RM 110</h5>
                      <a href="{{route('packages.pakej-8')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal" title="SPORT MASSAGE + HYPERVOLT THERAPY + AIR RELAX">PAKEJ 9 : SPORT MASSAGE + HYPERVOLT THERAPY + AIR RELAX</h6>
                      <p class="card-text font-weight-light tx-12">Rawatan untuk megeluarkan angin dari badan dan meregangkan otot-otot yang tegang</p>
                      <h5 style="margin: 0 0 20px;">RM 140</h5>
                      <a href="{{route('packages.pakej-9')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 pt-2">
                  <div class="card">
                    <img src="{{ asset('public/template/assets/carousel/cover_5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title font-weight-normal" title="SPORT RECOVERY">PAKEJ 10 : SPORT RECOVERY</h6>
                      <p class="card-text font-weight-light tx-12">Air Relax / Tens/ Sport Massage / Cupping / Kinesio Taping / Stretching</p>
                      <h5 style="margin: 0 0 20px;">RM 50 - RM 150</h5>
                      <a href="{{route('packages.pakej-10')}}" class="btn btn-outline-warning text-dark">See More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </li>
        <li>
          <a class="uk-accordion-title" href="#">POSTNATAL</a>
          <div class="uk-accordion-content">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 pt-2 text-center">
                <h3>{{ __('common.coming_soon') }}</h3>
              </div>
            </div>
          </div>
      </li>
    </ul>
    
    </div>
  </div>
</div>

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection