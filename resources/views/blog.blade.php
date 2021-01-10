@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-2 pr-2">
      <div class="align-items-center justify-content-between">
        
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <h3 class="text-uppercase text-left ">{{ __('common.blog') }}</h3>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/ImRQHkY21kU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/J2cEcrbIH7o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row pt-2">
            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/bGjNV0dPMHo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/omFGKax4nNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row pt-2">
            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/uzLC_ZaikFs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/N28bwaApA8k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row pt-2">
            <div class="col-lg-6 uk-padding">
                <div class="container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/megzHbkUD3A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
      </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
UIkit.slider(element).startAutoplay();
</script>
@endsection 