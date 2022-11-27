@extends('main.frontend.web')
@section('content')
<div class="press-release-detail-wrapper">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="press-detail">
                    <div class="press-thumbnail">
                        @if(isset($newsEvents))
                            <img src="{{URL('/')}}/Main/frontend/images/NewsAndEvents/{{$newsEvents->thumbnail}}" alt="" class="w-100 py-3 px-4">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="headings">
            {{-- title  --}}
            @if (isset($newsEvents->name))
                <h1 class="mt-4">{{ $newsEvents->name  }}</h1>
            @endif
            {{-- ck editor  --}}
            @if (isset($newsEvents->description))
                <p class="text-black"> {!! $newsEvents->description  !!}</p>
            @endif
        </div>
        {{-- Related Post start here --}}
        @if(!$recentsEvents->isEmpty())
        <div class="press-release-slide mb-5">
            <h4 class="text-red mb-3">Related Post</h4>
            <div class="owl-carousel owl-theme category-slides">
                @foreach ($recentsEvents as $relates)
                    @if (isset($relates))
                    <div class="item mx-2 h-100">
                        <a href="{{ route('news-and-events-detail',$relates->slug) }}">
                            @if(isset($relates->thumbnail))
                                <div class="testimonials">
                                    <img src="{{URL('/')}}/Main/frontend/images/NewsAndEvents/{{$relates->thumbnail }}" > 
                                </div>
                            @endif
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endif
        {{-- Related Post end here --}}
    </div>
</div>

@endsection
@push('js')
    <script> 
          $('.category-slides').owlCarousel({
            loop: true,
            dots: true,
            responsiveClass: true,
            autoplay:true,
            autoplayTimeout:4000,
            margin:02,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:3,
                }
            }
        })
    </script>
@endpush