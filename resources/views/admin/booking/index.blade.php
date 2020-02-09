@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-5 pl-5">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Booking List</h3>
            </div>
        </div>
        
        <div class="row row-xl">
            <div class="col">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <td>Nama</td>
                                    <td>Cawangan</td>
                                    <td>Pakej</td>
                                    <td>Tarikh Tempahan</td>
                                    <td>Jam</td>
                                    <td>Jantina</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr style="background-color:{{$booking->status == 1 ? '#228B22' : ($booking->status == 0 ? '#B22222' : '#9400D3')}};">
                                    <td>{{$booking->user->name}}</td>
                                    <td>{{$booking->branch}}</td>
                                    <td>{{$booking->package ? $booking->package->title : '-'}}</td>
                                    <td>{{date('d/m/Y', strtotime($booking->booking_date))}}</td>
                                    <td>{{date('H:i A', strtotime($booking->booking_date))}}</td>
                                    <td>{{$booking->gender == 'L' ? 'LELAKI' : 'WANITA'}}</td>
                                    <td>
                                        {!! Form::open(['url' => route('admin.booking.update', $booking->id),'method' => 'POST', 'data-parsley-validate'])!!}
                                        @method('PUT')
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
                </div><!-- card -->
            </div><!-- col -->
        </div>

    </div>
</div>

@endsection
@section('js')

<script type="text/javascript">

</script>
@endsection