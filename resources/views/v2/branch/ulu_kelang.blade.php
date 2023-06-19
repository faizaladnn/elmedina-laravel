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
                <h1>El Medina Spa Bekam <br/>Ulu Klang</h1>
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
                    <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (5).jpg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (11).jpeg')}}" style="width:100%">
                  </div>
                  <div class="column-img">
                    {{-- <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (10).jpg')}}" style="width:100%"> --}}
                    <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (3).jpg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (12).jpeg')}}" style="width:100%">
                    {{-- <img src="{{asset('public/template/assets/carousel/ulu_klang/uk1 (7).jpg')}}" style="width:100%"> --}}
                  </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">PHONE</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;"><a href="tel:+0104547030 ">+6010 454 7030</a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">ADDRESS</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;"><b>EL MEDINA SPA BEKAM Ulu Klang</b> <br/>1-1, Jalan Lingkaran Tengah 2, <br/>Ukay Boulevard Hulu Kelang, <br/>68000 Ampang, Selangor   </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">FACEBOOK</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">
                            <a href="https://www.facebook.com/elmedinahulukelang" class="btn btn-social" target="_blank"><i style='font-size:24px' class='fab'>&#xf39e;</i></a>
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">OPENING HOURS</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;">Monday - Sunday : 10AM - 10PM</h5>
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

<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 class="revealUp">CONTACT US</h1>
          </div>
          <div class="col-lg-6">
              <div class="contact-container">
                  <form action="/action_page.php">
                    <input type="text" id="fname" name="firstname" placeholder="Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <button type="submit">Send</button>
                  </form>
                </div>
                
          </div>
      </div>
      <div class="row">
      </div>
  </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection