@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <span style="font-size: 70px; line-height: 80%;">OUR <br/>SERVICES</span> <br/>
                <span style="font-size: 40px; text-decoration: none; color:white;">Air Relax Therapy</span>
                {{-- <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="height: 100%; width: 100%" /> --}}
            </div>
            <div class="col-lg-6">
                {{-- <h1>El Medina Spa Bekam <br/> Kuantan</h1> --}}
            </div>
        </div>

    </div>
</section>

<!-- branch-info-section -->
<section class="branch-info-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Terapi urutan kaki</b> selama <b>30 minit</b> untuk melancarkan peredaran darah dan meningkatkan prestasi otot kaki.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Manfaat Air Relax Therapy adalah seperti berikut:</p>
                <ul style="text-align: left; word-break: keep-all;">
                    <li>Mengurangkan sakit pada otot</li>
                    <li>Meningkatkan peredaran darah</li>
                    <li>Meningkatkan flexibility pada otot</li>
                    <li>Meningkatkan imuniti</li>
                    <li>Untuk tidur lebih selesa</li>
                  </ul> 
            </div>
            <div class="col-lg-6">

                <div class="row-img"> 
                  <div class="column-img">
                    <img src="{{asset('public/template/assets/carousel/services/air_relax.jpg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/testimoni/testimony_10.jpg')}}" style="width:100%">
                  </div>
                  <div class="column-img">
                    <img src="{{asset('public/template/assets/carousel/services/air_relax(1).jpeg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn20.jpg')}}" style="width:100%">
                  </div>
                </div>
                {{-- <div class="row">
                    <img src="{{asset('public/template/assets/carousel/services/air_relax.jpg')}}" alt="" style="width: 100%; height: auto;">
                </div> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <br/><br/><br/><br/>
                <a href="{{route('v2.getBooking')}}" target="_blank"><button type="button" class="button" style="background-color: #30cbcb">Book Now</button></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="map-section">
    <div class="container">
        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/uzLC_ZaikFs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="100%" height="350px" frameborder="0" style="" allowfullscreen="""></iframe>       
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection