<!DOCTYPE html>
<html lang="en">
<!-- Import CSS/JS -->
<head>
  @include ('admin.layout.header')
</head>
<body>
  <!-- Content -->
  <div class="content content-fixed content-auth-alt">
    <div class="container ht-100p">
      <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
                <div class="wd-350 wd-sm-350 mg-b-30" style="background-color:#1c2252;"><img src="{{asset('public/template/assets/img/logo3.jpg')}}" class="img-fluid" alt=""></div>
                @include('error_message')
                {{ Form::open(['method' => 'POST', 'url' => route('admin.login')]) }}
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="yourname@yourmail.com" name="email">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                    {{-- <a href="" class="tx-13">Forgot password?</a> --}}
                    </div>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div>
                <button class="btn btn-brand-02 btn-block" type="submit">Log In</button>
                {!! Form::close() !!}
            </div>
          </div><!-- sign-wrapper -->
      </div>
    </div><!-- container -->
  </div><!-- content -->
</body>
</html>