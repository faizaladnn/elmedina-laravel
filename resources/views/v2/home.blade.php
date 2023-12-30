@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="height: 100%; width: 100%" />

                <br/><br/><br/><br/>
                <a href="{{route('v2.getBooking')}}" target="_blank">
                    <button type="button" class="button">Book Now</button>
                </a>
                {{-- <h1>One Page Website</h1>
                <p>I like clean code and I cannot lie</p>
                <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a> --}}
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="revealUp" style="float: right;">ABOUT US</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>El Medina Bekam & Recovery</b> ditubuhkan pada <b>April 2018</b>. Setakat ini kami mempunyai <b>2 cawangan utama</b>. Cawangan pertama terletak di <b>Kuantan (Pahang)</b>, dan <b>Shah Alam</b>. Perkhidmatan utama kami lebih kepada <b>Healthy and Recovey</b> iaitu lebih tertumpu kepada menangani masalah kesihatan dan membantu meningkatkan proses pemulihan pada anggota badan manusia.</p>                
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Ramai yang tidak tahu sebenarnya, meskipun bekam adalah kaedah rawatan utama kami di sini, namun setelah melalui pelbagai proses kami berjaya meningkatkan <b>El Medina Bekam & Recovery</b> ke satu tahap yang lebih efisien yakni setanding dengan rawatan bekam yang sedia ada di pasaran berserta dengan pakej-pakej lain yang lebih berinovasi. Malah tidak keterlaluan jika kami nyatakan kami lebih ke hadapan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>El Medina Bekam & Recovery</b> adalah pusat rawatan bekam yang terbaik dan pertama menggabungkan pelbagai elemen natural. Rawatan berasaskan bekam yang diberi nafas baru dan dipermodenkan sehingga dikenali sebagai "bekam ala spa", rawatan tradisional seperti urutan tradisi sejak turun temurun lagi, physiotherapy atau pemulihan anggota badan untuk mereka yang mempunyai masalah otot, tulang dan sendi dan juga sebagai rawatan terakhir sebelum proses pembedahan dijalankan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Untuk pengetahuan, <b>El Medina Bekam & Recovery</b> adalah pusat bekam yang pertama memperkenalkan disposal cup atau cup pakai buang yang lebih terjamin kebersihannya yakni sejak awal penubuhan lagi, April 2018 dan juga pusat spa pertama memperkenalkan teknik <b>Dry Cupping, Hypervolt Therapy, Compression Therapy dan Sport Massage pada Februari 2019</b></p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Secara ringkasnya, pelbagai jenis lagi rawatan yang terdapat di <b>El Medina</b> dan kami sangat menitiberatkan <b>kebersihan dan keselamatan</b>. Dan semestinya and pasti akan kembali untuk membuat rawatan bersama kami kerana kami adalah pusat rawatan terbaik untuk anda.</p>
            </div>
        </div>
    </div>
</section>


{{-- Testimonial Test Section --}}
<section class="testimonial-section">
    <h1 class="revealUp" style="float: center; text-decoration: underline solid white 20%; ">TESTIMONIALS</h1>
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="{{asset('public/template/assets/carousel/testimoni/testimony_1.jpg')}}" alt="" class="image" />
          <p>
            123 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
      </div>
    <div class="swiper-pagination"></div>
</div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="revealUp">OUR SERVICES</h1>
            </div>
        </div>

        <div class="row-cards" style="">
            <div class="column-card">
                <div class="card">
                    <a href="{{route('v2.bekam-hijama')}}" style="text-decoration: none; color:black; font-size:18px;">
                        <img src="{{asset('public/template/assets/carousel/services/bekam.jpg')}}" alt="">
                    </a>
                    <div class="text-block">
                        <p style="margin: 0px 0 0 0;">Bekam/Hijama</p>
                    </div>
                </div>
            </div>
        
            <div class="column-card">
                <div class="card">
                    <a href="{{route('v2.urutan-massage')}}" style="text-decoration: none; color:black; font-size:18px;">
                        <img src="{{asset('public/template/assets/carousel/services/massage.jpg')}}" alt="">
                        <div class="text-block">
                                <p style="margin: 0px 0 0 0;">Urutan/Massage</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="column-card">
                <div class="card">
                    <a href="{{route('v2.air-relax')}}" style="text-decoration: none; color:black; font-size:18px;">
                        <img src="{{asset('public/template/assets/carousel/services/air_relax(1).jpeg')}}" alt="">
                        <div class="text-block">
                                <p style="margin: 0px 0 0 0;">Air Relax Therapy</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="column-card">
                <div class="card">
                    <a href="{{route('v2.hypervolt')}}" style="text-decoration: none; color:black; font-size:18px;">
                        <img src="{{asset('public/template/assets/carousel/services/hypervolt(1).jpeg')}}" alt="">
                        <div class="text-block">
                                <p style="font-size: 17px; margin: 0px 0 0 0;">Hypervolt Therapy</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="branches" class="branches-section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="revealUp">OUR BRANCHES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <div class="row-cards">
                    <div class="column-card column-card-branch">
                        <div class="card">
                            <a href="{{route('v2.kuantan')}}" style="text-decoration: none; color:black; font-size:18px;">
                                <img src="{{asset('public/template/assets/carousel/branch/branch_kuantan.jpg')}}" alt="">
                                <div class="text-block">
                                        <p>Kuantan, Pahang</p>
                                </div>
                            </a>
                        </div>          
                    </div>
                    <div class="column-card column-card-branch">
                        <div class="card">
                            <a href="{{route('v2.shah-alam')}}" style="text-decoration: none; color:black; font-size:18px;">
                                <img src="{{asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}}" alt="">
                                <div class="text-block">
                                        <p>Shah Alam, Selangor</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="text-align: right">
                <h1 class="revealUp">CONTACT US</h1>
            </div>
            {{-- <div class="col-lg-1">
            </div> --}}
            <div class="col-lg-6">
                <div class="contact-container">
                    {{-- <form action="/action_page.php">
                        <input type="text" id="fname" name="firstname" placeholder="Name">
                        <input type="text" id="email" name="email" placeholder="Email">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <button type="submit">Send</button>
                    </form> --}}

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;"><b>EL MEDINA SPA BEKAM KUANTAN</b> <br/>A75, Level 1, <br/>Jln IM 7/1, Bandar Indera Mahkota, <br/>25200 Kuantan, Pahang</h4>
                            <h5 style="text-align: justify; text-justify: inter-word;"><a href="tel:+60108387030">+6010 838 7030</a></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="text-align: justify; text-justify: inter-word; white-space: pre-wrap; word-break: keep-all;"><b>EL MEDINA SPA BEKAM SHAH ALAM</b> <br/>No. 17, 1, <br/>Jalan Plumbum R 7/R, Seksyen 7, <br/>40000 Shah Alam, Selangor</h4>
                            <h5 style="text-align: justify; text-justify: inter-word;"><a href="tel:+60182497030">+6018 249 7030</a></h5>
                        </div>
                    </div>

                </div>                    
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</section>

{{-- Partners Section --}}
<section id="partners" class="partners-section">
    <div class="container">
        <div class="row" style="padding-bottom: 20px">
            <div class="col-lg-12">
                <h1 class="revealUp">OUR PARTNERS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/doc_bekam.jpg')}}" title="DOC BEKAM"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/cenviro.png')}}" width="80%" title="CENVIRO"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/air_relax.png')}}" width="80%" title="AIR RELAX"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/hypervolt.jpg')}}" width="80%" title="HYPERVOLT"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/sk_bunut_rendang.png')}}" width="70%" title="SK Bunut Rendang"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/jkm.png')}}" width="80%" title="Jom Kurus Malaysia"/>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Clients Section --}}
<section id="clients" class="clients-section">
    <div class="container">
        <div class="row" style="padding-bottom: 20px">
            <div class="col-lg-12">
                <h1 class="revealUp">OUR CLIENTS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/time.png')}}" title="TIME"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/pahang_ranger.png')}}" width="80%" title="Pahang Rangers FC"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/fam.png')}}" width="90%" title="Persatuan Bola Sepak Malaysia"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/kuantan_fa.png')}}" title="KUANTAN FA"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/selangor_fa.png')}}" title="SELANGOR FA"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/selangor_mac.png')}}" width="82%" title="SELANGOR MAC FC"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/kotasas.png')}}" title="KOTASAS"/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xs-6">
                <div class="square-holder">
                    <img alt="" src="{{asset('public/template/assets/img/partners/hk_fighters.png')}}" width="90%" title="HK Fighters Football Club"/>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection