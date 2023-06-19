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
                <h4>Login/Register</h4>
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
        <div class="col-lg-12" style="text-align: left;">
            <h3 style="word-break: keep-all;">You have selected {{$type}} on <span id="newTime">(when)</span> at <span id="newBranch">(where) branch</span> </h3>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <h4 style="font-weight: 100;">Please select a time to make a booking appointment</h4>
            <div class="radio-toolbar">
                @for ($i = 10; $i <= 21; $i++)
                    <input class="radio-button-time" type="radio" id="radio{{$i}}" name="time" value="{{ date('h:i A', mktime($i,0,0,1,1,2011)) }}" >
                    <label for="radio{{$i}}">{{ date('h:i A', mktime($i,0,0,1,1,2011)) }}</label>
                @endfor
            </div>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <h4>Please select a branch to make a booking appointment</h4>
            <div class="radio-toolbar">
                <input class="radio-button" type="radio" id="radioShahAlam" name="branch" value="shah-alam" >
                <label for="radioShahAlam">Shah Alam</label>
            
                <input class="radio-button" type="radio" id="radioKuantan" name="branch" value="kuantan">
                <label for="radioKuantan">Kuantan</label>
            
                <input class="radio-button" type="radio" id="radioUluKlang" name="branch" value="ulu-klang">
                <label for="radioUluKlang">Ulu Klang</label> 
            </div>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
</section>
  
  <!-- Footer -->
  @include('v2/layouts/footer')

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ asset('public/v2/custom.js') }}"></script>

</html>
