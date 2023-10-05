<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Import CSS/JS -->

<head>
  @include ('v2/layouts/header')
</head>

<body>
  <!-- Navbar -->
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>
  {{-- @include('v2/layouts/navbar') --}}
  
<section class="about-section navbar" style="padding: 0 0 0 0;">
    <div class="container" style=" background-color: #30cbcb;">
        <div class="col-lg-6 col-xs-6" style="text-align: left;">
            <a href="{{route('v2.home')}}" style="color:black;">
                <h4>Home</h4>
            </a>
        </div>
        <div class="col-lg-6 col-xs-6" style="text-align: right;">
            <a href="#" style="color:black;">
                {{-- <h4>Login/Register</h4> --}}
            </a>
        </div>
    </div>
</section>

<!-- Content -->
<section class="about-section" style="padding-top: 25px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-6" style="text-align: center;">
            <img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" style="display: block; margin-left: auto; margin-right: auto; height: 50%; width: 50%" />
        </div>
        <div class="col-lg-6">
            <h1 style="">Online Booking</h1>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-6" style="text-align: left;">
            <h3 style="word-break: keep-all;">Welcome to our Online Booking</h3>
            <span style="word-break: keep-all;">Please select a package to start a booking appointment</span>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
</section>

<div id="package-list">
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
        <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej A'])}}" style="text-decoration: none; color:black">
                <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej A">
                    <div class="booking-title">PAKEJ A </div>
                    <br/>
                    <div class="booking-details">Full Body (24 Cup) + Urutan Badan (1 Jam) + Air Relax (30 min)</div>
                    <hr class="line">
                    <div class="booking-price">
                        <span>RM 300</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej B'])}}" style="text-decoration: none; color:black">
            <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej B">
                <div class="booking-title">PAKEJ B </div>
                <br/>
                <div class="booking-details">Full Body (24 Cup) + Urutan Badan (1 Jam)</div>
                <hr class="line">
                <div class="booking-price">
                    <span>RM 250</span>
                </div>
            </div>
        </a>
        </div>
    </div>
  </section>
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
        <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej C'])}}" style="text-decoration: none; color:black">
                <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej A">
                    <div class="booking-title">PAKEJ C </div>
                    <br/>
                    <div class="booking-details">Full Body (24 Cup) + Urutan Badan (30 Minit)</div>
                    <hr class="line">
                    <div class="booking-price">
                        <span>RM 210</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Combo A'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Combo A">
                  <div class="booking-title">COMBO A </div>
                  <br/>
                  <div class="booking-details">Full Body (24 Cup) + HYPERVOLT Therapy + Air Relax</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 200</span>
                  </div>
              </div>
            </a>
          </div>
        <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Combo B'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Combo B">
                  <div class="booking-title">COMBO B </div>
                  <br/>
                  <div class="booking-details">Half Body (14 Cup) + HYPERVOLT Therapy + Air Relax </div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 150</span>
                  </div>
              </div>
            </a>
        </div>
    </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 1'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 1">
                  <div class="booking-title">PAKEJ 1</div>
                  <br/>
                  <div class="booking-details">Full Body (24 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 160</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 2'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 2">
                  <div class="booking-title">PAKEJ 2 </div>
                  <br/>
                  <div class="booking-details">Half Body (14 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 110</span>
                  </div>
              </div>
            </a>
        </div>
    </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 3'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 3">
                  <div class="booking-title">PAKEJ 3</div>
                  <br/>
                  <div class="booking-details">Bekam Wajah (8 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 70</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 4'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 4">
                  <div class="booking-title">PAKEJ 4 </div>
                  <br/>
                  <div class="booking-details">Bekam Kepala (8 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 70</span>
                  </div>
              </div>
            </a>
          </div>
      </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 5'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 5">
                  <div class="booking-title">PAKEJ 5</div>
                  <br/>
                  <div class="booking-details">Bekam Kaki (12 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 100</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 6'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 6">
                  <div class="booking-title">PAKEJ 6 </div>
                  <br/>
                  <div class="booking-details">Bekam Angin (21 Cup)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 100 (Normal) RM 120 (VIP)</span>
                  </div>
              </div>
            </a>
          </div>
      </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 7'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 7">
                  <div class="booking-title">PAKEJ 7</div>
                  <br/>
                  <div class="booking-details">Relaxing Massage (1 jam)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 100</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 8'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 8">
                  <div class="booking-title">PAKEJ 8 </div>
                  <br/>
                  <div class="booking-details">Sport Massage / Urutan Melayu (1 jam)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 110</span>
                  </div>
              </div>
            </a>
          </div>
      </div>
  </section>
  
  <section class="about-section" style="padding-top: 20px; padding-bottom:5px; text-align: left;">
      <div class="container">
          <div class="col-lg-6">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 9'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 9">
                  <div class="booking-title">PAKEJ 9</div>
                  <br/>
                  <div class="booking-details">Sport Massage + HYPERVOLT Therapy + Air Relax (1 jam 30 minit)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 150</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6 booking">
            <a href="{{route('v2.checkAvailability', ['type' => 'Pakej 10'])}}" style="text-decoration: none; color:black">
              <div class="booking-box" id="box" onclick="showType(this)" data-package-type="Pakej 10">
                  <div class="booking-title">PAKEJ 10 </div>
                  <br/>
                  <div class="booking-details">Air Relax Therapy (Leg Massage) (30 minit)</div>
                  <hr class="line">
                  <div class="booking-price">
                      <span>RM 50</span>
                  </div>
              </div>
            </a>
          </div>
      </div>
  </section>

</div>
  
  <!-- Footer -->
  @include('v2/layouts/footer')

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ asset('public/v2/custom.js') }}"></script>

</html>
