@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h5>FIND <span style="font-weight:bold;">EL MEDINA</span> AROUND YOU </h5>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <select class="form-control select2" name="branch" id="branch">
                  <option value="">Please Select Location</option>
                  <option value="Pahang">PAHANG</option>
                  <option value="Selangor">SELANGOR</option>
                  <option value="Johor">JOHOR</option>
                  <option value="Kuala Lumpur">KUALA LUMPUR</option>
                </select>
            </div>
        </div>

        <div class="placeholder-paragraph" id="div">
            <div class="line"></div>
            <div class="line"></div>
        </div>
        
    </div>
</div>
{{-- Carousel --}}
<div id="carouselCoverImage" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('template/assets/carousel/cover_2.jpg')}}" class="d-block w-100" alt="PAKEJ BEKAM">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/cover_3.jpg')}}" class="d-block w-100" alt="EL MEDINA KUANTAN">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/cover_4.jpg')}}" class="d-block w-100" alt="SPORT MASSAGE LELAKI & WANITA">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/cover_1.jpg')}}" class="d-block w-100" alt="URUTAN TRADISIONAL">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselCoverImage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselCoverImage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
 </div>{{-- Carousel End --}}

{{-- Shah Alam Branch --}}
{{-- <iframe src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> --}}

@endsection

@section('js')

<script type="text/javascript">


</script>
@endsection