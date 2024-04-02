@extends('thepublic.layout.othermaster')
@section('title')
    <title>
        مدوس خلاقیت فردا
    </title>
@endsection
@section('css')
    <link href="{{url('/')}}/assets/css/swiper-bundle.min.css">
    <link href="{{url('/')}}/assets/css/swiper-init.css">
@endsection
@section('heading1')
        مدوس خلاقیت فردا
@endsection
@section('main')
    <main class="therteenmain">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper">
                @isset($gallery)
                     @foreach ( $gallery as  $img)
                        <div class="swiper-slide">
                            <img src="{{url('/')}}/{{$img->mainImg}}" />
                        </div>
                     @endforeach   
                @endisset
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{url('/')}}/{{$img->mainImg}}" width="100px" height="auto" />
                </div>
            </div>
          </div>
        
    </main>
@endsection
@section('js')
    <script src="{{url('/')}}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/swiper-init.js"></script>
@endsection