@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                <span style="font-size: 70px; line-height: 80%;">OUR <br/>SERVICES</span> <br/>
                <span style="font-size: 40px; text-decoration: none; color:white;">Urutan/Massage</span>
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
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>Urutan</b> adalah satu proses memulihkan kesihatan dengan cara menekan kawasan badan dengan hujung jari, tapak tangan, lengan, siku dengan tenknik urutan yang sistematik dan teratur. Urutan boleh digunakan pada yang <b>terseliuh, terkehel,sakit urat saraf, sakit kepala dan lenguh-lenguh seluruh badan.</b> </p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Ini adalah diantara penyakit yang boleh dikategorikan penyakit-penyakit ringan tetapi kalau dibiarkan ia boleh menjadi serius. Antara manfaat urutan ialah mengurangkan sakit kepala, mengurangkan sakit belakang, mengurangkan sakit sendi dan juga mengurangkan lenguh-lenguh badan.</p>
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;">Manfaat urutan/massage adalah seperti berikut:</p>
                <ul style="text-align: left; word-break: keep-all;">
                    <li>Mengurangkan tekanan pada otot</li>
                    <li>Meningkatkan pelbagai pergerakan</li>
                    <li>Meningkatkan prestasi sukan</li>
                    <li>Meningkatkan fungsi tisu lembut</li>
                    <li>Mengurangkan kekejangan otot dan keletihan</li>
                  </ul> 
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{asset('public/template/assets/carousel/services/massage.jpg')}}" alt="" style="width: 100%; height: auto;">
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
                <iframe width="100%" height="350px"  class="responsive-iframe" src="https://www.youtube.com/embed/omFGKax4nNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection