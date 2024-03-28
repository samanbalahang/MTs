@extends("thepublic.layout.master")
@section("title")
<title>
    مرجان ترابی-
    {{$thispage->title}}
</title>
@endsection
@section("css")

@endsection
@section("main")
<main>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="w-100 h-100 d-flex align-items-center">
                    <div>
                        {!! $thispage->content !!}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="w-100 text-end">
                    @if(!isset($thispage->mainImg))
                    <img src="{{url('/')}}/assets/images/001.png" alt="">
                    @else
                    <img src="{{url('/')}}/{{$thispage->mainImg}}" alt="{{$thispage->title}}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
