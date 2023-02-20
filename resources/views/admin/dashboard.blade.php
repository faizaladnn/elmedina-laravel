@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
  <div class="container-fluid pr-2 pl-2">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
            </ol>
          </nav> --}}
          <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
        </div>
        {{-- <div class="d-none d-md-block">
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button>
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
          <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="sliders" class="wd-10 mg-r-5"></i> Settings</button>
        </div> --}}
      </div>

      
      
      <div class="row">
        <div class="col-lg-8">
          <h3>Booking List</h3>
            <div class="table-responsive">
              <table class="table table-bordered" width='100%'>
                  <thead class="thead-light">
                      <tr>
                          <td>Nama</td>
                          <td>Telefon No</td>
                          <td>Cawangan</td>
                          <td>Pakej</td>
                          <td>Tarikh Tempahan</td>
                          <td>Jam</td>
                          <td>Jantina</td>
                          <td width="10%">Status</td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($bookings as $booking)
                      <tr style="background-color:{{$booking->status == 1 ? '#228B22' : ($booking->status == 0 ? '' : '#9400D3')}};">
                          <td>{{$booking->user ? $booking->user->name : ""}}</td>
                          <td>{{$booking->user ? $booking->user->phone_no : ""}}</td>
                          <td>{{$booking->branch}}</td>
                          <td>{{$booking->package ? $booking->package->title : '-'}}</td>
                          <td>{{date('d/m/Y', strtotime($booking->booking_date))}}</td>
                          <td>{{date('H:i A', strtotime($booking->booking_date))}}</td>
                          <td>{{$booking->gender == 'L' ? 'LELAKI' : 'WANITA'}}</td>
                          <td>
                              {!! Form::open(['url' => route('admin.booking.update', $booking->id),'method' => 'POST', 'data-parsley-validate'])!!}
                              @method('PUT')
                              {!! Form::select('status', $status, $booking->status, ['class' => '', 'onchange' => 'this.form.submit()', $booking->status == 1 ? 'disabled' : '']) !!}
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
          </div><!-- table-responsive -->
        </div>

        <div class="col-lg-4">
          <h3>Informations</h3>
          <div class="row">
            <div class="col-sm-12 col-md-21 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h6 class="mg-b-0">Customers</h6>
                </div><!-- card-header -->
                <div class="card-body tx-center">
                  <h4 class="tx-normal tx-rubik tx-40 tx-spacing--1 mg-b-0">{{$users->count()}}</h4>
                  {{-- <p class="tx-12 tx-uppercase tx-semibold tx-spacing-1 tx-color-02">Organic Search</p> --}}
                  <p class="tx-12 tx-color-03 mg-b-0">Total customers that have booking with EL MEDINA website</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t-0 pd-t-0">
                  {{-- <button class="btn btn-sm btn-block btn-outline-primary btn-uppercase tx-spacing-1">Learn More</button> --}}
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
          </div>
        </div>
      </div>
      <h3>Total Booking</h3>
      <div class="row row-xs">
        <div class="col-sm-6 col-lg-3">
          <div class="card card-body">
            <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Kuantan</h6>
            <div class="d-flex d-lg-block d-xl-flex align-items-end">
              <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">{{$kuantan->count()}} Booking</h3>
            </div>
            <div class="chart-three">
                <div id="flotChart3" class="flot-chart ht-30"></div>
              </div><!-- chart-three -->
          </div>
        </div><!-- col -->
        <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
          <div class="card card-body">
            <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Shah Alam</h6>
            <div class="d-flex d-lg-block d-xl-flex align-items-end">
              <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"> {{$shah_alam->count()}} Booking</h3>
            </div>
            <div class="chart-three">
                <div id="flotChart4" class="flot-chart ht-30"></div>
              </div><!-- chart-three -->
          </div>
        </div><!-- col -->
        <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
          <div class="card card-body">
            <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">HULU KELANG</h6>
            <div class="d-flex d-lg-block d-xl-flex align-items-end">
              <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"> {{$ulu_klang->count()}} Booking</h3>
            </div>
            <div class="chart-three">
                <div id="flotChart4" class="flot-chart ht-30"></div>
              </div><!-- chart-three -->
          </div>
        </div><!-- col -->
      </div><!-- row -->
    </div>
  </div><!-- container -->
</div><!-- content -->


@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection