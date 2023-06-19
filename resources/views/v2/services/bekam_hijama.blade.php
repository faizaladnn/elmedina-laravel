@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <span style="font-size: 70px; line-height: 80%;">OUR <br/>SERVICES</span> <br/>
                <span style="font-size: 40px; text-decoration: none; color:white;">Bekam/Hijama</span>
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
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Bekam</b> merupakan satu amalan tradisional yang diamalkan dalam pelbagai budaya di seluruh dunia. Tujuan berbekam adalah untuk <b>mengeluarkan darah kotor dari badan</b> yang menjadi punca penurunan tahap kesihatan.</p>                
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Bekam kering/bekam angin</b> - Peralatan bekam hanya diletakkan di atas permukaan kulit, kulit tidak ditoreh dan tiada pendarahan berlaku.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Bekam basah</b> - Kaedah ini melibatkan peralatan bekam yang diletakkan di atas permukaan kulit yang telah ditoreh/dicucuk dan berlaku pendarahan melalui luka tersebut yang dikumpul di dalam peralatan bekam.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Manfaat berbekam adalah seperti berikut:</p>
                <ul style="text-align: left; word-break: keep-all;">
                    <li>Mengurangkan ketegangan otot dan meningkatkan peredaran darah</li>
                    <li>Menenangkan sistem saraf</li>
                    <li>Untuk melegakan dan mengurangkan sakit belakang dan leher, mengurangkan keresahan kepenatan</li>
                  </ul> 
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Pelanggan yang ingin mendapatkan rawatan bekam mestilah berumur antara <b>10 hingga 65 tahun</b>. Bagi pelanggan yang berumur <b>lebih daripada 65 tahun</b>, berbekam boleh dilakukan sekiranya mempunyai tahap kesihatan yang baik.</p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{asset('public/template/assets/carousel/services/bekam.jpg')}}" alt="" style="width: 100%; height: auto;">
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
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <iframe width="100%" height="350px"  class="responsive-iframe" src="https://www.youtube.com/embed/bGjNV0dPMHo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection