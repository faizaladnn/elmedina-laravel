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
                <a href="https://elmedina.com.my/" target="_blank"><button type="button" class="button">Book Now</button></a>
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
                <h1 style="float: right;">ABOUT US</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <p style="text-align: justify;"> <b>Medina Bekam & Recovery</b> ditubuhkan pada <b>April 2018</b>. Setakat ini kami mempunyai <b>3 cawangan utama</b>. Cawangan pertama terletak di <b>Kuantan (Pahang)</b>, diikuti <b>Shah Alam</b> dan seterusnya <b>Hulu Kelang</b> . Perkhidmatan utama kami lebih kepada <b>Healthy and Recovey</b> iaitu lebih tertumpu kepada menangani masalah kesihatan dan membantu meningkatkan proses pemulihan pada anggota badan manusia.</p>                
                <p style="text-align: justify;">Ramai yang tidak tahu sebenarnya, meskipun bekam adalah kaedah rawatan utama kami di sini, namun setelah melalui pelbagai proses kami berjaya meningkatkan <b>Medina Bekam & Recovery</b> ke satu tahap yang lebih efisien yakni setanding dengan rawatan bekam yang sedia ada di pasaran berserta dengan pakej-pakej lain yang lebih berinovasi. Malah tidak keterlaluan jika kami nyatakan kami lebih ke hadapan.</p>
                <p style="text-align: justify;"><b>Medina Bekam & Recovery</b> adalah pusat rawatan bekam yang terbaik dan pertama menggabungkan pelbagai elemen natural. Rawatan berasaskan bekam yang diberi nafas baru dan dipermodenkan sehingga dikenali sebagai "bekam ala spa", rawatan tradisional seperti urutan tradisi sejak turun temurun lagi, physiotherapy atau pemulihan anggota badan untuk mereka yang mempunyai masalah otot, tulang dan sendi dan juga sebagai rawatan terakhir sebelum proses pembedahan dijalankan.</p>
                <p style="text-align: justify;">Untuk pengetahuan, <b>Medina Bekam & Recovery</b> adalah pusat bekam yang pertama memperkenalkan disposal cup atau cup pakai buang yang lebih terjamin kebersihannya yakni sejak awal penubuhan lagi, April 2018 dan juga pusat spa pertama memperkenalkan teknik <b>Dry Cupping, Hypervolt Therapy, Compression Therapy dan Sport Massage pada Februari 2019</b></p>
                <p style="text-align: justify;">Secara ringkasnya, pelbagai jenis lagi rawatan yang terdapat di <b>El Medina</b> dan kami sangat menitiberatkan <b>kebersihan dan keselamatan</b>. Dan semestinya and pasti akan kembali untuk membuat rawatan bersama kami kerana kami adalah pusat rawatan terbaik untuk anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>OUR SERVICES</h1>
            </div>
        </div>

        <div class="row-cards" style="">
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/bekam.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Bekam/Hijama</p>
                    </div>
                </div>
            </div>
        
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/massage.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Urutan/Massage</p>
                    </div>
                </div>
            </div>
            
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/air_relax.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Air Relax Therapy</p>
                    </div>
                </div>
            </div>
            
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/hypervolt.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Vibration Therapy (HYPERVOLT)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-cards" style="">
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/electro_therapy.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Electro Therapy (TENS)</p>
                    </div>
                </div>
            </div>
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/ultrasound.jpg')}}" alt="">
                    <div class="text-block">
                      <p>Ultrasound Therapy</p>
                    </div>
                </div>
            </div>
            
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('public/template/assets/carousel/services/kinesio_tapping.jpg')}}" alt="">
                    <div class="text-block" style="right: 100px">
                      <p>Kinesio Tapping</p>
                    </div>
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
                <h1>OUR BRANCHES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row-cards">
                    <div class="column-card column-card-branch">
                        <div class="card">
                            <img src="{{asset('public/template/assets/carousel/services/electro_therapy.jpg')}}" alt="">
                            <div class="text-block">
                              <p>Kuantan, Pahang</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-card">
                        <div class="card">
                            <img src="{{asset('public/template/assets/carousel/services/ultrasound.jpg')}}" alt="">
                            <div class="text-block">
                              <p>Shah Alam, Selangor</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column-card">
                        <div class="card">
                            <img src="{{asset('public/template/assets/carousel/services/kinesio_tapping.jpg')}}" alt="">
                            <div class="text-block" style="right: 100px">
                              <p>Ulu Kelang</p>
                            </div>
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
            <div class="col-lg-12">
                <h1>CONTACT US</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-container">
                    <form action="/action_page.php">
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  
                      <label for="country">Country</label>
                      <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                      </select>
                  
                      <label for="subject">Subject</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  
                      <input type="submit" value="Submit">
                    </form>
                  </div>
                  
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection