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
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"> <b>Medina Bekam & Recovery</b> ditubuhkan pada <b>April 2018</b>. Setakat ini kami mempunyai <b>3 cawangan utama</b>. Cawangan pertama terletak di <b>Kuantan (Pahang)</b>, diikuti <b>Shah Alam</b> dan seterusnya <b>Hulu Kelang</b> . Perkhidmatan utama kami lebih kepada <b>Healthy and Recovey</b> iaitu lebih tertumpu kepada menangani masalah kesihatan dan membantu meningkatkan proses pemulihan pada anggota badan manusia.</p>                
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Ramai yang tidak tahu sebenarnya, meskipun bekam adalah kaedah rawatan utama kami di sini, namun setelah melalui pelbagai proses kami berjaya meningkatkan <b>Medina Bekam & Recovery</b> ke satu tahap yang lebih efisien yakni setanding dengan rawatan bekam yang sedia ada di pasaran berserta dengan pakej-pakej lain yang lebih berinovasi. Malah tidak keterlaluan jika kami nyatakan kami lebih ke hadapan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Medina Bekam & Recovery</b> adalah pusat rawatan bekam yang terbaik dan pertama menggabungkan pelbagai elemen natural. Rawatan berasaskan bekam yang diberi nafas baru dan dipermodenkan sehingga dikenali sebagai "bekam ala spa", rawatan tradisional seperti urutan tradisi sejak turun temurun lagi, physiotherapy atau pemulihan anggota badan untuk mereka yang mempunyai masalah otot, tulang dan sendi dan juga sebagai rawatan terakhir sebelum proses pembedahan dijalankan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Untuk pengetahuan, <b>Medina Bekam & Recovery</b> adalah pusat bekam yang pertama memperkenalkan disposal cup atau cup pakai buang yang lebih terjamin kebersihannya yakni sejak awal penubuhan lagi, April 2018 dan juga pusat spa pertama memperkenalkan teknik <b>Dry Cupping, Hypervolt Therapy, Compression Therapy dan Sport Massage pada Februari 2019</b></p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Secara ringkasnya, pelbagai jenis lagi rawatan yang terdapat di <b>El Medina</b> dan kami sangat menitiberatkan <b>kebersihan dan keselamatan</b>. Dan semestinya and pasti akan kembali untuk membuat rawatan bersama kami kerana kami adalah pusat rawatan terbaik untuk anda.</p>
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
                            <img src="{{asset('public/template/assets/carousel/branch/branch_kuantan.jpg')}}" alt="">
                            <div class="text-block">
                                <a href="{{route('v2.kuantan')}}" style="text-decoration: none; color:black; font-size:18px;">
                                    <p>Kuantan, Pahang</p>
                                </a>
                            </div>
                        </div>          
                    </div>
                    <div class="column-card">
                        <div class="card">
                            <img src="{{asset('public/template/assets/carousel/branch/branch_shah_alam.jpg')}}" alt="">
                            <div class="text-block">
                                <a href="{{route('v2.shah-alam')}}" style="text-decoration: none; color:black; font-size:18px;">
                                    <p>Shah Alam, Selangor</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column-card">
                        <div class="card">
                            <img src="{{asset('public/template/assets/carousel/branch/branch_ulu_klang.jpeg')}}" alt="">
                            <div class="text-block" style="right: 100px">
                                <a href="{{route('v2.hulu-kelang')}}" style="text-decoration: none; color:black; font-size:18px;">
                                    <p>Hulu Kelang, Kuala Lumpur</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection