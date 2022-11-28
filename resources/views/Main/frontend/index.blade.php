@extends('main.frontend.web')
@section('content')
<div class="container-fluid g-0">
    {{-- <div class="sidenav p-3">
        <a href="#logo" class="ucs-logo"><img src="{{asset('Main/frontend/images/ucs_logo.svg')}}"></a>
    </div> --}}


    {{-- <div id="carouselUcs" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="ucs-upper-image ">
                <img src="{{asset('Main/frontend/images/camb-two.jpg')}}">
            </div>
          </div>
          <div class="carousel-item">
            <div class="ucs-upper-image ">
                <img src="{{asset('Main/frontend/images/camb-two.jpg')}}">
            </div>
          </div>
          <div class="carousel-item">
            <div class="ucs-upper-image ">
                <img src="{{asset('Main/frontend/images/camb-two.jpg')}}">
            </div>
          </div>
        </div>
      </div> --}}
      <div class="overlay-ucs">
        <div class="ucs-upper-image ">
            <img src="{{asset('Main/frontend/images/camb-two.jpg')}}">
        </div>
      <div class="cambridge-portion ">
        <div class="row g-0">
            <div class="col-lg-7 col-md-7 col-sm-12 ">
        <img src="{{asset('Main/frontend/images/kembridz.png')}}">
        <h2 class="new mb-0">NEW</h2>
        <h2 class="prog mb-0">Cambridge programme</h2>
        <h2 class="senior mb-0">for senior primary students!</h2>
        <p class="mb-0 ">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.<p>
        <button type="button" class="btn btn-primary learn mt-3">Learn more <i class="fa fa-forward ms-1 mt-1" aria-hidden="true"></i></button>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 d-none d-sm-block">
                <div class="girl-image mt-5 ">
                <img src="{{asset('Main/frontend/images/girl.png')}}" class="img-fluid mt-5"> 
                </div>   
            </div>
        </div>
        </div>
    </div>
</div>
<div class="home-wrapper mt-md-5">
<div class="container">
    <div class="row mt-3 g-0">
        <div class="col-lg-6 col-md-6">
            <div class="text-cambridge">
                <h3>Welcome to International School</h3>
                <p class="me-md-4"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="d-sm-flex two-logo">
            <img src="{{asset('Main/frontend/images/kembridz.png')}}" class="me-md-4">
            <img src="{{asset('Main/frontend/images/ib.png')}}" class="me-md-1 ">
            </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="building-flex text-center mb-5">
            <img src="{{asset('Main/frontend/images/blocks.png')}}" class="img-fluid">
            <img src="{{asset('Main/frontend/images/group.png')}}" class="img-fluid group-image">
            </div>
            </div>

    </div></div>
    <div class="container mt-md-5">
        <div class="row g-0 my-3">
            <div class="col-md-6">
        <div class="video-section mx-sm-2">
        <iframe
        src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
        </iframe>
</div></div>
<div class="col-md-6">
        <div class="video-section mx-sm-2">
        <iframe
        src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
        </iframe>
</div></div>
</div>
</div>
<div class="container">
<div class="endorse text-center">
        <h1>our endoresments</h1>
</div>
<div class="row g-0 justify-content-evenly text-center">

<div class="col-lg-1 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/ucas.jpg')}}" class="img-fluid">
</div>
<div class="col-lg-1 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/sat.jpg')}}" class="img-fluid">
</div>
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/ib.png')}}" class="img-fluid">
</div>
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/ministar.jpg')}}" class="img-fluid">
</div>
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/cam.jpg')}}" class="img-fluid">
</div>
<div class="col-lg-1 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/act.jpg')}}" class="img-fluid">
</div>
<div class="col-lg-1 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/vaslika.png')}}" class="img-fluid">
</div>
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <img src="{{asset('Main/frontend/images/erasmus.png')}}" class="img-fluid">
</div>
</div>
</div>
<div class="container">
    <div class="row g-0">
        <div class="truely-text text-center">
            <h5><span>Truely different</span></h5>
</div>
<div class="modern-text text-center">
    <h5 class="my-4">Modern education in every sense of the world</h5>
    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>
</div>
</div>


<div class="abc-work ">
<div class="container-fluid g-0">
<div class="row g-0 justify-content-center mx-sm-5 mx-2">
<div class="owl-carousel owl-theme" id="owl-first-home">
<div class="item">
<div class="col-lg-12">
<div class="card me-lg-3 mt-2">
<div class="image-one">
<img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid" >
</div>
<div class="d-inline mt-2 mx-2">
 <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
</div>

</div>
<div class="turn">
<div class="text p-4">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.</div>
</div>
</div>
</div>

<div class="item">
<div class="col-lg-12">
    <div class="card me-lg-3 mt-2">
    <div class="image ">
    <img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
    </div>
    <div class="d-inline mt-2 mx-2">
     <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
    </div>
    </div>
    <div class="turn">
    <div class="text p-4">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.</div>
    </div>
</div></div>

<div class="item">
<div class="col-lg-12">
    <div class="card  me-lg-3 mt-2">
    <div class="image ">
    <img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
    </div>
    <div class="d-inline mt-2 mx-2">
     <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
    </div>
    </div>
    <div class="turn">
    <div class="text p-4">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.</div>
    </div>
</div></div>

<div class="item">
<div class="col-lg-12">
    <div class="card  me-lg-3 mt-2">
    <div class="image ">
    <img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
    </div>
    <div class="d-inline mt-2 mx-2">
     <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
    </div>
    </div>
    <div class="turn">
    <div class="text p-4">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.</div>
    </div>
</div></div>
</div>
</div>
</div>
</div>
<div class="team-image my-3 g-0">
<img src="{{asset('Main/frontend/images/team_work.png')}}" class="img-fluid">
</div>
<div class="latest-news mt-5 mb-3 g-0">
<h5 class="text-center">Latest news from internaional school</h5>
<div class="latest-news-cards ">
<div class="container-fluid g-0">
<div class="row g-0 justify-content-center mx-sm-5 mx-2">
   
        {{-- News and events  --}}
                @if(!empty($newsandevents) || isset($newsandevents))
                {{-- {{dd($newsandevents)}} --}}
                @foreach ($newsandevents as $events)
                
                    <div class="col-lg-4 col-md-6 color-tag">
                        <a href="{{ route('news-and-events-detail',$events->slug) }}">
                            <div class="card h-100 my-2 me-2">
                                @if (isset($events->thumbnail))
                                <img src="{{URL('/')}}/Main/frontend/images/NewsAndEvents/{{$events->thumbnail }}" class="card-img-top" alt="...">
                                @endif
                                <div class="card-body">
                                    @if (isset($events->short_description))
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($events->short_description, 150, $end='...') }} </p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                @else
                <div>
                    <p>No Post</p>
                </div>
                @endif
                <div class="news-button text-center my-4" >
                    <a href="{{route('news-and-events')}}" class="btn tuf-tab-bg my-2 px-4"><i class="fa fa-angle-right me-1" aria-hidden="true"></i> MORE</a>
                </div>
            
       
{{-- <div class="col-lg-4 col-md-6">
<div class="card one me-lg-3 mt-2">
<div class="image-one">
<img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
</div>
<div class="d-inline mt-2 mx-2">
 <h4>Data One</h4>
 <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
 <button type="button" class="btn btn-default green-read ps-0">Read more</button>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6">
    <div class="card two me-lg-3 mt-2">
    <div class="image-two ">
    <img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
    </div>
    <div class="d-inline mt-2 mx-2">
     <h4>Data Two</h4>
     <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
     <button type="button" class="btn btn-default green-read ps-0">Read more</button>
    </div>
    </div>
</div>


<div class="col-lg-4 col-md-6">
    <div class="card three me-lg-3 mt-2">
    <div class="image-three ">
    <img src="{{asset('Main/frontend/images/chairs.png')}}" class="img-fluid">
    </div>
    <div class="d-inline mt-2 mx-2">
     <h4>Data Three</h4>
     <h6>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h6>   
     <button type="button" class="btn btn-default green-read ps-0">Read more</button>
    </div>
    </div>
</div> --}}
</div>
</div>
</div>
</div>

{{-- Counter Section --}}
<div class="chemical-counter pt-sm-5 pb-sm-2 py-2">
<div class="container chemical-text">
    <div class="row text-center ">
    <div class="col-md-3 col-sm-4 col-6">
    <div class="counter">
        <div class="ucs-counter">
            <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
             <h2 class="counter-num mt-2" data-toggle="counterUp" >4</h2>
             <h5 class="counter-text">Best Cambridge Students in the world</h5>
        </div>
    </div>
    </div>
    <div class="col-md-3 col-sm-4 col-6">
        <div class="counter">
            <div class="ucs-counter">
                <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
                 <h2 class="counter-num mt-2" data-toggle="counterUp" >11</h2>
                 <h5 class="counter-text">Cambridge subjects</h5>
            </div>
    </div>
    </div>
        
    <div class="col-md-3 col-sm-4 col-6">
        <div class="counter">
            <div class="ucs-counter">
                <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
                 <h2 class="counter-num-one mt-2" data-toggle="counterUp" >31</h2>
                 <h5 class="counter-text">Satisfied students</h5>
            </div>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-4 col-6">
        <div class="counter">
            <div class="ucs-counter">
                <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
                 <h2 class="counter-num-two mt-2" data-toggle="counterUp" >30</h2>
                 <h5 class="counter-text">Cambridge Exams passing rate</h5>
            </div>
    </div>
    </div></div>

    </div></div>

    
    <div class="regonize-section text-center mt-5 mb-3">
        <div class="container">
        <h3>Global recognition and awards as a confirmation of quality</h3>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="row g-0 my-3">
            <div class="col-md-6">
        <div class="video-section mx-sm-2">
        <iframe
        src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
        </iframe>
        </div></div>
        <div class="col-md-6">
        <div class="video-section mx-sm-2">
        <iframe
        src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
        </iframe>
        </div></div>
        </div>
    </div>
    </div>

    <div class="download-section my-3">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{asset('Main/frontend/images/banner-one.png')}}" class="img-fluid banner-one">
            </div>
            <div class="col-md-6">
                <img src="{{asset('Main/frontend/images/banner-two.png')}}" class="img-fluid banner-two">
            </div>
        </div>
    </div>
    <div class="container">
    <div class="international-school text-center mt-5 mb-3">
        <h3>What do international School students and their parents say</h3>
        <div class="owl-carousel owl-theme" id="owl-second-home">
            
            <div class="item">
            <div class="col-lg-12">
                <div class="card text-center me-lg-3 mt-2 p-3">
                <h6>Making it easier to enrol into universities abroad</h6>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et ac.</p>
                <div class="avatar my-1">
                    <span></span>
                </div>
                <h6>Milica Prvulj</h6>
                <p>Milica Mom</p>
                </div>
            </div></div>
            
            <div class="item">
                <div class="col-lg-12">
                    <div class="card text-center me-lg-3 mt-2 p-3">
                    <h6>Making it easier to enrol into universities abroad</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et ac.</p>
                    <div class="avatar my-1">
                        <span></span>
                    </div>
                    <h6>Milica Prvulj</h6>
                    <p>Milica Mom</p>
                    </div>
            </div></div>
            
            <div class="item">
                <div class="col-lg-12">
                    <div class="card text-center me-lg-3 mt-2 p-3">
                    <h6>Making it easier to enrol into universities abroad</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et ac.</p>
                    <div class="avatar my-1">
                        <span></span>
                    </div>
                    <h6>Milica Prvulj</h6>
                    <p>Milica Mom</p>
                    </div>
            </div></div>
            </div>
    </div></div>

    <div class="enrollment mt-3 mb-5">
        <div class="container">
            <div class="d-flex">
                <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
                <div class="d-inline ms-sm-3 mt-3">
                    <h4>Enrollment for class 2023/24 is underway!</h4>
                    <div class="d-flex">
                    <a href="#">Click here to register</a>
                    <i class="fa fa-forward ms-2 mt-2" aria-hidden="true" style="color: red"></i>	 
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection