@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-5 pl-5">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Booking List</h3>
            </div>
        </div>

        

        <div class="row row-xs">
            <div class="col mg-t-10">
                <div class="card card-dashboard-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <td>Nama</td>
                                    <td>Cawangan</td>
                                    <td>Tarikh Tempahan</td>
                                    <td>Jantina</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{$booking->user->name}}</td>
                                    <td>{{$booking->branch}}</td>
                                    <td>{{date('d/m/Y', strtotime($booking->booking_date))}}</td>
                                    <td>{{$booking->gender == 'L' ? 'LELAKI' : 'WANITA'}}</td>
                                    <td>
                                        @switch($booking->status)
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
                                                
                                        @endswitch
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

@section('js')

<script type="text/javascript">

</script>
@endsection