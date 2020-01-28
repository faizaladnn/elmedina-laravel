@extends ('layouts.master')
@section ('content')

<div class="uk-background-fixed uk-background-center-center uk-height-medium" style="background-image: url({{ asset('public/template/assets/carousel/cover_5.jpg')}});">
    <div class="content content-fixed">
        <div class="uk-text-left uk-text-bolder uk-panel uk-padding-large uk-padding-remove-bottom uk-dark"><h4><span style="background-color:white; font-size:2rem;">HYPERVOLT THERAPY </span></h4></div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <dl class="uk-description-list">
                    <dt><h5 class="text-uppercase">{{ __('common.duration') }}</h5></dt>
                    <dd>
                        <p class="font-weight-light text-justify">
                            Hypervolt adalah high-tech massage therapy tool yang direka untuk digunapakai oleh para atlet. Hypervolt mengunakan vibration technique 
                            untuk membantu meningkatkan “range of motion” dan membantu untuk proses penyembuhan selepas aktiviti sukan. Hypervolt adalah salah satu 
                            seni yang mengunakan urutan getaran untuk membantu memberikan kesan relax pada otot yang lenguh dan otot yang mengeras, dan juga membantu 
                            meningkatkan pengaliran darah. Hypervolt  ini senang untuk digunakan untuk “self-myofascial release”. Walaubagaimanapun, hypervolt ini 
                            tidak sesuai untuk digunakan pada wanita yang mengandung, masalah penyakit diabetes dengan komplikasi terhadap neuropathy dan 
                            masalah mata, orang yang mengunakan pacemaker pada jantung, masalah sawan, “metal plating” pada tulang, orang yang mempunyai masalah 
                            tulang belakang seperti (herniated disks, spondylolisthesis, spondylosis dan recent joint replacement).
                        </p>
                    </dd>
                </dl>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="text-uppercase">{{ __('common.benefits') }}</h5>
                <ul class="uk-list uk-list-striped">
                    <li>Digunakan untuk meningkatkan persembahan fizikal</li>
                    <li>Mengurangkan kesan penuaan terhadap tulang,otot dan tendon</li>
                    <li>Melembutkan otot-otot</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <br/><br/>
                <a href="{{route('login')}}" class="btn btn-outline-wrng" style="border-width:medium; padding: 20px;"> <span class="uk-text-uppercase" style="color:black;">{{ __('common.make_an_appointment') }}</span></a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    @include('branches.slider.johor_bahru')
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
</script>
@endsection