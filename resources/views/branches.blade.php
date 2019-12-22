@extends ('layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pl-5 pr-5">
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

        <div id="div"> </div>

        <div id="all-branches">
            {{-- Kuantan --}}
            <div class="row" style="border: 1px dotted black;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy" 
                    width="500" height="300" frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.kuantan') }}" style="color:black;">EL MEDINA SPA BEKAM Kuantan</a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>010 - 838 7030</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM +item.branchName+"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamkuantan/" target="_blank" style="color:black;">https://www.facebook.com/elmedinaspabekamkuantan/</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Shah Alam --}}
            <div class="row" style="border: 1px dotted black;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy" 
                    width="500" height="300" frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"> <a href="{{route('branches.shah-alam') }}" style="color:black;">EL MEDINA SPA BEKAM Shah Alam </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>No. 17, 1, Jalan Plumbum R 7/R, Seksyen 7, 40000 Shah Alam, Selangor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>013 - 200 9518</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM +item.branchName+"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamshahalam/" target="_blank" style="color:black;">https://www.facebook.com/elmedinaspabekamshahalam/</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Bangi --}}
            <div class="row" style="border: 1px dotted black;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.491109200717!2d101.75445281525252!3d2.961142855104205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbe18e82a0db%3A0x5bae158640d76c66!2sEl%20Medina%20Spa%20Bekam%20-%20Bangi!5e0!3m2!1sen!2smy!4v1576500339532!5m2!1sen!2smy" 
                    width="500" height="300" frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.bangi') }}" style="color:black;"> EL MEDINA SPA BEKAM Bangi </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>2nd Floor, 1-09-03, Jln Medan Pusat Bandar 7, Seksyen 9, 43650 Bandar Baru Bangi, Selangor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>017 - 727 1152</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM Bangi"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekambangi/" target="_blank" style="color:black;">https://www.facebook.com/elmedinaspabekambangi/</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            {{-- Johor Bahru --}}
            <div class="row" style="border: 1px dotted black;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16421.356899928163!2d103.69805845728803!3d1.4905870294991632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da72bee481bedf%3A0xdff5448648e97aa3!2sEl%20Medina%20Spa%20Bekam%20-%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1576500453749!5m2!1sen!2smy" 
                    width="500" height="300" frameborder="0" style="" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 style="font-weight:bold;"><a href="{{route('branches.johor-bahru') }}" style="color:black;"> EL MEDINA SPA BEKAM Johor Bahru </a></h3>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">
                            <i class="fas fa-home" title="Address"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>29, Uda Business Centre, 01, Jln Padi Emas 1/5, Bandar Baru Uda, 81200 Johor Bahru, Johor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">
                            <i class="fas fa-phone" title="Telephone Number"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5>013 - 999 8458</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">
                            <i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM Johor Bahru"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">
                            <h5> <a href="https://www.facebook.com/elmedinaspabekamjohorbahru/" target="_blank" style="color:black;">https://www.facebook.com/elmedinaspabekamjohorbahru/</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
        </div>
        
    </div>
</div>

{{-- Carousel --}}
<div id="carouselCoverImage" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('template/assets/carousel/branch/branch_kuantan.jpg')}}" class="d-block w-100" alt="EL MEDINA SPA BEKAM KUANTAN">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/branch/branch_shah_alam.jpg')}}" class="d-block w-100" alt="EL MEDINA SPA BEKAM SHAH ALAM">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/branch/branch_bangi.jpg')}}" class="d-block w-100" alt="EL MEDINA SPA BEKAM BANGI">
        </div>
        <div class="carousel-item">
        <img src="{{asset('template/assets/carousel/branch/branch_johor.jpg')}}" class="d-block w-100" alt="EL MEDINA SPA BEKAM JOHOR">
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