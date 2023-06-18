@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <span style="font-size: 70px; line-height: 80%;">OUR <br/>SERVICES</span> <br/>
                <span style="font-size: 40px; text-decoration: none; color:white;">Ultrasound Therapy</span>
                {{-- <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="height: 100%; width: 100%" /> --}}
            </div>
            {{-- <div class="col-lg-6">
                <h1>El Medina Spa Bekam <br/> Kuantan</h1>
            </div> --}}
        </div>

    </div>
</section>

<!-- branch-info-section -->
<section class="branch-info-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Terapi ultrasound</b> merupakan sejenis <b>thermotherapy (terapi panas)</b> yang menggunakan arus gelombang pemanasan dari dalam yang dapat mengurangkan kesakitan pada sendi dan otot.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Terapi ultrasound</b> dapat mengurangkan masalah seperti bengkak, otot spasm , radang saraf, tendinitis (keradangan pada tendon), bursitis (keradangan pada bursa yang berada antara tendon dan tulang), sprain (kecederaan pada ligament), strain(kecederaan otot) ,kecederaan rotator cuff , frozen shoulder (bahu beku) ,arthritis dan carpal tunnel syndrome.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Antara kebaikan <b>terapi ultrasound</b> adalah dapat mempercepatkan proses pemulihan pada kecederaan pada otot tisu , ligament dan tendon, mengurangkan bengkak, melancarkan peredaraan darah serta mengurangkan sakit.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Manfaat terapi ultrasound adalah seperti berikut:</p>
                <ul style="text-align: left; word-break: keep-all;">
                    <li>Mengurangkan kecederaan otot.</li>
                    <li>Mengurangkan sakit sendi-sendi pada badan.</li>
                    <li>Muscle spasm.</li>
                    <li>Mengurangkan bengkak.</li>
                    <li>Mempercepatkan kadar penyembuhan pada tisu otot.</li>
                  </ul> 
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{asset('public/template/assets/carousel/services/ultrasound.jpg')}}" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <br/><br/><br/><br/>
                <a href="https://elmedina.com.my/" target="_blank"><button type="button" class="button" style="background-color: #30cbcb">Book Now</button></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
{{-- <section class="map-section">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
        width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
    </div>
</section> --}}

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection