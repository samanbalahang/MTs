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
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/') }}/movies">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/movie.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                   فیلم ها
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{url('/') }}/books">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/book.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    کتابها
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 my-3">
                    <div class="card">
                        <a href="{{ url('/') }}/podcasts/">
                            <div class="card-header p-0">
                                <img src="{{ url('/') }}/assets/images/podcasts.png" alt="png">
                            </div>
                            <div class="card-body">
                                <h2 class='text-center'>
                                    پادکست ها
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
