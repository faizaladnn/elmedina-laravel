<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Import CSS/JS -->

<head>
  @include ('v2/layouts/header')
  <style>
    
  </style>
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

{!! Form::open(['url' => route('v2.store-booking'), 'method' => 'POST', 'data-parsley-validate']) !!}
{!! Form::hidden('package', $type, []) !!}
<section class="about-section" style="padding-top: 0px; padding-bottom:0px; text-align:left;">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h4 style="font-weight: 100; word-break: keep-all;">Please fill in your information</h4>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" id="fname" name="name" placeholder="Name" required>
            </div>
            <div class="col-lg-6" style="text-align: left;">
                <input type="text" id="email" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" name="phone_no" placeholder="Phone Number" required>
            </div>
            <div class="col-lg-6">
                <div class="radio-toolbar">
                    <input class="radio-button" type='radio' id='male' checked='checked' name='gender' value="MALE">
                    <label for='male'>Male</label>
                    <input class="radio-button" type='radio' id='female' name='gender' value="FEMALE">
                    <label for='female'>Female</label>
                </div>
            </div>
        </div>
        <hr style="border: 1px dashed black;"/>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <h4 style="font-weight: 100; word-break: keep-all;">Please select <b>branch</b>  to make a booking appointment</h4>
            <div class="radio-toolbar">
                <input class="radio-button" type="radio" id="radioShahAlam" name="branch" value="shah-alam" >
                <label for="radioShahAlam">Shah Alam</label>
            
                <input class="radio-button" type="radio" id="radioKuantan" name="branch" value="kuantan">
                <label for="radioKuantan">Kuantan</label>
                
            </div>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <h4 style="font-weight: 100;">Please select <b>date</b> to make a booking appointment</h4>
            <div class="datepicker">
                <div id="title" class="label">1st  {{ date(' M Y') }}</div>
                <div class="block action" onclick="addDay(1)">+</div>
                <div class="block action" onclick="addMonth(1)">+</div>
                <div class="block action" onclick="addYear(1)">+</div>
                <div ></div>
                <div class="block middle" id="day">1</div>
                <div class="block middle" id="month">May</div>
                <div class="block middle" id="year">15</div>
                <div ></div>
                <div class="block action" onclick="addDay(-1)">-</div>
                <div class="block action" onclick="addMonth(-1)">-</div>
                <div class="block action" onclick="addYear(-1)">-</div>
                <input type="hidden" name="date" id="bookingDate" value="">
            </div>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:5px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <h4 style="font-weight: 100; word-break: keep-all;">Please select a <b>time</b> to make a booking appointment</h4>
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
        <div class="col-lg-12" style="text-align: left;">
            <h3 style="word-break: keep-all;">You have selected {{$type}} on <span id="newDate"></span> <span id="newTime">(when)</span> at El Medina Bekam & Recovery <span id="newBranch">(where) branch</span> </h3>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top: 0px; padding-bottom:50px;">
    <div class="container">
        <div class="col-lg-12" style="text-align: center;">
            <button type="submit" onclick="confirmationFunction()">Save</button>
        </div>
    </div>
</section>
{!! Form::close() !!}
  
  <!-- Footer -->
  @include('v2/layouts/footer')

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ asset('public/v2/custom.js') }}"></script>
<script>
    function confirmationFunction() {
        confirm("Confirm booking ?", "Cancel", "Yes, confirm");
    }
    </script>
</html>
