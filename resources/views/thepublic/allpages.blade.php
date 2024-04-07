@extends('thepublic.layout.othermaster')
@section('title')
    <title>
        مرجان ترابی-
        -
        @if(isset($heading))
            {{$heading}}
        @else
        13
        @endif
    </title>
@endsection
@section('css')
@endsection
@section('heading1')
    @if(isset($heading))
    {{$heading}}
    @else
        13
    @endif
@endsection
@section('main')
    <main>
        <div class="container allpages">
            <div class="row">
                @if(isset($allpages))
                    @foreach ($allpages as $page)
                    <div class="col-12 col-md-4 my-3">
                        <div class="card">
                            <a href="{{url('/')}}/movies/{{$page->uri}}">
                                <div class="card-header p-0">

                                    <img src="{{url('/') }}/{{$page->mainImg}}" alt="png">

                                </div>
                                <div class="card-body">
                                    <h2 class='text-center'>
                                        {{$page->title}}
                                    </h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>
                        کاربرگرامی درحال تولید محتوای ارزشمند و کاربردی و ارزش محور برای شما هستیم.
                    </p>
                @endif
            </div>
        </div>
    </main>
@endsection
