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
                <h1>El Medina Spa Bekam <br/> Kuantan</h1>
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
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn22.jpeg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn23.jpeg')}}" style="width:100%">
                  </div>
                  <div class="column-img">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn24.jpeg')}}" style="width:100%">
                    <img src="{{asset('public/template/assets/carousel/kuantan/ktn25.jpeg')}}" style="width:100%">
                  </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">PHONE</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;"><a href="tel:+60108387030">+6010 838 7030</a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">ADDRESS</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;"><b>EL MEDINA SPA BEKAM KUANTAN</b> <br/>A75, Level 1, <br/>Jln IM 7/1, Bandar Indera Mahkota, <br/>25200 Kuantan, Pahang</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">FACEBOOK</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">
                            <a href="https://www.facebook.com/elmedinaspabekamkuantan" class="btn btn-social" target="_blank"><i style='font-size:24px' class='fab'>&#xf39e;</i></a> El Medina Spa Bekam Kuantan
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <h4 style="text-justify: inter-word;">INSTAGRAM</h4>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6">
                        <h5 style="text-align: justify; text-justify: inter-word;">
                            <a href="https://www.instagram.com/elmedinaspabekam_kuantan" class="btn btn-social" target="_blank"><i style='font-size:35px' class='fa fa-instagram fa-5x'></i></a> elmedinaspabekam_kuantan
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
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