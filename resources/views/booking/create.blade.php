@extends ('layouts.master')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
          <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

@endsection

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-5 pr-5">

        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <!-- Content Title -->
                <h4 class="mg-b-0 tx-spacing--1">{{ __('common.make_appointment') }} </h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-12">
                @include ('error_message')
                {!! Form::open(['url' => route('store-booking'),'method' => 'POST', 'data-parsley-validate']) !!}
                @include('booking.form')
                <div class="form-group row text-center ">
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a class="btn btn-secondary" href="{{url('/')}}" data-dismiss="modal">Cancel
                        </a>
                    </div>
                </div>
                {!! Form::close() !!}              
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.date').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '-0d'
            });
            $('.time').timepicker({
                timeFormat: 'h:mm p',
                interval: 60,
                minTime: '10as',
                maxTime: '9:00pm',
                defaultTime: '12',
                startTime: '10:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>
@endsection