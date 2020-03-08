@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid">
        <div class="align-items-center justify-content-between">
            <div class="row">
                <div class="col-lg-6 col-xs-4">
                    <h3>Edit Booking</h3>
                </div>
                <div class="col-lg-6 col-xs-4 text-right">
                    
                </div>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col mg-t-10">
                @include ('error_message')

                {!! Form::open(array('url' => route('admin.booking.update',[$booking->id]),'method' => 'PUT', 'data-parsley-validate')) !!}
                
                <table class="table table-bordered">
                    <tr >
                        <th style="text-align:center;">Tarikh</th>
                        <th style="text-align:center;">Slot masa</th>
                        <th style="text-align:center;">Cawangan</th>
                        <th style="text-align:center;">Perkhidmatan</th>
                        <th style="text-align:center;">Status</th>
                    </tr>
                    <tr style="border-top: 1px solid black;">
                        <td style="text-align:center;">{{date('d-m-Y', strtotime($booking->booking_date))}}</td>
                        <td style="text-align:center;">{{date('h:i A', strtotime($booking->booking_date))}}</td>
                        <td style="text-align:center;">{{$booking->branch}}</td>
                        <td style="text-align:center;">{{$booking->package ? $booking->package->title : "-"}}</td>
                        <td style="text-align:center;">
                        
                            {!! Form::select('status', $status, $booking->status, ['class' => 'form-control', 'onchange' => 'this.form.submit()', $booking->status == 1 ? 'disabled' : '']) !!}
                        </td>
                    </tr>
                </table>

               <div class="form-group ">
                   <div class="col-sm-10">
                       <a class="btn btn-secondary"
                          href="{{url('/admin/dashboard')}}" data-dismiss="modal">Cancel
                       </a>
                       {{-- {{ Form::submit('Submit', ['class' => 'btn btn-primary ']) }} --}}
                       {!! Form::close() !!}
                   </div>
               </div>
            </div><!-- col -->
        </div>

    </div>
</div>
@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection