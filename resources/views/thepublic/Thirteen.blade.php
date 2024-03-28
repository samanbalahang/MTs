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
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/movies/">
                            <div class="card-header p-0">

                                <img src="{{ url('/') }}/assets/images/movie.png" alt="png">

                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    فیلمها و سریالهای مورد علاقه
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                   <div class="card">
                        <a href="{{url('/')}}/books/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/book.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    کتاب های مورد علاقه MT
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/podcasts/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/podcasts.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    پادکست های MT
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/news/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/news.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    اخبار
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <a href="{{url('/')}}/health/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/health.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    باشگاه سلامت MT
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <a href="#">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/shop.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    فروشگاه آنلاین MT
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
