@extends ('layouts.master')

@section ('content')
<div class="uk-background-fixed" style="background-image: url({{asset('template/assets/carousel/branch/branch_kuantan.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-center uk-text-bolder uk-panel uk-light uk-padding-large uk-padding-remove-bottom"><h1>KUANTAN</h1></div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="phone"></i> 010-838 7030 
                <a href="https://www.facebook.com/elmedinaspabekamshahalam/" class="btn btn-social" target="_blank"><i class="fab fa-facebook"></i> EL MEDINA KUANTAN</a>
                <i class="fas fa-home" title="Address"></i> A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
            <h5>
                <i data-feather="clock"></i>
                Monday - Sunday : 10AM - 10PM
            </h5>
        </div>
        <div class="uk-text-center uk-text-bold uk-panel uk-light uk-padding-small">
          <button type="button" class="btn btn-warning uk-animation-shake"><span style="font-size:0.9rem;">MAKE AN APPOINTMENT</span></button>
        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
width="100%" height="100%" frameborder="0" style="" allowfullscreen=""></iframe>

@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection