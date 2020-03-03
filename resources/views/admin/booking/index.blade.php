@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-2 pl-2">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Booking List</h3>
            </div>
        </div>
        
        <div class="row pb-3">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                Pending <span style="background-color:#b22222;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> - {{$pending_count}}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                Success <span style="background-color:#228b22;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> - {{$success_count}}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                Cancel <span style="background-color:#9400d3;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> - {{$cancel_count}}
            </div>
        </div>

        <div class="row row-xl">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <td width="2%"></td>
                                <td>Nama</td>
                                <td>No Telefon</td>
                                <td>Cawangan</td>
                                <td>Pakej</td>
                                <td>Tarikh Tempahan</td>
                                <td>Jam</td>
                                <td>Jantina</td>
                                <td width="9%">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $key => $booking)
                            <tr style="background-color:{{$booking->status == 1 ? '#228B22' : ($booking->status == 0 ? '#B22222' : '#9400D3')}};">
                                <td> {{$key+1}} </td>
                                <td>{{$booking->user ? $booking->user->name : ""}}</td>
                                <td>{{$booking->user ? $booking->user->phone_no : ""}}</td>
                                <td>{{$booking->branch}}</td>
                                <td>{{$booking->package ? $booking->package->title : '-'}}</td>
                                <td>{{date('d/m/Y', strtotime($booking->booking_date))}}</td>
                                <td>{{date('h:i A', strtotime($booking->booking_date))}}</td>
                                <td>{{$booking->gender == 'L' ? 'LELAKI' : 'WANITA'}}</td>
                                <td>
                                    {!! Form::open(['url' => route('admin.booking.update', $booking->id),'method' => 'POST', 'data-parsley-validate'])!!}
                                    @method('PUT')
                                    {!! Form::hidden('user_id', $booking->user ? $booking->user->id : 0, ['class' => 'form-control']) !!}
                                    {!! Form::select('status', $status, $booking->status, ['class' => 'form-control', 'onchange' => 'this.form.submit()', $booking->status == 1 ? 'disabled' : '']) !!}
                                    {!! Form::close() !!}
                                    {{-- @switch($booking->status)
                                        @case(0)
                                            {{'Pending'}}
                                            @break
                                        @case(1)
                                        {{'Success'}}
                                            @break
                                        @case(2)
                                        {{'Cancel'}}
                                            @break
                                        @default
                                            
                                    @endswitch --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right p-2">{{ $bookings->links() }}</div>
                </div><!-- table-responsive -->
            </div><!-- col -->
        </div>
    </div>
</div>

@endsection
@section('js')

<script type="text/javascript">

</script>
@endsection