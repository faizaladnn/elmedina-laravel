@extends ('layouts.master')

@section ('content')

<div class="content content-fixed content-auth">
    <div class="container">
      <div class="media align-items-stretch justify-content-center ht-100p">
        <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
          <div class="pd-t-20 wd-100p">
            <h4 class="tx-color-01 mg-b-5">Daftar Akaun Baharu</h4>
            <br/>

            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              <div class="d-flex justify-content-between mg-b-5">
                <label class="mg-b-0-f">Password</label>
              </div>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label>Telephone Number</label>
              <input type="number" class="form-control" placeholder="Enter your phone number">
            </div>
            
            <button class="btn btn-brand-02 btn-block">Daftar</button>
            <div class="tx-13 mg-t-20 tx-center">Sudah ada akaun? <a href="{{route('login')}}">Log In</a></div>
          </div>
        </div><!-- sign-wrapper -->
        <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative" style="background: #172830;">
          <div class="mx-lg-wd-500 mx-xl-wd-550">
            <img src="{{asset('/template/assets/img/logo2.png')}}" class="img-fluid" alt="">
          </div>
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- container -->
  </div><!-- content -->

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection