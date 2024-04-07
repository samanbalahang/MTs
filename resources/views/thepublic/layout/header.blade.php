<body class="pages">
    <header class="d-flex justify-content-between align-items-center p-3">
        <a href="#" class="d-block col-4">
            @switch($thispage->id)
                 @case(1)
                        <img src="{{url('/')}}/assets/images/char.png" alt="tree" class="logo">
                    @break
                 @case(2)
                        <img src="{{url('/')}}/assets/images/writer.png" alt="tree" class="logo">
                    @break
                 @case(3)
                        <img src="{{url('/')}}/assets/images/discover.png" alt="tree" class="logo">
                    @break
                 @case(4)
                        <img src="{{url('/')}}/assets/images/metavers.png" alt="tree" class="logo">
                    @break
                 @case(5)
                        <img src="{{url('/')}}/assets/images/event.png" alt="tree" class="logo">
                    @break
                 @case(6)
                        <img src="{{url('/')}}/assets/images/construction.png" alt="tree" class="logo">
                 @break
                 @case(7)
                        <img src="{{url('/')}}/assets/images/trading.png" alt="tree" class="logo">
                 @break
                 @case(8)
                        <img src="{{url('/')}}/assets/images/globalresearch.png" alt="tree" class="logo">
                 @break
                 @case(9)
                        <img src="{{url('/')}}/assets/images/5-1.png" alt="tree" class="logo">
                 @break
                 @case(10)
                        <img src="{{url('/')}}/assets/images/nature.png" alt="tree" class="logo">
                 @break
                 @case(11)
                        <img src="{{url('/')}}/assets/images/fly.png" alt="tree" class="fly">
                 @break
                 @case(12)
                        <img src="{{url('/')}}/assets/images/globalrelations.png" alt="tree" class="logo">
                 @break
                 @default
                        <img src="{{url('/')}}/assets/images/13.png" alt="tree" class="logo">
                 @break
            @endswitch
        </a>
        <div class="d-flex flex-column justify-content-center align-items-center col-4">
            <h1>
                {{$thispage->title}}
            </h1>
            <img src="{{url('/')}}/assets/images/heading-undrline.png" alt="undrline">
        </div>
        <a href="{{url('/')}}" class="d-block col-4 text-end">
            <img src="{{url('/')}}/assets/images/mt.png" alt="MT-fav.png" class="logo">
        </a>
    </header>
