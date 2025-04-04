@extends ('layouts.master')

@section ('content')


<div class="content content-fixed content-auth">
    <div class="container">
      <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
        <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative" style="background: #30cbcb;">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
              <img src="{{ asset('public//template/assets/img/logo4.png')}}" class="img-fluid" alt="">
            </div>
          </div><!-- media-body -->
        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
          <div class="wd-100p">
            <h3 class="tx-color-01 mg-b-5">{{ __('common.login') }}</h3>
            <p class="tx-color-03 tx-16 mg-b-40">{{ __('common.login_welcome') }}</p>

            @include ('error_message')
            {{ Form::open(['method' => 'POST', 'url' => url('/login')]) }}
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="yourname@yourmail.com" name="email" value="{{ old('email', '') }}">
            </div>
            <div class="form-group">
              <div class="d-flex justify-content-between mg-b-5">
                <label class="mg-b-0-f">Password</label>
                {{-- <a href="" class="tx-13">Forgot password?</a> --}}
              </div>
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-brand-02 btn-block">{{ __('common.login') }}</button>
            <div class="tx-13 mg-t-20 tx-center">{{ __('common.not_have_acc') }} <a href="{{route('register')}}">{{ __('common.register_new_acc') }}</a></div>
          </div>
        </div><!-- sign-wrapper -->
      </div><!-- media -->
    </div><!-- container -->
  </div><!-- content -->

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection