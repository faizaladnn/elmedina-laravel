@extends ('layouts.master')

@section ('content')

<div class="content content-fixed content-auth">
    <div class="container">
      <div class="media align-items-stretch justify-content-center ht-100p">
        <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
          <div class="pd-t-10 wd-100p">
            <h4 class="tx-color-01 mg-b-5">{{ __('common.register_new_acc') }}</h4>
            <div class="card-body pt-0">
              <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="form-group row mg-b-0">
                      <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group row mg-b-0">
                      <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group row mg-b-0">
                      <label for="phone_no" class="col-form-label text-md-right">{{ __('Telephone Number') }}</label>
                      <input id="phone_no" type="number" class="form-control @error('email') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">
                      @error('phone_no')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group row mg-b-0">
                      <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-group row">
                      <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>

                  <div class="form-group row">
                    <button type="submit" class="btn btn-brand-02 btn-block">{{ __('common.register') }}</button>
                    <div class="tx-13 mg-t-20 tx-center">{{ __('common.have_acc') }} <a href="{{route('login')}}">{{ __('common.login') }}</a></div>
                  </div>
              </form>
          </div>
        </div>
        </div><!-- sign-wrapper -->
        <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative" style="background: #3098d4;">
          <div class="mx-lg-wd-500 mx-xl-wd-550">
            <img src="{{ asset('public//template/assets/img/logo3.png')}}" class="img-fluid" alt="">
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