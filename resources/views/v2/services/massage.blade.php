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
{{-- <section class="map-section">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
        width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
    </div>
</section> --}}

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection