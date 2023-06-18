@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <span style="font-size: 70px; line-height: 80%;">OUR <br/>SERVICES</span> <br/>
                <span style="font-size: 40px; text-decoration: none; color:white;">HYPERVOLT Therapy</span>
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
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Hypervolt</b> adalah high-tech massage therapy tool yang direka untuk digunapakai oleh para atlet. Hypervolt mengunakan <b>vibration technique</b> untuk membantu <b>meningkatkan “range of motion”</b> dan membantu untuk proses <b>penyembuhan</b> selepas aktiviti sukan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Hypervolt</b> adalah salah satu seni yang mengunakan <b>urutan getaran</b> untuk membantu memberikan kesan relax pada otot yang lenguh dan otot yang mengeras, dan juga membantu meningkatkan pengaliran darah.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Manfaat HYPERVOLT Therapy adalah seperti berikut:</p>
                <ul style="text-align: left; word-break: keep-all;">
                    <li>Digunakan untuk meningkatkan persembahan fizikal</li>
                    <li>Melembutkan otot-otot</li>
                  </ul> 
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{asset('public/template/assets/carousel/services/hypervolt.jpg')}}" alt="" style="width: 100%; height: auto;">
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
<section class="map-section">
    <div class="container">
        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/J2cEcrbIH7o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="350px"></iframe>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection