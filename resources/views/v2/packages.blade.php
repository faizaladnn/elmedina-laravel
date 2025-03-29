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


{{-- New section uodate at 4/2/2025 --}}

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:20px;">

    <div class="container">
        <h2 style="word-break: keep-all; text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">COMBO 2 IN 1</h2>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO A</li>
                <li class="grey">RM 250</li>
                <li style="word-break: keep-all;">Urutan 1 Jam</li>
                <li style="word-break: keep-all;">Bekam Full Body (24 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo A'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO B</li>
                <li class="grey">RM 210</li>
                <li style="word-break: keep-all;">Urutan 1 Jam</li>
                <li style="word-break: keep-all;">Bekam Half Body (14 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo B'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO C</li>
                <li class="grey">RM 210</li>
                <li style="word-break: keep-all;">Urutan 30 Minit</li>
                <li style="word-break: keep-all;">Bekam Full Body (24 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo C'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO D</li>
                <li class="grey">RM 160</li>
                <li style="word-break: keep-all;">Urutan 30 Minit</li>
                <li style="word-break: keep-all;">Bekam Half Body (14 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo D'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>
{{-- END New section update at 4/2/2025 --}}

<section class="branch-info-section" style="padding-top: 30px; padding-bottom:10px; background-color: #30cbcb">
    <div class="container">
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 10px; letter-spacing: 0.5rem; word-break: keep-all;" class="revealUp">BEKAM SUNNAH & TERAPI KHUSUS</h2>
        {{-- <div class="package-columns hidden-package"></div> --}}
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">PAKEJ 1</li>
                <li class="grey">RM 150</li>
                <li class="white">Bekam Full Body (24 cup)</li>
                <li class="white" style="word-break: keep-all;">Percuma urutan asas + Guasha + Bekam Luncur</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 1'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >PAKEJ 2</li>
                <li class="grey">RM 100</li>
                <li class="white">Bekam Half Body (14 cup)</li>
                <li class="white" style="word-break: keep-all;">Percuma urutan asas + Guasha + Bekam Luncur</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 2'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >PAKEJ 3</li>
                <li class="grey">RM 70</li>
                <li class="white">Bekam Wajah (8 cup)</li>
                <li class="white"><br/><br/><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 3'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >PAKEJ 4</li>
                <li class="grey">RM 70</li>
                <li class="white" style="word-break: keep-all;">Bekam Kepala (8 cup)</li>
                <li class="white"><br/><br/><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 4'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >PAKEJ 5</li>
                <li class="grey">RM 100</li>
                <li class="white">Bekam Kaki (14 cup)</li>
                <li class="white"><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 5'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>



<section class="branch-info-section" style="padding-top: 30px; padding-bottom:10px;">
    <div class="container">
        <h2 style="word-break: keep-all; text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">MASSAGE & RECOVERY</h2>
        {{-- <div class="package-columns hidden-package"></div> --}}
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 6</li>
                <li class="grey">RM 60</li>
                <li class="white" style="word-break: keep-all;">Urutan 30 Minit</li>
                <li class="white"><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 6'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 7</li>
                <li class="grey">RM 110</li>
                <li class="white" style="word-break: keep-all;">Urutan Melayu (1 jam)</li>
                <li class="white"><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 7'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 8</li>
                <li class="grey">RM 110</li>
                <li class="white">Sport Massage</li>
                <li class="white">Hypervolt Therapy <br/><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 8'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 9</li>
                <li class="grey">RM 80</li>
                <li class="white" style="word-break: keep-all;">Sport Recovery </li>
                <li class="white"><br/><br/></li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 9'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:20px; ">

    <div class="container">
        
    </div>
</section>

{{-- <section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px;">

    <div class="container" >
        <h2 style="text-align:center; text-decoration: underline solid white 20%; padding-bottom: 10px; letter-spacing: 0.5rem" class="revealUp">COMBO 3 IN 1</h2>
        <p style="text-align:center; font-size: 14px;" class="revealUp">(Free Urutan Asas, Urutan Guasha & Bekam Luncur)</p>

        <div class="package-columns hidden-package"></div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">COMBO A</li>
                <li class="grey">RM 200</li>
                <li class="white">Full Body (24 cup)</li>
                <li class="white" style="word-break: keep-all;">Hypervolt Therapy</li>
                <li class="white">Air Relax</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo A'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header" >COMBO B</li>
                <li class="grey">RM 150</li>
                <li class="white">Half Body (14 cup)</li>
                <li class="white" style="word-break: keep-all;">Hypervolt Therapy</li>
                <li class="white">Air Relax</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Combo B'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px; background-color: #30cbcb">

    <div class="container">
        <h2 style="text-align:center; text-decoration: underline solid #30cbcb 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">BEKAM SUNNAH</h2>
        <p style="text-align:center; font-size: 14px;" class="revealUp">(Free Urutan Asas, Urutan Guasha & Bekam Luncur)</p>

        <div class="package-columns hidden-package"></div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 1</li>
                <li class="grey" style="word-break: keep-all;">RM 160</li>
                <li class="white">Full Body (24 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 1'])}}">Book Now</a></li>
            </ul>
        </div>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 2</li>
                <li class="grey" style="word-break: keep-all;">RM 110</li>
                <li class="white">Half Body (14 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 2'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="branch-info-section" style="padding-top: 10px; padding-bottom:10px;">

    <div class="container" >
        <h2 style="text-align:center; text-decoration: underline solid white 20%; padding-bottom: 3px; letter-spacing: 0.5rem" class="revealUp">TERAPI KHUSUS</h2>
        <p style="text-align:center; font-size: 14px;" class="revealUp">(Free Urutan Asas, Urutan Guasha & Bekam Luncur)</p>

        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 3</li>
                <li class="grey" style="word-break: keep-all;">RM 70</li>
                <li class="white">Bekam Wajah (8 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 3'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 4</li>
                <li class="grey" style="word-break: keep-all;">RM 70</li>
                <li class="white">Bekam Kepala (8 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 4'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 5</li>
                <li class="grey" style="word-break: keep-all;">RM 100</li>
                <li class="white">Bekam Kaki (12 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 5'])}}">Book Now</a></li>
            </ul>
        </div>
        <div class="package-columns">
            <ul class="package-price">
                <li class="package-header">Pakej 6</li>
                <li class="grey" style="word-break: keep-all;">RM 100</li>
                <li class="white">Bekam Angin (21 cup)</li>
                <li class="grey-button"><a href="{{route('v2.checkAvailability', ['type' => 'Pakej 6'])}}">Book Now</a></li>
            </ul>
        </div>
    </div>
</section> --}}


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