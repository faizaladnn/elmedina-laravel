@extends ('layouts.master')

@section ('content')

    <div class="content content-fixed">
        <div class="container-fluid pl-5 pr-5">
            <div class="row background-logo">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-uppercase ">{{ __('common.about_us') }}</h3>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('template/assets/img/img-3.jpeg') }}" style="border-radius: 15px 50px;" class="uk-transition-scale-up uk-transition-opaque img-about-us">
                      </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 align-bottom">
                    <p class="text-justify font-weight-light tx-16 p-5">
                        El Medina Spa Bekam atau juga dikenali sebagai El Medina Recovery Spa ditubuhkan pada April 2018. 
                        Setakat ini kami mempunyai 4 cawangan utama. Cawangan pertama terletak di Kuantan (Pahang), kemudian Bandar Baru Uda (Johor Bahru), diikuti Shah Alam dan seterusnya Bangi.
                        Perkhidmatan utama kami lebih kepada Healthy and Recovey iaitu lebih tertumpu kepada menangani masalah kesihatan dan membantu meningkatkan proses pemulihan pada anggota badan manusia.
                    </p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 align-bottom">
                    <p class="text-justify font-weight-light tx-16 p-5"  uk-parallax="opacity: 0,1,1; y: -70,0,24; x: 100,100,0; scale: 0.5,1,1; viewport: 0.5;">
                            Ramai yang tidak tahu sebenarnya, meskipun bekam adalah kaedah rawatan utama kami di sini, namun setelah melalui pelbagai proses kami berjaya
                            meningkatkan El Medina Spa Bekam ke satu tahap yang lebih efisien yakni setanding dengan rawatan bekam yang sedia ada di pasaran berserta dengan pakej-pakej lain yang lebih berinovasi.
                            Malah tidak keterlaluan jika kami nyatakan kami lebih ke hadapan.
                            El Medina Spa Bekam adalah pusat rawatan bekam yang terbaik dan pertama menggabungkan pelbagai elemen natural. Rawatan berasaskan bekam yang diberi nafas baru dan dipermodenkan sehingga dikenali sebagai "bekam ala spa", 
                            rawatan tradisional seperti urutan tradisi sejak turun temurun lagi, physiotherapy atau pemulihan anggota badan untuk mereka yang mempunyai masalah otot, tulang dan sendi dan juga sebagai rawatan terakhir sebelum proses pembedahan dijalankan.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="uk-transition-toggle" tabindex="0">
                    <img src="{{ asset('template/assets/carousel/cover_5.jpg') }}" style="border-radius: 50px 15px;" class="uk-transition-scale-up uk-transition-opaque img-about-us"
                    uk-parallax="opacity: 0,1,1; y: -100,0,25; x: 100,100,0; scale: 2,1,1; viewport: 0.5;">
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('template/assets/img/img-2.jpg') }}" style="border-radius: 15px 50px;" class="uk-transition-scale-up uk-transition-opaque img-about-us"
                        uk-parallax="opacity: 0,1,1; y: -100,0,25; x: 100,100,0; scale: 2,1,1; viewport: 0.5;">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 align-bottom">
                    <p class="text-justify font-weight-light tx-16 p-5" uk-parallax="opacity: 0,1,1; y: -70,0,25; x: 100,100,0; scale: 0.5,1,1; viewport: 0.5;">
                            Untuk pengetahuan, El Medina Spa Bekam adalah pusat spa bekam yang pertama memperkenalkan disposal cup atau cup pakai buang yang lebih terjamin kebersihannya yakni sejak awal penubuhan lagi, 
                            April 2018 dan juga pusat spa pertama memperkenalkan rawatan Dry Needling, Dry Cupping, Hypervolt, Sport Massage dan Compression Therapy pada Februari 2019.
                    </p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 align-bottom">
                    <p class="text-justify font-weight-light tx-16 p-5" uk-parallax="opacity: 0,1,1; y: -70,0,0; x: 100,100,0; scale: 0.5,1,1; viewport: 0.5;">
                            Secara ringkasnya, pelbagai jenis lagi rawatan yang terdapat di El Medina dan kami sangat menitiberatkan kebersihan dan keselamatan. 
                            Dan semestinya and pasti akan kembali untuk membuat rawatan bersama kami kerana kami adalah pusat rawatan terbaik untuk anda.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('template/assets/carousel/cover_6.jpg') }}" style="border-radius: 50px 15px;" class="uk-transition-scale-up uk-transition-opaque img-about-us"
                        uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; viewport: 0.5;">
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <h3>PARTNERS</h3>
            </div>
        </div>
    </div>

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection