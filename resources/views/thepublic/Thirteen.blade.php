@extends('thepublic.layout.othermaster')
@section('title')
    <title>
        مرجان ترابی-
        -
        13
    </title>
@endsection
@section('css')
@endsection
@section('heading1')
    13
@endsection
@section('main')
    <main class="therteenmain">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/صورتی محکم/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/writer-card.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    موسسه پویش صورتی محکم
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                   <div class="card">
                        <a href="{{url('/')}}/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/marjan-card.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    موسسه خالق کسب و کارِ مرجان ترابی
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/چرخه حیات/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/char-card.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                        موسسه چرخه حیات
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/news/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/sajad-sallarvand.jpg" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    موسسه سجاد سالاروند
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/health/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/health.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    باشگاه سلامت
                                    <span class="en-font">
                                        MT
                                    </span>
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/shop.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    فروشگاه آنلاین 
                                    <span class="en-font">
                                        MT
                                    </span>
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{route('future')}}">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/future-creation-03.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    مدوس خلاقیت فردا
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/gallery.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    گالری عکس
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
