@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-3 pr-3">

        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <!-- Content Title -->
                <h4 class="mg-b-0 tx-spacing--1">{{ __('common.your_appointment') }} </h4>
                <p> {{__('common.thank_you_booking')}} </p>
            </div>
        </div>

        <div class="row row-xs pb-5">
            <div class="col mg-t-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>{{__('common.date')}}</th>
                                <th>{{__('common.branches')}}</th>
                                <th>{{__('common.time')}}</th>
                                <th>{{__('common.gender')}}</th>
                                <th>{{__('common.packages')}}</th>
                                <th>{{__('common.status')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{date('d/m/Y', strtotime($booking->booking_date))}}</td>
                                <td>{{ $booking->branch }}</td>                                   
                                <td>{{ date('h:i A', strtotime($booking->booking_date)) }}</td>                                   
                                <td>{{ $booking->gender == 'L' ? __('common.men') : __('common.women') }}</td>                                   
                                <td>{{ $booking->package ? $booking->package->title : "-"}} 
                                    {{-- @switch($booking->package_id)
                                        @case(1)
                                        VVIP A - Full Body (24 Cup) + Sport Massage (45 Minutes) + Air Relax (30 Minutes)
                                            @break
                                        @case(2)
                                        VVIP B - Full Body (24 Cup) + Sport Massage (30 Minutes)
                                            @break
                                        @case(3)
                                        PAKEJ 1 - Full Body (24 Cup) 
                                            @break
                                        @case(4)
                                        PAKEJ 2 - Half Body (14 Cup)   
                                            @break
                                        @case(5)
                                        PAKEJ 3 - Bekam Wajah (8 Cup)   
                                            @break
                                        @case(6)
                                        PAKEJ 4 - Bekam Migrain (8 Cup)   
                                            @break
                                        @case(7)
                                        PAKEJ 5 - Bekam Gout (12 Cup)   
                                            @break
                                        @case(8)
                                        PAKEJ 6 - Bekam Angin (21 Cup) 
                                            @break
                                        @case(9)
                                        PAKEJ 7 - Urutan Badan (8 Cup)   
                                            @break
                                        @case(10)
                                        PAKEJ 8 - Sport Massage + Hypervolt Therapy    
                                            @break
                                        @case(11)
                                        PAKEJ 9 - Sport Massage + Hypervolt Therapy + Air Relax    
                                            @break
                                        @case(12)
                                        PAKEJ 10 - Sport Recovery   
                                            @break
                                        @default
                                            -
                                    @endswitch --}}
                                </td> 
                                <td>
                                    {{$booking->status == 0 ? "Pending" : ($booking->status == 1 ? "Success" : "Cancel")}}
                                </td>                                  
                            </tr>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div><!-- col -->
        </div>
        <div class="row pb-1 mg-b-50">
            <div class="col-lg-12 text-center">
                <a href=" {{url('/')}} " class="btn btn-primary">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection