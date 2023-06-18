@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 30px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" style="text-align: left;">
                {{-- <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="height: 100%; width: 100%" /> --}}
            </div>
            <div class="col-lg-6">
                <h1 style="font-size: 60px; text-decoration: none">Packages</h1>
            </div>
        </div>

    </div>
</section>

<section class="branch-info-section" style="padding-top: 30px; padding-bottom:10px;">
    <div class="container">
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 10px; letter-spacing: 0.5rem" class="revealUp">VVIP</h2>
        <div class="package-columns hidden-package"></div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">PAKEJ A</li>
                <li class="grey">RM 300</li>
                <li>Full Body (24 cup)</li>
                <li>Urutan Badan (45 min)</li>
                <li>Air Relax (30 min)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >PAKEJ B</li>
                <li class="grey">RM 225</li>
                <li>Full Body (24 cup)</li>
                <li>Urutan Badan (30 min)</li>
                <li><br/></li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px; background-color: #30cbcb">

    <div class="container" >
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 10px; letter-spacing: 0.5rem" class="revealUp">COMBO 3 IN 1</h2>

        <div class="package-columns hidden-package"></div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO A</li>
                <li class="grey">RM 200 (VIP)</li>
                <li class="white">VIP Full Body (24 cup)</li>
                <li class="white">HYPERVOLT Therapy</li>
                <li class="white">Air Relax</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >COMBO B</li>
                <li class="grey">RM 150 (VIP)</li>
                <li class="white">VIP Half Body (24 cup)</li>
                <li class="white">HYPERVOLT Therapy</li>
                <li class="white">Air Relax</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px;">

    <div class="container">
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">BEKAM SUNNAH</h2>
        <p style="text-align:center; font-size: 18px;" class="revealUp">(Bekam Angin & Darah)</p>

        <div class="package-columns hidden-package"></div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 1</li>
                <li class="grey" style="word-break: keep-all;">RM 160 (Normal) RM 200 (VIP)</li>
                <li>Full Body (24 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 2</li>
                <li class="grey" style="word-break: keep-all;">RM 110 (Normal) RM 120 (VIP)</li>
                <li>Half Body (14 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px; background-color: #30cbcb">

    <div class="container" >
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">TERAPI KHUSUS</h2>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 3</li>
                <li class="grey" style="word-break: keep-all;">RM 70 (Normal) RM 80 (VIP)</li>
                <li class="white">Bekam Wajah (8 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 4</li>
                <li class="grey" style="word-break: keep-all;">RM 160 (Normal) RM 200 (VIP)</li>
                <li class="white">Bekam Kepala (8 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 5</li>
                <li class="grey" style="word-break: keep-all;">RM 100 (Normal) RM 110 (VIP)</li>
                <li class="white">Bekam Kaki (12 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 6</li>
                <li class="grey" style="word-break: keep-all;">RM 100 (Normal) RM 120 (VIP)</li>
                <li class="white">Bekam Angin (21 cup)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:20px;">

    <div class="container">
        <h2 style="word-break: keep-all; text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">MASSAGE & RECOVERY</h2>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 7</li>
                <li class="grey">RM 100</li>
                <li>Urutan Badan (1 jam)</li>
                <li><br/></li>
                <li><br/></li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 8</li>
                <li class="grey">RM 110</li>
                <li>Sport Massage</li>
                <li>HYPERVOLT Therapy (1 jam)</li>
                <li><br/></li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 9</li>
                <li class="grey">RM 150</li>
                <li>Sport Massage</li>
                <li>HYPERVOLT Therapy</li>
                <li style="word-break: keep-all;">Air Relax (1 jam 30 minit)</li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 10</li>
                <li class="grey">RM 150</li>
                <li style="word-break: keep-all;">Air Relax Therapy - Leg Massage (30 min)</li>
                <li><br/></li>
                <li><br/></li>
                <li class="grey-button"><a href="#">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection