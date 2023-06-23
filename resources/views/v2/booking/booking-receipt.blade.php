@extends ('v2.layouts.master')

@section ('content')
<button onclick="topFunction()" id="goToBottomButton" title="Go to top">^</button>

<section class="branch-header" style="padding-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align: left; ">
                <span style="font-size: 40px; text-decoration: none; color:black; white-space: pre-wrap; word-break: keep-all;">Appointment Information</span>
            </div>
        </div>
    </div>
</section>

<!-- branch-info-section -->
<section class="branch-info-section" style="padding-top: 20px; padding-bottom: 10px; font-size: 16px">
    <div class="container">
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-12 col-xs-12">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all; font-size: 18px"><u>Thank you for make appointment with us!</u></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>NAME:</b> {{ $booking->user->name }}</p>
            </div>
            <div class="col-lg-6 col-xs-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>GENDER:</b> {{ $booking->gender == "L" ? "Male" : "Female" }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>DATE:</b> {{ date('d/M/Y', strtotime($booking->booking_date)) }}</p>
            </div>
            <div class="col-lg-6 col-xs-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>TIME:</b> {{ date('h:i A', strtotime($booking->booking_date)) }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>PACKAGE:</b> {{ $booking->package ? $booking->package->title : "-" }}</p>
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify; white-space: pre-wrap; word-break: keep-all;"><b>BRANCH:</b>El Medina Bekam & Recovery {{ $booking->branch }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" style="text-align: justify; word-break: keep-all;">
                <p>
                    <u style="font-size: 20px;">Branch Information</u>
                </p>
                <p>
                    <b>PHONE</b> : {{ $phoneNo }}
                </p>
                <p>
                    <b>Address</b> : {{ $address }}
                </p>
                <p>
                    <b>Facebook</b> : <a href="{{ $facebookUrl }}" class="btn btn-social" target="_blank"><i style='font-size:24px' class='fab'>&#xf39e;</i></a>
                </p>
            </div>
        </div>


    </div>
</section>


<!-- Services Section -->
<section class="map-section" style="padding-bottom: 20px;">
    <div class="container">
        @switch($booking->branch)
            @case("KUANTAN")
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
                width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
                @break
            @case("SHAH ALAM")
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
                width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
                @break
            @case("ULU KLANG")
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5761908200093!2d101.75463901426286!3d3.2054137536992826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc399ec2f54fd1%3A0xd80a5aca4960b3b6!2sEl%20Medina%20Bekam%20and%20Recovery%20Ulu%20Klang!5e0!3m2!1sen!2smy!4v1633719169655!5m2!1sen!2smy"
                width="100%" height="350px" frameborder="0" style="" allowfullscreen=""></iframe>
                @break
            @default
                
        @endswitch
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

@endsection