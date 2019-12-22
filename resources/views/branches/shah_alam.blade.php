@extends ('layouts.master')

@section ('content')
<div class="uk-overflow-hidden">
  <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-animation-reverse uk-transform-origin-top-right" 
    uk-scrollspy="cls: uk-animation-kenburns; repeat: true" data-src="{{asset('template/assets/carousel/branch/branch_shah_alam.jpg')}}" uk-img>
    <h2>EL MEDINA SPA BEKAM SHAH ALAM</h1>
  </div>
</div>

  <div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row background-logo">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="text-uppercase ">{{ __('common.about_us') }}</h3>
          </div>
        </div>
    </div>
  </div>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection