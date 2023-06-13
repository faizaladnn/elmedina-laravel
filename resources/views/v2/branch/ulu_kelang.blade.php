@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6">
                <h1>El Medina Spa Bekam <br/>Hulu Kelang</h1>
            </div>
        </div>

    </div>
</section>

<!-- branch-info-section -->
<section class="branch-info-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <div class="row-img"> 
                  <div class="column-img">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn3.jpg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn21.jpg')}}" style="width:100%">
                  </div>
                  <div class="column-img">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn5.jpg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn20.jpg')}}" style="width:100%">
                  </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">PHONE</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">+6010 454 7030</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">EMAIL</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">test@email.com</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">ADDRESS</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;"><b>EL MEDINA SPA BEKAM HULU KELANG</b> <br/>1-1, Jalan Lingkaran Tengah 2, <br/>Ukay Boulevard Hulu Kelang, <br/>68000 Ampang, Selangor   </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">OPENING HOURS</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">Monday - Sunday : 10AM - 10PM</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Section -->
<section class="map-section">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5761908200093!2d101.75463901426286!3d3.2054137536992826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc399ec2f54fd1%3A0xd80a5aca4960b3b6!2sEl%20Medina%20Bekam%20and%20Recovery%20Ulu%20Klang!5e0!3m2!1sen!2smy!4v1633719169655!5m2!1sen!2smy"
        width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection